<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\UserController;
use App\Models\Pengunjung;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Middleware;
use RealRashid\SweetAlert\Facades\Alert;

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
Route::get('/login', function () {
    return view('user.login');
})->name('login');
Route::get('/register', function () {
    return view('user.register');
});


// route user
Route::post('/proses-login', [UserController::class, 'proses_login']);
Route::post('/proses-registrasi', [UserController::class, 'proses_registrasi']);
Route::get('/proses-logout', [UserController::class, 'proses_logout']);


// route dashobard
Route::middleware(['middleware' => 'level:admin,user'] )->group(function () {
    Route::get('/home', [BarangController::class, 'index']);
    Route::get('/tampil', [BarangController::class, 'tampil']);
});

Route::middleware(['middleware' => 'level:admin'] )->group(function () {
    Route::get('/tampil', [BarangController::class, 'tampil']);
    Route::get('/input', [BarangController::class, 'input']);
    Route::post('buku/input', [BarangController::class, 'create']);
    Route::get('/edit/{id}', [BarangController::class, 'edit']);
    Route::post('buku/edit/', [BarangController::class, 'update']);
    Route::get('buku/delete/{id}', [BarangController::class, 'delete']);

    Route::get('pengunjung/', [PengunjungController::class, 'index']);
    Route::get('pengunjung/isi', [PengunjungController::class, 'isi']);
    Route::post('pengunjung/input', [PengunjungController::class, 'input']);
});


Route::middleware(['middleware' => 'level:user'])->group(function () {
    Route::get('/tampil', [BarangController::class, 'tampil']);
});



