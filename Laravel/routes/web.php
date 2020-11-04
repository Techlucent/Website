<?php

// use Illuminate\Support\Facades\Route;
 use app\Http\Controllers\FrontController;

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

 Route::get('/home', function () {
     return view('homeContent');
 });

 Route::get('/contactUs', function () {
    return view('contactUs');
 });

 Route::get('/aboutUs', function () {
    return view('about');
 });

 Route::get('/team', function () {
    return view('team');
 });

 Route::get('/terms', function () {
    return view('terms');
 });

 Route::get('/skills', function () {
    return view('skills');
 });

 Route::get('/testimonials', function () {
    return view('testimonials');
 });
//Route::get('/', [FrontController::Class, 'index']);

//Route::get('/', 'app\Http\Controllers\FrontController@index');
