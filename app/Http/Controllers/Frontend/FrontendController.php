<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;

class FrontendController extends Controller
{
    protected function index()
    {
        $projects = Project::latest('completion_date')->limit(6)->get();
        return view('frontend.index', compact('projects'));
    }

    protected function projectList()
    {
        $projects = Project::latest('completion_date')->get();
        return view('frontend.project', compact('projects'));
    }
}
