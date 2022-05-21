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
    return '<h1> Carl Louie Zarate and My Personal Information </h1>
    <h2> Studies at UST Angelicum College </h2>
    <h2> 21 years old </h2>
    <h2> Information Technology</h2>
    <h2> October 19, 2000 </h2>';
});

Route::get('/news/{mm}/{dd}/{yyyy}', function ($mm, $dd, $yyyy) {
    return '<h1> Month: '.$mm.', Day: '.$dd.', Year: ' .$yyyy.' </h1>';
});

Route::get('//About/{age}/{name}', function ($age, $name) {
    return '<h1> I am '.$name.'. I am '.$age.' Years Old </h1>';
})->where(['age' => '[0-9]+']);


