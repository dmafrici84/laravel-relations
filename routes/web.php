<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {return view('home');}) -> name('home');

//EMPLOYEES
Route::get('/employees', 'EmployeeController@index') -> name('employees.index');
Route::get('/employee/show/{id}', 'EmployeeController@show') -> name('employee.show');
Route::get('/employee/create', 'EmployeeController@create') -> name('employee.create');
Route::post('/employee/create', 'EmployeeController@store') -> name('employee.store');
Route::get('/employee/delete/{id}', 'EmployeeController@destroy') -> name('employee.delete');

//LOCATIONS
Route::get('/locations', 'LocationController@index') -> name('locations.index');

//TASKS
Route::get('/tasks', 'TaskController@index') -> name('tasks.index');
