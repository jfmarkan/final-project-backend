<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HunterController as HunterController;
use App\http\Controllers\Admin\PageController as PageController;
use App\Http\Controllers\Admin\SponsorshipController as SponsorshipController;
use Braintree\Gateway;

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
Route::put('admin/edit/{hunter}', [HunterController::class, 'update'])->middleware('auth')->name('update');

// ---------- HUNTER DASHBOARD NAVIGATION
Route::get('admin/dashboard', [PageController::class, 'dashboard'])->middleware('auth')->name('dashboard');
Route::get('admin/inbox', [PageController::class, 'inbox'])->middleware('auth')->name('inbox');

// ---------- SPONSORSHIP SELECTION AND PAYMENT
Route::get('admin/sponsorship/select', [SponsorshipController::class, 'selection'])->middleware('auth')->name('sponsorship.select');
Route::get('admin/sponsorship/billing', [SponsorshipController::class, 'billing'])->middleware('auth')->name('sponsorship.billing');
Route::get('/generate-client-token', function () {
    $gateway = new Gateway([
        'environment' => config('services.braintree.environment'),
        'merchantId' => config('services.braintree.merchant_id'),
        'publicKey' => config('services.braintree.public_key'),
        'privateKey' => config('services.braintree.private_key'),
    ]);

    $clientToken = $gateway->clientToken()->generate();

    return response()->json(['clientToken' => $clientToken]);
});
Route::post('admin/sponsorship/payment', [SponsorshipController::class, 'processPayment'])->middleware('auth')->name('sponsorship.processPayment');

Route::get('admin/sponsorship/error', [SponsorshipController::class, 'error'])->middleware('auth')->name('sponsorship.error');

Route::get('admin/reviews', [HunterController::class, 'reviews'])->middleware('auth')->name('reviews');