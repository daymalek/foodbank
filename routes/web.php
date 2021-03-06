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
}) ->name('home');

Route::get('/register', 'EmployeeController@register')->name('employees.register');
Route::post('/register', 'EmployeeController@postRegistration')->name('employees.registration');
Route::get('/login', 'EmployeeController@login')->name('employees.login');
Route::post('/login', 'EmployeeController@postLogin')->name('employees.postLogin');

