<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Game1Controller;
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
//Route::resource('games', Game1Controller::class);

Route::view('/', view:'index');

Route::view('about', view:'about');

Route::view('contact', view:'contact');


