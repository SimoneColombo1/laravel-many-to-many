<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProgettiController as ProgettiController;
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
    return view('pages.home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->name('admin.')->prefix('admin')->group(function () {


    Route::get('progetti', [ProgettiController::class, 'index'])->name('admin.progetti.index');
    Route::get('progetti/create', [ProgettiController::class, 'create'])->name('admin.progetti.create');
    Route::post('progetti', [ProgettiController::class, 'store'])->name('progetti.store');
    Route::get('progetti/{project}/edit', [ProgettiController::class, 'edit'])->name('admin.progetti.edit');
    Route::put('progetti/{project}', [ProgettiController::class, 'update'])->name('progetti.update');
    Route::delete('progetti/{project}', [ProgettiController::class, 'destroy'])->name('progetti.destroy');
    Route::get('progetti/{project}', [ProgettiController::class, 'show'])->name('admin.progetti.show');
});
