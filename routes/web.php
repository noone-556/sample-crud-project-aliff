<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group.
|
*/

/** SETUP ROUTE TO CONNECT BETWEEN FRONTEND AND BACKEND */
Route::get('/', 'HomeController@dashboard')->name('dashboard');

Route::get('/daftar', 'HomeController@daftarRed')->name('daftar.user');

Route::post('/daftar-pekerja', 'HomeController@daftar_pekerja');

Route::get('/disp-maklumat', 'HomeController@getMaklumat');

Route::get('/semak-email', 'HomeController@semakEmail');

Route::get('/semak-idpekerja', 'HomeController@semakIDPekerja');

Route::post('/kemaskini-maklumat', 'HomeController@updateMaklumat');

//will delete based on id pass so not all record will be affected
Route::delete('/padam-maklumat/{id}', 'HomeController@padamMaklumat');