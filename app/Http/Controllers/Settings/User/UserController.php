<?php

namespace App\Http\Controllers\Settings\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Settings\UserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    protected function list()
    {
        if(hasReadAccess(2)) {
            return view('admin.settings.user.list');
        }
        return redirect()->route('dashboard');
    }

    protected function listDT()
    {
        $users = User::with('role');
        return DataTables::eloquent($users)
            ->setRowAttr(['data-id' => '{{$id}}'])
            ->addIndexColumn()
            ->addcolumn('role_name', function($user) {
                return $user->role->name;
            })
            ->addColumn('read_access', '{{hasReadAccess(2)}}')
            ->addColumn('write_access', '{{hasWriteAccess(2)}}')
            ->addColumn('delete_access', '{{hasDeleteAccess(2)}}')
            ->addColumn('role', '{{role()}}')
            ->toJson();
    }

    protected function modal($id = false)
    {
        if ($id) {
            $user = User::find($id);
        } else {
            $user = new User();
        }
        $roles = Role::oldest('name')->get();
        return view('admin.settings.user.modal', compact('user', 'roles'));
    }

    protected function save(UserRequest $data, $id = false)
    {
        $user = new User();
        if ($id) {
            $user = User::findOrFail($id);
        }
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->phone = $data['phone'];
        $user->role_id = $data['role_id'];
        $user->password = Hash::make('123456');
        $user->save();
        return successResponse();
    }

    protected function delete($id)
    {
        User::whereId($id)->delete();
        return deleteResponse();
    }
}
