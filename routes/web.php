<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengenalanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StaffBranchController;
use App\Http\Controllers\staffController;

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

Route::get('/hello', function () {
    echo '<center>';
    echo '<u>Hello semuanya, apa kabar?<br></u>';
    echo '<u>Pada kali ini kita sedang belajar route basic</u>';
});

// route basic
Route::get('/pages1', function () {
    return view('pages1.index');
});

// route basic
Route::get('/pages2', function () {
    return view('pages2.index');
});

// route basic
Route::get('/pages3', function () {
    return view('pages3.index'); 
});

// route basic
Route::get('/home', function () {
    return view('home');
});

// route parameter
Route::get('/biodata/{nama}/{umur}/{alamat}/{jk}/{hobby}', function ($nama,$umur,$alamat,$jk,$hobby) {
    return view('pages1.biodata', compact('nama','umur','alamat','jk','hobby'));
});

// route optional parameter
Route::get('/pesanan/{material?}/{material1?}', function ($material = 'kosong', $material1 = 'kosong') {
    return view('pages1.pesanan', compact('material','material1'));
});


Route::get('/pengenalan', [App\Http\Controllers\PengenalanController::class, 'pengenalan']);

Route::get('/intro/{nama}/{alamat}/{umur}', [PengenalanController::class, 'intro']);

Route::get('/pengenalan2', [App\Http\Controllers\PengenalanController::class, 'siswa']);

Route::get('/menu', [App\Http\Controllers\LatihanController::class,'menu']);

Route::get('kampus',[App\Http\Controllers\Latihancontroller::class,'kampus']);

Route::get('tv',[App\Http\Controllers\Latihancontroller::class,'tv']);

Route::get('belanja',[App\Http\Controllers\Latihancontroller::class,'belanja']);

Route::get('/post', [App\Http\Controllers\PostController::class, 'index']);

Route::get('/migration/StaffBranch', [App\Http\Controllers\StaffBranchController::class, 'index']);

Route::get('/migration/_staff', [App\Http\Controllers\_staffController::class, 'index']);

Route::get('/migration/branch', [App\Http\Controllers\branchController::class, 'index']);