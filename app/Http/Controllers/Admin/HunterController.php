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
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

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
        $specializations = Specialization::all();
        return view('admin.edit', compact ('hunter','specializations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hunter $hunter)
    {
        //problem in validation
        $data = $request->validate([
            'name' => ['required', 'min:2', 'max:255'],
            'surname' => ['max:255'],
            'address' => ['max:255'],
            'image' => ['image'],
            'cv' => ['file'],
            'services' => [ ],
            'specializations' => ['exists:specializations,id']
        ]);

        if ($request->hasFile('image')){
            Storage::delete($hunter->image);
            $img_path = Storage::put('uploads/hunters', $request['image']);
            $data['image'] = $img_path;
        }

        //import use Illuminate\Support\Collection; to use collection
        $collection = collect([
            'address', 'city', 'state', 'zip'
        ]);

        $address = $collection->implode(', ');

        $hunter->update($data);

        if ($request->has('specializations')){
            $hunter->specializations()->sync($request->specializations);
        }

        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
