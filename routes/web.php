<?php

use App\Http\Controllers\BookController;
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
Route::get("/book",[BookController::class,'create']);
Route::get("/viewallfaculty",[FacultyController::class,'index']);
Route::get("/viewallstudents",[StudentController::class,'index']);
Route::get("/viewallbus",[BusController::class,'index']);
Route::post("/searchfacuty",[FacultyController::class,'searchFaculty']);
Route::post("/searchBus",[BusController::class,'searchBus']);

Route::post("/bookread",[BookController::class,'store']);
Route::post("facultyread",[FacultyController::class,'store']);
Route::post("/busread",[BusController::class,'store']);
Route::post("/studentread",[StudentController::class,'store']);