<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GuestController as ApiGuestController;
use App\Http\Controllers\Api\AdminController as ApiAdminController;
use App\Http\Controllers\Api\LeadController as ApiBookingControler;

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
    Route::get('/users/{id}', function ($id) {
        return User::findOrFail($id);
    });

    // Logout per gli utenti autenticati

    Route::post('/logout', [ApiAdminController::class, 'logout'])->name('api.logout');
    
        // ADMIN CONTROLLER ROUTES
        Route::resource('admin/hunters', ApiAdminController::class)->only([
            'index', 'show', 'store', 'update', 'destroy','logout'
        ]);
    });

// GUEST CONTROLLER ROUTES
Route::get('/hunters', [ApiGuestController::class, 'index'])->name('api.guest.index');
Route::get('/specializations', [ApiGuestController::class, 'specializations'])->name('api.guest.specializations');
Route::get('/hunterBySpec', [ApiGuestController::class, 'filterBySpecialization'])->name('api.guest.hunterBySpec');
Route::get('/hunters/{hunter}', [ ApiGuestController::class, 'show' ])->name('api.guest.show');

// DA GUEST CONTROLLER ROUTES PER LOGIN E SIGN IN
Route::post('/sign-in', [ ApiGuestController::class, 'store'])->name('api.sign-in');
Route::post('/login', [ApiGuestController::class, 'login'])->name('api.login');


// Route::post('/contact-form', [ ApiGuestController::class, 'update'])->name('api.contact-form');

//MAIL ROUTE
Route::post('/bookingMessage', [ApiBookingControler::class, 'store'])->name('api.bookingMessage');