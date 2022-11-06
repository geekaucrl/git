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

Route::get('/', function () {
    return view('welcome');
});
Route::get('users', function () {
    $name="anouar";
    return view('users',compact('name'));
});
Route::get('users/{name} ', function (int $name){
    if($name == 1){
    return "admin"; }
    else
        return "user";
});
Route::get('posts',[\App\Http\Controllers\PostController::class,'ShowUsers']);



Route::resource('userController', \App\Http\Controllers\userController::class);
