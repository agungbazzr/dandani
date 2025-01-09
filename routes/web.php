<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JasaController;

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
    return view('home');
});
Route::get('/dashboard', function () {
    return view('home');
});
Route::get('login', [AuthController::class,'index'])->name('login');
Route::get('register', [AuthController::class,'register'])->name('register');
Route::post('proses_login', [AuthController::class,'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class,'logout'])->name('logout');

Route::post('proses_register',[AuthController::class,'proses_register'])->name('proses_register');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['auth_login:admin']], function () {
        Route::resource('admin', AdminController::class);
        Route::group(['prefix' => 'jasa'],function() {
        Route::get('/', [JasaController::class,'index'])->name('jasa.index');
        Route::get('/create', [JasaController::class,'create'])->name('jasa.create');
        Route::post('/store', [JasaController::class,'store'])->name('jasa.store');
        Route::get('/destroy/{id}', [JasaController::class,'destroy'])->name('jasa.destroy');
        Route::get('/edit/{id}', [JasaController::class,'edit'])->name('jasa.edit');
        Route::put('/update/{id}', [JasaController::class,'update'])->name('jasa.update');
    });
       
    });
    Route::group(['middleware' => ['auth_login:user']], function () {
        Route::resource('user', UserController::class);
    });
});