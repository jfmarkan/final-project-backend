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
        Route::get('admin/hunters', [ApiAdminController::class, 'index'])->name('api.admin.index');
        Route::get('admin/hunters/{hunter}', [ ApiAdminController::class, 'show' ])->name('api.admin.show');
    });

// GUEST CONTROLLER ROUTES
Route::get('/hunters', [ApiGuestController::class, 'index'])->name('api.guest.index');
Route::get('/hunters/{hunter}', [ ApiGuestController::class, 'show' ])->name('api.guest.show');
