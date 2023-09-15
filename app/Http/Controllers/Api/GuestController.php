<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hunter;

class GuestController extends Controller
{
    
    public function index (){

        $hunters = Hunter::all();

        return response()->json([
            'success' => true,
            'results' => $hunters,
        ]);
    }
}
