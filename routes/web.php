<?php

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

Route::get('/', 'UserController@viewLogin');
Route::post('/login', 'UserController@onLogin');
 Route::get('/navbar', function () {
     return view('tu.tu-navbar');
 });

Route::get('/login', function(){
    return view('login');
});

Route::post('/register-dosen', 'UserController@onRegisterDosen');
Route::get('/register-dosen', function () {
    return view('register-dosen');
});

Route::get('/navbar', function () {
    return view('dosen.dosen-navbar');
});

Route::get('/tu-navbar', function () {
    return view('tu.tu-navbar');
});

Route::get('/pendidikan', function () {
    return view('dosen.pendidikan');
});

Route::get('/riwayat-kegiatan', function () {
    return view('dosen.riwayat-kegiatan');
});

Route::get('/tu-subkegiatan', function () {
    return view('tu.tu-subkegiatan');
});

Route::get('/tu-pelaksanaanpendidikan', function () {
    return view('tu.tu-pelaksanaanpendidikan');
});


Route::get('/inputdetail', function () {
    return view('tu.inputdetail');
});

Route::get('/test', function () {
    return view('dosen.test');
});



Route::get('/admin/users', 'AdminController@viewUsers');
