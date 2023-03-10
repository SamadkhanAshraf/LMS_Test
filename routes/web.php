<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PrecidencyController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\MemberController;
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


Route::get('/dashboard',[LoginController::class, '']);

Auth::routes();
//Manually ROutes


Route::get('/', function () {
    return view('dashboard');
});
// Route::get('/', function () {
//     return view('dashboard');
// });
Route::resource('book', BookController::class);
Route::resource('category', CategoryController::class);
Route::resource('precidency',PrecidencyController::class);
Route::resource('department',DepartmentController::class);
Route::resource('issue',IssueController::class);
Route::resource('member',MemberController::class);





