<?php

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

Route::get('/login', function () {
    return view('php/login');
});

Route::get('/index', function () {
    return view('php/index');
});

Route::get('/user', function () {
    return view('php/user');
});

Route::get('/attend', function () {
    return view('php/attend');
});

Route::get('/classroom', function () {
    return view('php/classroom');
});

Route::get('/classroom_edit', function () {
    return view('php/classroom_edit');
});

Route::get('/editBooth', function () {
    return view('php/editBooth');
});

Route::get('/header', function () {
    return view('php/header');
});

Route::get('/index2', function () {
    return view('php/index2');
});

Route::get('/layout', function () {
    return view('php/layout');
});

Route::get('/registLayout', function () {
    return view('php/registLayout');
});

Route::get('/schedule', function () {
    return view('php/schedule');
});

Route::get('/registUser', function () {
    return view('php/registUser');
});

//Route::get('/user', 'ConnectController@login');

Route::get('/dbtest', function () {
    return view('php/dbtest');
});

Route::get('/attend2', function () {
    return view('php/attend2');
});