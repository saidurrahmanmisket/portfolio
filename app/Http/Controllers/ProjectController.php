<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    function projectPage() {
        return view('pages.ProjectPage');
    }

    
    function projectData() {
        return DB::table('projects')->get();
    }


}
