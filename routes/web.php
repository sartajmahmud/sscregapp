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


Route::get('/', [\App\Http\Controllers\SettingController::class, 'homeindex']);
Route::get('/registrars', [\App\Http\Controllers\RegisteredUserController::class, 'index']);

Route::get('/register', [\App\Http\Controllers\RegisteredUserController::class, 'create']);
Route::post('/register', [\App\Http\Controllers\RegisteredUserController::class, 'store']);

Route::get('/admin', [\App\Http\Controllers\AdminuserController::class, 'loginview']);
Route::post('/admin', [\App\Http\Controllers\AdminuserController::class, 'login']);

Route::get('/admin/accesscode', [\App\Http\Controllers\AccessCodeController::class, 'index']);
Route::get('/admin/adminuser', [\App\Http\Controllers\AdminuserController::class, 'index']);
Route::get('/admin/registereduser', [\App\Http\Controllers\RegisteredUserController::class, 'adminindex']);
Route::get('/admin/eventsettings', [\App\Http\Controllers\SettingController::class, 'index']);
Route::get('/admin/dashboard', [\App\Http\Controllers\SettingController::class, 'dashboardindex']);



Route::get('/logout', function (){
    if(session()->has('user')){
        session()->pull('user');
    }
    redirect('/admin');
});
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
