<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Project::class,'project');
    }
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
        $project->fill($request->all());
        $project->user_id = $request->user()->id;
        $project->save();
        dd($project);
        return redirect()->route('projects.index');
    }

    public function edit(Project $project)
    {
        return view('projects.edit',['project' => $project]);
    }

    public function update(ProjectRequest $request,Project $project)
    {
        //user_idの更新は必要ないので記載を省略
        $project->fill($request->all())->save();
        return redirect()->route('projects.index');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index');
    }

    public function show(Project $project)
    {
        return view('projects.show',['project'=>$project]);
    }
    public function like(Request $request,Project $project)
    {
        $project->likes()->detach($request->user()->id);
        $project->likes()->attach($request->user()->id);

        return [
            'id' => $project->id,
            'countLikes' => $project->count_likes,
        ];
    }
    public function unlike(Request $request,Project $project)
    {
        $project->likes()->detach($request->user()->id);

        return [
            'id' => $project->id,
            "countLikes" => $project->count_likes,
        ];
    }
}


