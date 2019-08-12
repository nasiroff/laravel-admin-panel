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


use Illuminate\Support\Facades\Auth;

Route::middleware(['auth'])->group(function () {
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('employee', "EmployeeController@index")->name('employee.index');
    Route::get('/', 'IndexController@index');
    Route::get('employee/create', "EmployeeController@createPage");
    Route::post('employee/create', "EmployeeController@create")->name('create.employee')->middleware(['string']);
    Route::get('employee/edit/{id}', "EmployeeController@edit");
    Route::put('employee/update/{id}', "EmployeeController@update")->middleware(['string']);
    Route::get('employee/delete/{id}', 'EmployeeController@delete');


    Route::get('department', "DepartmentController@index")->name('department.index');
    Route::get('department/create', "DepartmentController@createPage");
    Route::post('department/create', "DepartmentController@create")->name('create.department')->middleware(['string']);
    Route::get('department/edit/{id}', 'DepartmentController@edit');
    Route::put('department/update/{id}', 'DepartmentController@update')->middleware(['string']);
    Route::get('department/delete/{id}', 'DepartmentController@destroy');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
});


Route::post('/salam', function (\Illuminate\Http\Request $request) {
//    $routeArray = $request->route()->getAction();
//    $controllerAction = class_basename($routeArray['controller']);
//    list($controller, $action) = explode('@', $controllerAction);
    dump($request);
});





