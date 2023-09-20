<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookingMessage;
use Illuminate\Http\Request;
use App\Models\Hunter;
use App\Models\Review;
use App\Models\User;
use App\Models\Specialization;
use App\Models\SpecializationUser;
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

        $messages = BookingMessage::where('user_id', '=', auth()->user()->id)->paginate(3);
        $totalMessages = BookingMessage::where('user_id', '=', auth()->user()->id)->count();
        $reviews = Review::where('user_id', '=', auth()->user()->id)->paginate(4);
        $countReviews = Review::where('user_id', '=', auth()->user()->id)->count();
        $sumReviews = Review::where('user_id', '=', auth()->user()->id)->sum('vote');

        $averageVote = (intval($sumReviews)/$countReviews);
        
        
        return view('admin.dashboard', compact('reviews','messages','countReviews','averageVote','totalMessages'));
    }

    public function inbox(){

        $messages = BookingMessage::where('user_id', '=', auth()->user()->id)->paginate(20);
        $totalMessages = BookingMessage::where('user_id', '=', auth()->user()->id)->count();
        
        return view('admin.inbox', compact('messages','totalMessages'));
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
    public function update(Request $request, Hunter $hunter)
    {
        //
        $data = $request->validate([
            'name' => ['required', 'min:2', 'max:255'],
            'surname' => ['required', 'min:2', 'max:255'],
            'address' => ['required', 'min:2', 'max:255'],
            'image' => ['url:https'],
            'cv' => ['url:https'],
            'services' => ['required', 'min:10'],
            'specializations' => ['exists:specializations,id']
        ]);

        $collection = newCollection([
            'address', 'city', 'state', 'zip'
        ]);

        $data['address'] = $collection->implode(', ');

        $hunter->update($data);

        if ($request->has('specializations')){
            $hunter->specializations()->sync($request->specializations);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
