<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', [App\Http\Controllers\Beranda_controller::class, 'index']);
Route::get('detail', [App\Http\Controllers\Beranda_controller::class, 'detail']);
Route::get('kategori', [App\Http\Controllers\Beranda_controller::class, 'kategori']);
Route::get('direksi', [App\Http\Controllers\Beranda_controller::class, 'direksi']);


Auth::routes([
    'register' => false,
]);

//admin
Route::get('/admin', [App\Http\Controllers\Admin\Beranda_controller::class, 'index']);
//kategori
Route::get('/admin/kategori', [App\Http\Controllers\Admin\Kategori_controller::class, 'index']);
Route::post('/admin/kategori/add', [App\Http\Controllers\Admin\Kategori_controller::class, 'store']);
Route::get('/admin/kategori/{id}', [App\Http\Controllers\Admin\Kategori_controller::class, 'edit']);
Route::put('/admin/kategori/{id}', [App\Http\Controllers\Admin\Kategori_controller::class, 'update']);
Route::delete('/admin/kategori/{id}', [App\Http\Controllers\Admin\Kategori_controller::class, 'delete']);
//tag
Route::get('/admin/tag', [App\Http\Controllers\Admin\Tag_controller::class, 'index']);
Route::post('/admin/tag/add', [App\Http\Controllers\Admin\Tag_controller::class, 'store']);
Route::get('/admin/tag/{id}', [App\Http\Controllers\Admin\Tag_controller::class, 'edit']);
Route::put('/admin/tag/{id}', [App\Http\Controllers\Admin\Tag_controller::class, 'update']);
Route::delete('/admin/tag/{id}', [App\Http\Controllers\Admin\Tag_controller::class, 'delete']);
//post
Route::get('/admin/pos', [App\Http\Controllers\Admin\Pos_controller::class, 'index']);
Route::get('/admin/pos/add', [App\Http\Controllers\Admin\Pos_controller::class, 'add']);
Route::post('/admin/pos/add', [App\Http\Controllers\Admin\Pos_controller::class, 'store']);
Route::get('/admin/pos/1', [App\Http\Controllers\Admin\Pos_controller::class, 'edit']);
Route::put('/admin/pos/1', [App\Http\Controllers\Admin\Pos_controller::class, 'update']);
Route::delete('/admin/pos/1', [App\Http\Controllers\Admin\Pos_controller::class, 'delete']);
//manage user
Route::get('/admin/user', [App\Http\Controllers\Admin\User_controller::class, 'index']);
Route::post('/admin/user/add', [App\Http\Controllers\Admin\User_controller::class, 'store']);
Route::get('/admin/user/1', [App\Http\Controllers\Admin\User_controller::class, 'edit']);
Route::put('/admin/user/1', [App\Http\Controllers\Admin\User_controller::class, 'update']);
Route::delete('/admin/user/1', [App\Http\Controllers\Admin\User_controller::class, 'delete']);
//profil user
Route::get('/admin/user/profil', [App\Http\Controllers\Admin\User_controller::class, 'profil']);
Route::put('/admin/user/profil/1', [App\Http\Controllers\Admin\User_controller::class, 'updateProfil']);
Route::put('/admin/user/profil/password/1', [App\Http\Controllers\Admin\User_controller::class, 'updatePswd']);
//komentar
Route::get('/admin/komentar', [App\Http\Controllers\Admin\Komentar_controller::class, 'index']);
Route::get('/admin/komentar/1', [App\Http\Controllers\Admin\Komentar_controller::class, 'balas']);
Route::post('/admin/komentar/1', [App\Http\Controllers\Admin\Komentar_controller::class, 'store']);
Route::delete('/admin/komentar/1', [App\Http\Controllers\Admin\Komentar_controller::class, 'delete']);
//feature
Route::get('/admin/feature', [App\Http\Controllers\Admin\Feature_controller::class, 'index']);
Route::post('/admin/feature/add', [App\Http\Controllers\Admin\Feature_controller::class, 'store']);
Route::delete('/admin/feature/1', [App\Http\Controllers\Admin\Feature_controller::class, 'delete']);
//iklan
Route::get('/admin/iklan', [App\Http\Controllers\Admin\Iklan_controller::class, 'index']);
Route::post('/admin/iklan/add', [App\Http\Controllers\Admin\Iklan_controller::class, 'store']);
Route::delete('/admin/iklan/{id}', [App\Http\Controllers\Admin\Iklan_controller::class, 'delete']);
//pengaturan
//pengaturan logo
Route::get('/admin/pengaturan', [App\Http\Controllers\Admin\Pengaturan_controller::class, 'index']);
Route::post('/admin/pengaturan/logo/add', [App\Http\Controllers\Admin\Pengaturan_controller::class, 'store_logo']);
Route::delete('/admin/pengaturan/logo/{id}', [App\Http\Controllers\Admin\Pengaturan_controller::class, 'delete_logo']);
//pengaturan tentang
Route::put('/admin/pengaturan/tentang/{id}', [App\Http\Controllers\Admin\Pengaturan_controller::class, 'ubah_tentang']);
//pengaturan struktur organisasi
Route::post('/admin/pengaturan/struktur/add', [App\Http\Controllers\Admin\Pengaturan_controller::class, 'store_struktur']);
Route::delete('/admin/pengaturan/struktur/{id}', [App\Http\Controllers\Admin\Pengaturan_controller::class, 'delete_struktur']);
//pengaturan headline
Route::post('/admin/pengaturan/headline/add', [App\Http\Controllers\Admin\Pengaturan_controller::class, 'store_headline']);
Route::delete('/admin/pengaturan/headline/{id}', [App\Http\Controllers\Admin\Pengaturan_controller::class, 'delete_headline']);
//pengaturan mediasosial
Route::put('/admin/pengaturan/mediasosial/{id}', [App\Http\Controllers\Admin\Pengaturan_controller::class, 'ubah_mediasosial']);




Route::get('/logout', function(){
    Auth::logout();

    return redirect('login');
});
