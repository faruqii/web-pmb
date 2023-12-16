<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('login', [\App\Http\Controllers\Auth\AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [\App\Http\Controllers\Auth\AuthController::class, 'login']);
Route::post('logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('admin/students', [AdminController::class, 'index'])->name('admin.students.index');
    Route::get('admin/students/{id}', [AdminController::class, 'show'])->name('admin.students.show');
    Route::post('admin/students/{id}/status', [AdminController::class, 'updateStatus'])->name('admin.students.updateStatus');
    Route::delete('admin/students/{id}', [AdminController::class, 'destroy'])->name('admin.students.destroy');
});

Route::get('/', function () {
    return view('welcome');
});


