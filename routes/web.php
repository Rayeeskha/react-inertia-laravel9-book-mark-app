<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
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
	// sleep(2);
    return Inertia::render('Home');
});

Route::get('/about', function () {
	// sleep(2);
    return Inertia::render('About',[
    	'rayees' => 'Thanks dude'
    ]);
});

Route::get('/login', function () {
	return Inertia::render('Login');
});

Route::post('login', [\App\Http\Controllers\UserController::class, 'login']);
