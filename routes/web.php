<?php

use App\Http\Controllers\BusController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });
Route::get("/", [FacultyController::class,'create']);
Route::get("/student",[StudentController::class,'create']);
Route::get("/busadd",[BusController::class,'create']);
Route::post("facultyread",[FacultyController::class,'store']);