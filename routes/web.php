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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('/user',function ()
{

    $users =App\Models\User::with('addresses')->get();
    /*$users[0]->addresses()->create ([
        'country'=>'nepal'

    ]);*/

    return view('layouts.users.index',compact('users'));


});
