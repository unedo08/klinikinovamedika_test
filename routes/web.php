<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\Pasien2Controller;
use App\Http\Controllers\UserController;
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
    return view('login');
});

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);


Route::get('/register',[AuthController::class,'register1']);
Route::post('/register',[AuthController::class,'store']);


Route::get('/admin/user',[UserController::class,'index']);
Route::get('/admin/user/add',[UserController::class,'viewAddUser']);
Route::post('/admin/user/add',[UserController::class,'store']);
Route::get('/admin/user/edit/{id}',[UserController::class,'edit']);
Route::post('/admin/user/edit',[UserController::class,'update']);
Route::get('/admin/user/delete/{id}',[UserController::class,'delete']);


Route::get('/admin',[AdminController::class,'index']);


//Route for CRUD Obat
Route::get('/admin/obat',[ObatController::class,'index']);
Route::get('/admin/obat/add',[ObatController::class,'viewAddObat']);
Route::post('/admin/obat/add',[ObatController::class,'store']);
Route::get('/admin/obat/edit/{id}',[ObatController::class,'edit']);
Route::post('/admin/obat/edit',[ObatController::class,'update']);
Route::get('/admin/obat/delete/{id}',[ObatController::class,'delete']);

//Portal Pasien
Route::get('/portalPasien',[Pasien2Controller::class,'index']);
