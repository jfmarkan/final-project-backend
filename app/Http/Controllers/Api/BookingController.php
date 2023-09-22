<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\NewContact;
use App\Models\BookingMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function store(Request $request){
        $data = $request->all();

        $validation = Validator::make($data,
            [
                'email' => ['required', 'max: 60'],
                'message' => 'required',
            ]);

        if ( $validation->fails()){
            return response()->json([
                'success' => false,
                'errors' => $validation->errors(),
            ]);
        }

        $bookingMessage = BookingMessage::create($data);
        Mail::to('')->send( new NewContact($bookingMessage));

        return response()->json([
            'success' => true
        ]);

    }
}
