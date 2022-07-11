<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserContoller;

use Illuminate\Support\Facades\Auth;

// use App\Http\Controllers\UserController;

// Route::resource('admin/users', App\Http\Controllers\Admin\User\UserController::class);

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


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');

Route::get('/admin/users/index', [App\Http\Controllers\Admin\User\UserController::class, 'index'])->name('admin.users.index');

Route::get('/admin/users/ajaxList', [App\Http\Controllers\Admin\User\UserController::class, 'ajaxList'])->name('admin.users.ajaxList');

// Route::get('/resources/js/list',[resources\js\actionsFormatter::class,'users'])->name('resources.js.list');


Route::get('/admin/users/create', [App\Http\Controllers\Admin\User\UserController::class, 'create'])->name('admin.users.create');
Route::post('/admin/users/store', [App\Http\Controllers\Admin\User\UserController::class, 'store'])->name('admin.users.store');
Route::get('/admin/users/{user}', [App\Http\Controllers\Admin\User\UserController::class, 'show'])->name('admin.users.show');
Route::get('/admin/users/{user}/edit', [App\Http\Controllers\Admin\User\UserController::class, 'edit'])->name('admin.users.edit');
Route::post('/admin/users/{user}', [App\Http\Controllers\Admin\User\UserController::class, 'update'])->name('admin.users.update');
Route::get('/admin/users/{user}/destroy', [App\Http\Controllers\Admin\User\UserController::class, 'destroy'])->name('admin.users.destroy');

Route::get('/admin/users/getUsers', [App\Http\Controllers\Admin\User\UserController::class, 'getUsers'])->name('admin.users.getUsers');



