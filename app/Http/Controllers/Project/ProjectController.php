<?php
namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProjectRequest;
use App\Models\Project;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ProjectController extends Controller
{
    protected function list()
    {
        if(hasReadAccess(3)) {
            return view('admin.project.list');
        }
        return redirect()->route('dashboard');
    }

    protected function listDT()
    {
        $roles = Project::query();
        return DataTables::eloquent($roles)
            ->setRowAttr(['data-id' => '{{$id}}'])
            ->addIndexColumn()
            ->addColumn('attachment_url_formatted', function($project) {
                return getFromDisk($project->attachment_url);
            })
            ->addColumn('read_access', '{{hasReadAccess(3)}}')
            ->addColumn('write_access', '{{hasWriteAccess(3)}}')
            ->addColumn('delete_access', '{{hasDeleteAccess(3)}}')
            ->addColumn('role', '{{role()}}')
            ->toJson();
    }

    protected function modal($id = false)
    {
        if ($id) {
            $project = Project::find($id);
        } else {
            $project = new Project();
        }
        return view('admin.project.modal', compact('project'));
    }

    protected function save(ProjectRequest $data, $id = false)
    {
//        dd($data->all());
        DB::beginTransaction();
        try {
            $project = new Project();
            if ($id) {
                $project = Project::findOrFail($id);
            }
            $project->title = $data['title'];
            $project->location = $data['location'];
            $project->completion_date = date('Y-m-d', strtotime($data['completion_date']));
            $project->service_provided = $data['service_provided'];
            $project->description = $data['project_description'];
            if ($data['attachment_url']) {
                deleteFromDisk($project->attachment_url);
                $project->attachment_url = storeToDisk($data['attachment_url'], 'projects', time());
            }
            $project->save();
            DB::commit();
            return successResponse();
        } catch (\Exception $e) {
            DB::rollBack();
            return errorResponse($e->getMessage());
        }

    }

    protected function delete($id)
    {
        Project::whereId($id)->delete();
        return deleteResponse();
    }
}
