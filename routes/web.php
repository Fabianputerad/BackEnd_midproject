<?php

use App\Http\Controllers\LibraryController;
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

Route::get('/add', [MeksikoController::class, 'add'])->name('add');

Route::post('/addKaryawan', [MeksikoController::class, 'addKaryawan'])->name('addKaryawan');

Route::get('/view', [MeksikoController::class, 'view'])->name('view');

Route::get('/update-karyawan/{id}', [MeksikoController::class, 'updateKaryawan'])->name('updateKaryawan');

Route::patch('/update/{id}', [MeksikoController::class, 'update'])->name('update');

Route::delete('/delete/{id}',[MeksikoController::class, 'delete'])->name('delete');

Route::get('/cari', [MeksikoController::class, 'cari'])->name('cari');
