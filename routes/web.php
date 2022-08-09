<?php

use App\Http\Controllers\AlatController;
use App\Http\Controllers\AlatRusakController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\InvalidController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\RfidController;
use App\Http\Controllers\SirkulasiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WargaController;
use App\Models\Application;
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

Route::get('/rfid', [RfidController::class, 'index']);
Route::get('/rfid/{uid}', [RfidController::class, 'show']);
Route::get('/rfid/periksa/{uid}/{id_alat}', [RfidController::class, 'periksa']);

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

	Route::get('/warga', [WargaController::class, 'index']);
	Route::get('/warga/create', [WargaController::class, 'create']);
	Route::post('/warga/store', [WargaController::class, 'store']);
	Route::get('/warga/{id}/edit', [WargaController::class, 'edit']);
	Route::put('/warga/{id}', [WargaController::class, 'update']);
	Route::delete('/warga/{id}', [WargaController::class, 'destroy']);

	Route::get('/users', [UserController::class, 'index']);
	Route::get('/users/create', [UserController::class, 'create']);
	Route::post('/users/store', [UserController::class, 'store']);
	Route::get('/users/{id}/edit', [UserController::class, 'edit']);
	Route::put('/users/{id}', [UserController::class, 'update']);
	Route::delete('/users/{id}', [UserController::class, 'destroy']);

	Route::get('/application', [ApplicationController::class, 'index']);
	Route::get('/application/{id}/token', [ApplicationController::class, 'update_token']);
	Route::get('/application/create', [ApplicationController::class, 'create']);
	Route::post('/application/store', [ApplicationController::class, 'store']);
	Route::get('/application/{id}/edit', [ApplicationController::class, 'edit']);
	Route::put('/application/{id}', [ApplicationController::class, 'update']);
	Route::delete('/application/{id}', [ApplicationController::class, 'destroy']);

	Route::get('/device', [DeviceController::class, 'index']);
	Route::get('/device/{id}/token', [DeviceController::class, 'update_token']);
	Route::get('/device/create', [DeviceController::class, 'create']);
	Route::post('/device/store', [DeviceController::class, 'store']);
	Route::get('/device/{id}/edit', [DeviceController::class, 'edit']);
	Route::put('/device/{id}', [DeviceController::class, 'update']);
	Route::delete('/device/{id}', [DeviceController::class, 'destroy']);

	Route::get('/monitoring', [MonitoringController::class, 'index']);

	Route::get('/pegawai', [PegawaiController::class, 'index']);
	Route::get('/pegawai/create', [PegawaiController::class, 'create']);
	Route::post('/pegawai/store', [PegawaiController::class, 'store']);
	Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit']);
	Route::put('/pegawai/{id}', [PegawaiController::class, 'update']);
	Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy']);

	Route::get('/invalid', [InvalidController::class, 'index']);
	Route::get('/invalid/{id}', [InvalidController::class, 'create']);
	Route::delete('/invalid/{id}', [InvalidController::class, 'destroy']);
	Route::get('/invalid/delete', [InvalidController::class, 'delete_semua']);

	Route::get('/alat', [AlatController::class, 'index']);
	Route::get('/alat/create', [AlatController::class, 'create']);
	Route::post('/alat/store', [AlatController::class, 'store']);
	Route::get('/alat/{id}/edit', [AlatController::class, 'edit']);
	Route::put('/alat/{id}', [AlatController::class, 'update']);
	Route::delete('/alat/{id}', [AlatController::class, 'destroy']);

	Route::get('/sirkulasi', [SirkulasiController::class, 'index']);

	Route::get('/alat-rusak', [AlatRusakController::class, 'index']);
	Route::get('/alat-rusak/create', [AlatRusakController::class, 'create']);
	Route::post('/alat-rusak/store', [AlatRusakController::class, 'store']);
	Route::get('/alat-rusak/{id}/edit', [AlatRusakController::class, 'edit']);
	Route::put('/alat-rusak/{id}', [AlatRusakController::class, 'update']);
	Route::delete('/alat-rusak/{id}', [AlatRusakController::class, 'destroy']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});