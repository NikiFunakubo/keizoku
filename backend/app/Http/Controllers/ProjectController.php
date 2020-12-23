<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all()->sortByDesc('created_at');
        return view('projects.index',['projects'=>$projects]);
    }
    public function create()
    {
        return view('projects.create');
    }
    public function store(ProjectRequest $request,Project $project)
    {
        $project->project_name = $request->project_name;
        $project->project_description = $request->project_description;
        $project->user_id = $request->user()->id;
        $project->target_days = $request->target_days;
        $project->achievement_days = $request->achievement_days;
        //$project->tags = $request->tags;
        $project->save();
        return redirect()->route('projects.index');
    }
}


