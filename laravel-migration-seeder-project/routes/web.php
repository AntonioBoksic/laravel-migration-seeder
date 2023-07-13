<?php

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


// QUA IMPORTIAMO IL CONTROLLER
use App\Http\Controllers\MainController;

Route::get("/", [MainController :: class, "index"]) -> name("welcome");
