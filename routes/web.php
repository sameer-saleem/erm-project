<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/', [
    HomeController::class, 'index'
])->name('home');

Auth::routes();

Route::get('/score', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/addscore', [App\Http\Controllers\HomeController::class, 'add'])->name('addscore');
Route::post('/addscore', [App\Http\Controllers\HomeController::class, 'addscore'])->name('addscore');
Route::get('/vendor', [App\Http\Controllers\VendorController::class, 'index'])->name('vendor');
Route::get('/addvendor', [App\Http\Controllers\VendorController::class, 'add'])->name('addvendor');
Route::post('/addvendor', [App\Http\Controllers\VendorController::class, 'addvendor'])->name('addvendor');
Route::get('/addnewuser', [App\Http\Controllers\UsersController::class, 'regist'])->name('addnewuser');
Route::post('/addnewuser', [App\Http\Controllers\UsersController::class, 'addUser'])->name('addnewuser');
Route::get('/user', [App\Http\Controllers\UsersController::class, 'index'])->name('user');
Route::post('/user', [App\Http\Controllers\UsersController::class, 'delete'])->name('user');
