<?php

use App\Http\Controllers\BahanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HasilPotongController;
use App\Http\Controllers\PotongController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes(
    [
        'register' => false,
    ]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
// Route::resource('user', UsersController::class);
Route::resource('bahan', BahanController::class);
Route::resource('barang', BarangController::class);
Route::resource('potong', PotongController::class);
Route::resource('HasilPotong', HasilPotongController::class);

// });
