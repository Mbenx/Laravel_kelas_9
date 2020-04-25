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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/cek', function () {
//     return view('cek');
// });

// Route::get('/hello', function () {
//     return "Hello Kelas 9";
// });

// Route::get('/hello/{id}', function ($id) {
//      return "Hello Kelas ".$id;
// });

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/trialIndex', 'HomeController@trialIndex');

Route::get('/department', 'DepartmentController@index');
Route::get('/department/create', 'DepartmentController@create');
Route::post('/department/store', 'DepartmentController@store');
Route::get('/department/edit/{id}', 'DepartmentController@edit');
Route::put('/department/update', 'DepartmentController@update');
Route::get('/department/delete/{id}', 'DepartmentController@destroy');

Route::get('/position', 'PositionController@index');
Route::get('/position/create', 'PositionController@create');
Route::post('/position/store', 'PositionController@store');
Route::get('/position/edit/{id}', 'PositionController@edit');
Route::put('/position/update', 'PositionController@update');
Route::get('/position/delete/{id}', 'PositionController@destroy');

Route::get('/employee', 'EmployeeController@index');
// input
Route::get('/employee/create', 'EmployeeController@create');
Route::post('/employee/store', 'EmployeeController@store');
// edit
Route::get('/employee/edit/{id}', 'EmployeeController@edit');
Route::put('/employee/update', 'EmployeeController@update');
// delete
Route::get('/employee/delete/{id}', 'EmployeeController@destroy');
// show
Route::get('/employee/show/{id}', 'EmployeeController@show');

Route::get('/inventory', 'InventoryController@index');
Route::get('/inventory/create', 'InventoryController@create');
Route::post('/inventory/store', 'InventoryController@store');
Route::get('/inventory/edit/{id}', 'InventoryController@edit');
Route::put('/inventory/update', 'InventoryController@update');
Route::get('/inventory/delete/{id}', 'InventoryController@destroy');
Route::get('/inventory/show/{id}', 'InventoryController@show');

Route::get('/archive', 'ArchiveController@index');
Route::get('/archive/create', 'ArchiveController@create');
Route::post('/archive', 'ArchiveController@store');
Route::get('/archive/edit/{id}', 'ArchiveController@edit');
Route::put('/archive', 'ArchiveController@update');
Route::get('/archive/delete/{id}', 'ArchiveController@destroy');

// Route::get('/api/department', 'DepartmentApiController@index');
// Route::post('/api/department/store', 'DepartmentApiController@store');

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
