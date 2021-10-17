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
    return view('/home');
});
Route::get('/tugas', function () {
    return view('assignment/Tugas');
});

Route::get('/material', function () {
    return view('material/Material');
});

Route::get('/jambelajar', function () {
    return view('jambelajar/JamBelajar');
});

Route::get('/catatan', function () {
    return view('catatanpendek/CatatanPendek');
});
Route::get('/tambahcatatan', function () {
    return view('catatanpendek/AddNote');
});

Route::get('/nilai', function () {
    return view('nilai/Nilai');
});
Route::get('/tambahnilai', function () {
    return view('nilai/AddScore');
});
Route::get('/tambahsemester', function () {
    return view('nilai/AddTerm');
});
Route::get('/nilaisemester', function () {
    return view('nilai/ViewTermsScore');
});