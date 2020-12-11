<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all()->sortByDesc('created_at');
        return view('projects.index',['projects'=>$projects]);
    }
}

