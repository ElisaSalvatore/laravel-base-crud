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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', "HomeController@index")->name("home");

// Route::resource("comics", "ComicController");
Route::get("branches", "BranchController@index")->name("branches.index");
Route::get("branches/{branch}", "BranchController@show")->name("branches.show");
Route::get("branches/create", "BranchController@create")->name("branches.create");