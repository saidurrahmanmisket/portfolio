<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function homePage() {
        return view('pages.HomePage');
    }

    function heroData() {
        return DB::table('heroproperties')->first();
    }

    function aboutData() {
        return DB::table('abouts')->first();
    }
    function socialData() {
        return DB::table('socials')->first();
    }
}
