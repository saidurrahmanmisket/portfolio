<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('app');
// });


Route::get('/', [HomeController::class, 'homePage']);
Route::get('/resume', [ResumeController::class, 'resumePagee']);
Route::get('/projects', [ProjectController::class, 'projectPage']);
Route::get('/contact', [ContactController::class, 'contactPage']);



Route::get('/heroData', [HomeController::class, 'heroData']);
Route::get('/aboutData', [HomeController::class, 'aboutData']);
Route::get('/socialData', [HomeController::class, 'socialData']);
Route::get('/projectData', [ProjectController::class, 'projectData']);
Route::get('/experienceData', [ResumeController::class, 'experienceData']);
Route::get('/educationData', [ResumeController::class, 'educationData']);
Route::get('/resumesLink', [ResumeController::class, 'resumesLink']);
Route::get('/skillData', [ResumeController::class, 'skillData']);
Route::get('/LanguageData', [ResumeController::class, 'LanguageData']);
Route::post('/contactRequest', [ContactController::class, 'contactRequest']);
