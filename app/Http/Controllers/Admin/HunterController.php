<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookingMessage;
use Illuminate\Http\Request;
use App\Models\Hunter;
use App\Models\Review;
use App\Models\Specialization;
use App\Models\SpecializationUser;
use App\Models\User;
use Illuminate\Support\Facades\Date;

class HunterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    // }
    public function dashboard(){
        $user = User::find(auth()->user()->id);
        

        $messages = BookingMessage::where('user_id', '=', auth()->user()->id)->paginate(3);
        $totalMessages = BookingMessage::where('user_id', '=', auth()->user()->id)->count();
        $reviews = Review::where('user_id', '=', auth()->user()->id)->paginate(3);
        $countReviews = Review::where('user_id', '=', auth()->user()->id)->count();
        $sumReviews = Review::where('user_id', '=', auth()->user()->id)->sum('vote');
        

        $averageVote = (intval($sumReviews)/$countReviews);
        
        
        return view('admin.dashboard', compact('reviews','messages','countReviews','averageVote','totalMessages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hunter $hunter)
    {
        //
        $specializations = Specialization::all();
        $specializationsuser = SpecializationUser::all();
        return view('admin.edit', compact ('specializations', 'specializationsuser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
