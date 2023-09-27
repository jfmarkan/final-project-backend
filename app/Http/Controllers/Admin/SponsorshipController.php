<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HunterSponsorship;
use App\Models\Sponsorship;
use Braintree\Gateway;
use Braintree\Test\Nonces as TestNonces;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class SponsorshipController extends Controller
{
    public function selection(){
        return view('admin.sponsorship.select');
    }

    public function billing(){
        $gateway = new Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchant_id'),
            'publicKey' => config('services.braintree.public_key'),
            'privateKey' => config('services.braintree.private_key'),
        ]);

        $clientToken = $gateway->clientToken()->generate();

        return view('admin.sponsorship.billing', compact('clientToken'));
    }

    public function processPayment(Request $request){
        $paymentMethodNonce = TestNonces::$visaCheckoutVisa;
        $sponsorshipId = $request->input('sponsorship_id');
        $sponsorship = Sponsorship::find($sponsorshipId);

        $gateway = new Gateway([
            'environment' => env('BRAINTREE_ENV', 'sandbox'),
            'merchantId' => env('BRAINTREE_MERCHANT_ID'),
            'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
            'privateKey' => env('BRAINTREE_PRIVATE_KEY'),
        ]);

        $result = $gateway->transaction()->sale([
            'amount' => $sponsorship->price,
            // 'paymentMethodNonce' => "fake-valid-nonce",
            'paymentMethodNonce' => $paymentMethodNonce,
            'options' => ['submitForSettlement' => true],
        ]);

        if ($result->success){
            $hunterId = Auth::id(); // Obtener el ID del hunter autenticado
            $sponsorshipId = $sponsorship->id;
            $startDate = now();
            $endDate = now()->addHours($sponsorship->duration);

            HunterSponsorship::create([
                'hunter_id' => $hunterId,
                'sponsorship_id' => $sponsorshipId,
                'sponsorship_start' => $startDate,
                'sponsorship_end' => $endDate,
            ]);

            return redirect()->route('dashboard')->with('success', 'Congratulations, you can now enjoy the benefits of our sponsorship program.');
        }else{
            return redirect()->back()->with('error', 'It seems there has been a problem processing your payment, pleas verify your data or try with another card');
        }
    }
}