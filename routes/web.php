<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContohController as ContohC;

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
    return view('welcome');
});



Route::get('/contoh', [ContohC::class, 'index'])->name('data.contoh');
Route::get('/contoh/{tanggal}', [ContohC::class, 'getData'])->name('data.contoh');
