<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::get('/create', [EmployeeController::class, 'getCreatePage'])
->name('getCreatePage');

Route::post('/create-employee', [EmployeeController::class, 'createEmployee'])
->name('createEmployee');

Route::get('/get-employee', [EmployeeController::class, 'getEmployees'])
->name('getEmployees');

Route::get('/edit-employee/{id}', [EmployeeController::class, 'getEmployeeByID'])
->name('getEmployeeByID');

Route::patch('/edit-employee/{id}', [EmployeeController::class, 'updateEmployee'])
->name('updateEmployee');

Route::delete('/delete-employee/{id}', [EmployeeController::class, 'deleteEmployee'])
->name('deleteEmployee');