<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdmin\SuperAdminDashboardController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\User\UserDashboardController;

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
    return redirect('/login');
});

Route::prefix('super-admin')->group(function(){
	Route::get('dashboard',[SuperAdminDashboardController::class, 'index'])->name('super-admin.dashboard');
});

Route::prefix('admin')->group(function(){
	Route::get('dashboard',[AdminDashboardController::class, 'index'])->name('admin.dashboard');
});

Route::prefix('user')->group(function(){
	Route::get('dashboard',[UserDashboardController::class, 'index'])->name('user.dashboard');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
