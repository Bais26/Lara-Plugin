<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function (): string {
    return 'welcome to plugin in class laravel at day 1';
});

Route::get('/day1', function () {
    return view('pertemuan1', ['message' => 'Hallo, Ini pertemuan 1']);
});

Route::resource('siswa', SiswaController::class);



Route::resource('products', ProductController::class);