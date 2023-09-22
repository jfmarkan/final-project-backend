<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HunterController as HunterController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/edit/{hunter}', [HunterController::class, 'edit'])->middleware('auth')->name('edit');
Route::get('admin/dashboard', [HunterController::class, 'dashboard'])->middleware('auth')->name('dashboard');
Route::get('admin/inbox', [HunterController::class, 'inbox'])->middleware('auth')->name('inbox');
Route::put('admin/edit/{hunter}', [HunterController::class, 'update'])->middleware('auth')->name('update');