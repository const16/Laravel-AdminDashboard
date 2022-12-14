<?php

use Illuminate\Support\Facades\Route;

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

});

Auth::routes();
