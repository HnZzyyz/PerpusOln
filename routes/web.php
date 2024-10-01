<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Login Route
Route::get('/', [AdminController::class, 'login']);
// End Login Route

// Dashboard Route
Route::get('/dashboard', [DashboardController::class,'index']);
// End Dashboard Route

// Master Data Route

// Data Siswa
Route::get('/Master_data/data_siswa', [StudentController::class, 'home']);

Route::get('/Master_data/data_siswa/tambah_data', [StudentController::class, 'create']);

Route::post('/Master_data/data_siswa/tambah_data', [StudentController::class, 'tambah_data']);

Route::get('/Master_data/data_siswa/edit_data{nis}', [StudentController::class, 'edit']);

Route::post('/Master_data/data_siswa/edit_data{nis}', [StudentController::class, 'update']);

Route::get('/Master_data/data_siswa/delete{nis}', [StudentController::class,'hapus']);
// End Data Siswa

// Data Buku
Route::get('/Master_data/data_buku', [BookController::class,'home']);

Route::get('/Master_data/data_buku/tambah_data', [BookController::class,'create']);

Route::post('/Master_data/data_buku/tambah_data', [BookController::class,'tambah_data']);

Route::get('/Master_data/data_buku/edit_data/{kode_buku}', [BookController::class,'edit']);

Route::post('/Master_data/data_buku/edit_data/{kode_buku}', [BookController::class,'update']);

Route::get('/Master_data/data_buku/delete/{kode_buku}', [BookController::class,'hapus']);

Route::get('/Master_data/data_buku/search', [BookController::class, 'search']);
// End Data Buku

// End Master Data Route



// Transaksi Route

// Peminjaman Route
Route::get('/Transaksi/peminjaman',[PeminjamanController::class,'home']);

Route::get('/Transaksi/peminjaman/api/{nisn}',[PeminjamanController::class,'getSiswa']);

Route::get('/Transaksi/peminjaman/apis/{kode_buku}',[PeminjamanController::class,'getBuku']);

Route::get('/Transaksi/peminjaman/create',[PeminjamanController::class,'create']);

Route::post('/Transaksi/peminjaman/create',[PeminjamanController::class,'tambahData']);

Route::get('/Transaksi/peminjaman/tambah_data', function () {
   return view('transaksi/peminjaman/create');
});

Route::get('/Transaksi/peminjaman/edit_data', function () {
   return view('transaksi/peminjaman/update');
});
// End Peminjaman Route

// Pengembalian Route
Route::get('/Transaksi/pengembalian', function () {
   return view('transaksi/pengembalian/index');
});

Route::get('/Transaksi/pengembalian/tambah_data', function () {
   return view('transaksi/pengembalian/create');
});

Route::get('/Transaksi/pengembalian/edit_data', function () {
   return view('transaksi/pengembalian/update');
});
// End Pengembalian Route

// End Transaksi Route



// Laporan Route

// Data Peminjaman Per Hari Route
Route::get('/Laporan/data_peminjaman_per_hari', function () {
   return view('laporan/data_peminjaman_per_hari/index');
});
// End Data Peminjaman Per Hari Route

// Data Belum Kembali Route
Route::get('/Laporan/data_belum_kembali', function () {
   return view('laporan/data_belum_kembali/index');
});
// End Data Belum Kembali Route

// Buku Terfavorite Route
Route::get('/Laporan/buku_terfavorite', function () {
   return view('laporan/buku_terfavorite/index');
});
// End Laporan Route

// User View Route
// Home Route
Route::get('/home',[UserController::class,'index']);

Route::get('/buku_All', [UserController::class, 'bukuAll']);

Route::get('/detail/{kode_buku}', [UserController::class,'detail']);

Route::get('/cariBuku', [UserController::class, 'search']);

Route::get('/testLayoutUtama', function() {
   return view('layoutUtama');
});