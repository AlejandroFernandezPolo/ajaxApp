<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\PaisController;
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

Route::get('logs',[\Rap2hpoutre\LaravelLogViewer\LogViewerController::class,'index']);

Route::get('/', [AjaxController::class, 'main'])->name('ajax.main');
//Route::get('ajax/no/funciona', [AjaxController::class, 'main'])->name('ajax.main');
//Route::get('ajax', [AjaxController::class, 'main'])->name('ajax.main');

Route::get('pais', [PaisController::class, 'index'])->name('pais.index');
Route::post('pais', [PaisController::class, 'store'])->name('pais.store');
Route::put('pais/{code}', [PaisController::class, 'update'])->name('pais.update');
Route::get('pais/{code}', [PaisController::class, 'show'])->name('pais.show');
Route::delete('pais/{code}', [PaisController::class, 'destroy'])->name('pais.destroy');


//Route::resource('ajax', MovieController::class);
