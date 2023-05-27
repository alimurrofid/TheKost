<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\DormitoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('layout.vertical-navbar');
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard.home');
});

Route::prefix('dashboard')->group (function () {
    Route::get('/', function () {
        return view('dashboard.home');
    })->name('dashboard.home');

    Route::get('/rooms', function () {
        return view('dashboard.rooms');
    })->name('dashboard.rooms');

    Route::get('/members', function () {
        return view('dashboard.members');
    })->name('dashboard.members');

    Route::get('/transaction', function () {
        return view('dashboard.transaction');
    })->name('dashboard.transaction');

    Route::get('/users', function () {
        return view('dashboard.users');
    })->name('dashboard.users');

});

Route::prefix('form')->group (function () {
    Route::get('/room', function () {
        return view('form.form-room');
    })->name('form.room');

    Route::get('/member', function () {
        return view('form.form-member');
    })->name('form.member');

    Route::get('/transaction', function () {
        return view('form.form-transaction');
    })->name('form.transaction');

    Route::get('/user', function () {
        return view('form.form-user');
    })->name('form.user');
});

Route::resource('/dashboard/room', RoomController::class);
Route::resource('/dashboard/dormitory', DormitoryController::class);
