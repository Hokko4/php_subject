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
    // return view('welcome');
    return redirect()->route('employee.list');
});

// Route::resource('employee', 'EmployeeController');
Route::get('/employee', 'EmployeeController@list')->name('employee');

Route::get('/employee/list', 'EmployeeController@list')->name('employee.list');

Route::get('/employee/detail', function() {
  return view('employee/detail');
})->name('employee.detail');

Route::get('/employee/regist', 'EmployeeController@regist')->name('employee.regist');

Route::post('/employee/regist', 'EmployeeController@regist')->name('employee.regist');

Route::post('/employee/confirm', 'EmployeeController@confirm')->name('employee.confirm');

Route::post('/employee/done', 'EmployeeController@done')->name('employee.done');
