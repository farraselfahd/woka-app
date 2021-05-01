<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\WorkersController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\CustomersController;

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
    return view('index');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/gabung', function () {
    return view('gabung.1', ['header' => 'Informasi Pribadi']);
})->middleware(['auth'])->name('gabung');

Route::get('/jelajahi', function () {
    return view('jelajahi');
});

Route::any('/gabung/2', function () {
    return view('gabung.2', ['header' => 'Informasi Keahlian']);
})->middleware(['auth'])->name('gabung');

Route::any('/gabung/3', function () {
    return view('gabung.3', ['header' => 'Keamanan Akun']);
})->middleware(['auth'])->name('gabung');

Route::any('/gabung/4', function () {
    return view('gabung.4');
});

Route::resource('workers',WorkersController::class);
Route::resource('orders',OrdersController::class);
Route::resource('admins',AdminsController::class);
Route::resource('services',ServicesController::class);
Route::resource('customers',CustomersController::class);

require __DIR__.'/auth.php';
