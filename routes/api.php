<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GuestController as ApiGuestController;
use App\Http\Controllers\Api\AdminController as ApiAdminController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::middleware('auth:sanctum')->group(function () {
    
// Rotte per gli utenti autenticati
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

        // ADMIN CONTROLLER ROUTES
        Route::resource('admin/hunters', ApiAdminController::class)->only([
            'index', 'show', 'store', 'update', 'destroy'
        ]);
    });

// GUEST CONTROLLER ROUTES
Route::get('/hunters', [ApiGuestController::class, 'index'])->name('api.guest.index');
Route::get('/hunters/{hunter}', [ ApiGuestController::class, 'show' ])->name('api.guest.show');

// DA GUEST CONTROLLER ROUTES PER LOGIN E SIGN IN
Route::post('/sign-in', [ ApiGuestController::class, 'singIn'])->name('api.sign-in');
Route::post('/login', [ApiGuestController::class, 'login'])->name('api.login');
