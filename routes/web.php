<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\MiinventarioController;
use App\Http\Controllers\InventarioController;
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
Route::get('test', [TestController::class, 'createUser'])->name('test');

Route::get('/', function () {
    //return view('welcome');
    return redirect()->route('dashboard');
});

Route::middleware(['auth'])->group(function () {

    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::view('/video', 'video')->name('varios.video');

    route::get('miinventario',[MiinventarioController::class,'index'])->name('miinventario.index');
    route::get('inventario',[InventarioController::class,'index'])->name('miinventario.inventario');
});