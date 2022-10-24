<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PermissionController;

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

Route::redirect('/', '/login');
Route::redirect('/admin', '/admin/dashboard');
Route::redirect('/dashboard', '/admin/dashboard');

Route::group([
    'prefix'     => 'admin',
    'middleware' => ['auth'],
], function () {
    Route::view('/dashboard', 'admin.dashboard')->name('dashboard');

    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('users', UserController::class);

});

Auth::routes();
