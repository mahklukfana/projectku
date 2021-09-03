<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MatkulAsjkController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProdiController;
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

Route::get('/dashboard  ', function () {
    return view('administrator/contents/dashboard');
});
Route::get('/', function () {
    return view('website/index');
});
Route::get('/kategori_buku', function () {
    return view('administrator/contents/kategori_buku');
});
// // kategori
// Route::get('kategori_buku', [CategoryController::class, 'index'])->name('kategori_buku');
// Route::post('category.store', [CategoryController::class, 'store'])->name('category.store');
// // end kategori

// daftar anggota
Route::get('list_member', [MemberController::class, 'index'])->name('list_member');
Route::post('member.store', [MemberController::class, 'store'])->name('member.store');
// end daftar anggota

// // mata kuliah asjk
// Route::get('matkul_asjk', [MatkulAsjkController::class, 'index'])->name('matkul_asjk');
// Route::post('matkul_asjk.store', [MatkulAsjkController::class, 'store'])->name('matkul_asjk.store');
// // end mata kuliah asjk

// // mata kuliah asjk
// Route::get('prodi', [ProdiController::class, 'index'])->name('prodi');
// Route::post('prodi.store', [ProdiController::class, 'store'])->name('prodi.store');
// // end mata kuliah asjk