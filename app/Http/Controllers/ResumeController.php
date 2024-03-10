<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    function resumePagee() {
        return view('pages.ResumePage');
    }

    function experienceData() {
        return DB::table('experiences')->get();
    }

    function educationData() {
        return DB::table('educations')->get();
    }
    function resumesLink() {
        return DB::table('resumes')->first();
    }
    function skillData() {
        return DB::table('skills')->get();
    }
    function LanguageData() {
        return DB::table('languages')->get();
    }

}
