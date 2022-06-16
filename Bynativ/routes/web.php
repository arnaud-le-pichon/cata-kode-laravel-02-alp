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

Route::get(
    'meeting',
    'MeetingController@create'
)->name('create-meeting');

Route::post(
    'meeting',
    'MeetingController@store'
)->name('save-meeting');

Route::get(
    'meeting/{meeting}',
    'MeetingController@get'
)->name('get-meeting');