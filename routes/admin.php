<?php
use Illuminate\Support\Facades\Route;


Route::get('/admin/home',[App\Http\Controllers\Auth\LoginController::class, 'adminLogin'])->name('admin.home')->middleware('is_admin');
Route::get('/admin/home',[App\Http\Controllers\HomeController::class, 'admin'])->name('admin.home')->middleware('is_admin');


Route::group(['namespace' => 'App\Http\Controllers\Admin', 'middleware' => 'is_admin'], function () {
    Route::get('/admin/home', 'AdminController@admin')->name('admin.home');

});
