<?php

namespace App\Http\Controllers;


use App\Models\Logo;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController
{
    public function index() {
        // $projects => Project::all();
        $logos = Logo::all();
        $projects = Project::all();



        return view('contents.projects', [
            'logos' => $logos,
            'projects' => $projects

        ]);
    }
}
