<?php

use App\Http\Controllers\CursosGroupController;
use App\Http\Controllers\CursosHomeController;
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

Route::get('cursos', CursosHomeController::class)->name('cursos');

Route::controller(CursosGroupController::class)->group(function(){
    Route::get('cursos/create', 'create')->name('cursos.create');
    Route::post('cursos/curso', 'store')->name('cursos.store');
    Route::get('cursos/update/{id}', 'update')->name('cursos.update');
    Route::get('cursos/{id}', 'show')->name('cursos.show');
    Route::put('cursos/{id}', 'upgrade')->name('cursos.upgrade');
});