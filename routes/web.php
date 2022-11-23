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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('user',[usercontroller::class,'index'])->middleware(['role:admin,staff'])->name('user.index');
Route::get('user/create',[usercontroller::class,'create'])->middleware(['role:admin,staff'])->name('user.create');
Route::post('user/store',[usercontroller::class,'store'])->middleware(['role:admin,staff'])->name('user.store');
Route::get('user/edit/{id}',[usercontroller::class,'edit'])->middleware(['role:admin,staff'])->name('user.edit');
Route::put('user/{id}',[usercontroller::class,'update'])->middleware(['role:admin,staff'])->name('user.update');
Route::get('user/show/{id}',[usercontroller::class,'show'])->middleware(['role:admin,staff'])->name('user.show');
Route::get('user/{id}',[usercontroller::class,'destroy'])->middleware(['role:admin,staff'])->name('user.delete');

Route::get('kategori',[kategoricontroller::class,'index'])->middleware(['role:admin,staff'])->name('kategori.index');
Route::get('kategori/create',[kategoricontroller::class,'create'])->middleware(['role:admin,staff'])->name('kategori.create');
Route::post('kategori/store',[kategoricontroller::class,'store'])->middleware(['role:admin,staff'])->name('kategori.store');
Route::get('kategori/edit/{id}',[kategoricontroller::class,'edit'])->middleware(['role:admin,staff'])->name('kategori.edit');
Route::put('kategori/{id}',[kategoricontroller::class,'update'])->middleware(['role:admin,staff'])->name('kategori.update');
Route::get('kategori/show/{id}',[kategoricontroller::class,'show'])->middleware(['role:admin,staff'])->name('kategori.show');
Route::get('kategori/{id}',[kategoricontroller::class,'destroy'])->middleware(['role:admin,staff'])->name('kategori.delete');

Route::get('buku',[bukucontroller::class,'index'])->middleware(['role:admin,staff'])->name('buku.index');
Route::get('buku/create',[bukucontroller::class,'create'])->middleware(['role:admin,staff'])->name('buku.create');
Route::post('buku/store',[bukucontroller::class,'store'])->middleware(['role:admin,staff'])->name('buku.store');
Route::get('buku/edit/{id}',[bukucontroller::class,'edit'])->middleware(['role:admin,staff'])->name('buku.edit');
Route::put('buku/{id}',[bukucontroller::class,'update'])->middleware(['role:admin,staff'])->name('buku.update');
Route::get('buku/show/{id}',[bukucontroller::class,'show'])->middleware(['role:admin,staff'])->name('buku.show');
Route::get('buku/{id}',[bukucontroller::class,'destroy'])->middleware(['role:admin,staff'])->name('buku.delete');