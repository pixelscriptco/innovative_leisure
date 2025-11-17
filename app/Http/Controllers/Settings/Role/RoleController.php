<?php

namespace App\Http\Controllers\Settings\Role;

use App\Http\Controllers\Controller;
use App\Http\Requests\PrivilegeRequest;
use App\Http\Requests\RoleRequest;
use App\Models\Privilege;
use App\Models\PrivilegeRole;
use App\Models\Role;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class RoleController extends Controller
{
    protected function list()
    {
        if(hasReadAccess(1)) {
            return view('admin.settings.role.list');
        }
        return redirect()->route('dashboard');
    }

    protected function listDT()
    {
        $roles = Role::query();
        return DataTables::eloquent($roles)
            ->setRowAttr(['data-id' => '{{$id}}'])
            ->addIndexColumn()
            ->addColumn('read_access', '{{hasReadAccess(1)}}')
            ->addColumn('write_access', '{{hasWriteAccess(1)}}')
            ->addColumn('delete_access', '{{hasDeleteAccess(1)}}')
            ->addColumn('role', '{{role()}}')
            ->toJson();
    }

    protected function modal($id = false)
    {
        if ($id) {
            $role = Role::find($id);
        } else {
            $role = new Role();
        }
        return view('admin.settings.role.modal', compact('role'));
    }

    protected function save(RoleRequest $data, $id = false)
    {
        $role = new Role();
        if ($id) {
            $role = Role::findOrFail($id);
        }
        $role->name = $data['name'];
        $role->company_id = $data['company_id'] ? implode(',', $data['company_id']) : "";
        $role->description = $data['description'];
        $role->save();
        return successResponse();
    }

    protected function delete($id)
    {
        Role::whereId($id)->delete();
        return deleteResponse();
    }

    protected function privilege($id)
    {
        $privileges = Privilege::with(['privilegeRole' => function ($query) use ($id) {
            $query->where('role_id', $id);
        }])->where('is_side_url', 1)->oldest('name')->get();
        return view('admin.settings.role.privilege', compact('privileges'));
    }

    protected function privilegeAssign(PrivilegeRequest $request, $id)
    {
        foreach ($request->privilege_id as $key => $value) {
            $read = 'read-' . $value;
            $write = 'write-' . $value;
            $delete = 'delete-' . $value;

            if (isset($request->$read) || isset($request->$write) || isset($request->$delete)) {
                $assign = PrivilegeRole::where('role_id', $id)->where('privilege_id', $value)->first();
                if (!($assign)) {
                    $assign = new PrivilegeRole();
                    $assign->id = PrivilegeRole::max('id') + 1;
                    $assign->role_id = $id;
                    $assign->privilege_id = $value;
                }
                if (isset($request->$read)) {
                    $assign->read_access = 1;
                } else {
                    $assign->read_access = 0;
                }
                if (isset($request->$write)) {
                    $assign->write_access = 1;
                } else {
                    $assign->write_access = 0;
                }
                if (isset($request->$delete)) {
                    $assign->delete_access = 1;
                } else {
                    $assign->delete_access = 0;
                }
                $assign->save();

            } else {
                PrivilegeRole::where('role_id', $id)->where('privilege_id', $value)->delete();
            }

        }

        return successResponse('Successfully Assigned');
    }
}
