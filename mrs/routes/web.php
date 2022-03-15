<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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
})->name('home');

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::post('authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
/* Route::get('allcategory', [CategoryController::class, 'allcategory'])->name('allcategory');
Route::get('createcategory', [CategoryController::class, 'createCategory']);
Route::post('storecategory', [CategoryController::class, 'storeCategory']);
Route::get('showcategory/{category}', [CategoryController::class, 'showCategory']);
Route::get('editcategory/{id}', [CategoryController::class, 'editCategory']);
Route::post('updatecategory/{id}', [CategoryController::class, 'updateCategory']);
Route::get('deletecategory/{id}', [CategoryController::class, 'deleteCategory']); */
Route::resource('category', CategoryController::class);
