<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    
    
    public function store(Request $request){
        $data = $request->all();

        $validation = Validator::make($data,
            [
                'name' => 'required',
                'surname' => 'nullable',
                'vote' => 'required',
                'review' => 'required',
            ]);

        if ( $validation->fails()){
            return response()->json([
                'success' => false,
                'errors' => $validation->errors(),
            ]);
        }

        $reviews = Review::create($data);
        return response()->json([

            'success' => true,
            //'results'=>$data
        ]);

    }
}
