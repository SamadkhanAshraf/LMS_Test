<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PrecidencyController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ReturnBookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware;

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
Route::group(['middleware' => 'isLogged'], function () {
    Route::get('dashboard',[DashboardController::class,'dashboard']);
    Route::resource('book', BookController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('precidency',PrecidencyController::class);
    Route::resource('department',DepartmentController::class);
    Route::resource('issue',IssueController::class);
    Route::resource('member',MemberController::class);
    Route::resource('setting',SettingController::class);
    Route::resource('return_book',ReturnBookController::class);
    Route::get('member-related-books/{id}',[ReturnBookController::class,'getBooks'])->name('get-member-related-books');
    Route::get('member-related-precidency/{id}',[ReturnBookController::class,'getPrecidency'])->name('get-member-related-precidency');

});

//Route::get('dashboard',[DashboardController::class,'dashboard'])->middleware('isLogged');
// Route::resource('book', BookController::class);
// Route::resource('category', CategoryController::class);
// Route::resource('precidency',PrecidencyController::class);
// Route::resource('department',DepartmentController::class);
// Route::resource('issue',IssueController::class);
// Route::resource('member',MemberController::class);
// Route::resource('setting',SettingController::class);
// Route::resource('return_book',ReturnBookController::class);

// Route::get('member-related-books/{id}',[ReturnBookController::class,'getBooks'])->name('get-member-related-books');
// Route::get('member-related-precidency/{id}',[ReturnBookController::class,'getPrecidency'])->name('get-member-related-precidency');

Route::get('/locale/{locale}',function($locale){
    app()->setlocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale');

Route::post('user.login',[UserController::class, 'login'])->name('user.login');
Route::put('user.register',[UserController::class, 'register'])->name('user.register');
Route::get('logout',[UserController::class, 'logout'])->name('logout.user');
Route::get('/', function(){
    return view('authentication.login');
});
Route::get('login', function(){
    return view('authentication.login');
})->name('login')->middleware('alreadyLogin');

//Route::get('login',[UserController::class,])->name('register-user-form');
Route::get('register',function(){
    return view('authentication.register');
})->name('register')->middleware('alreadyLogin');
