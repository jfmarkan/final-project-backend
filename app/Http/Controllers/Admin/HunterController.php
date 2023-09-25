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
    public function index()
    {
        //
    }


    public function reviews(){
        $review = Review::where('user_id', '=', auth()->user()->id)->paginate(20);
        
        return view('admin.review', compact('review'));
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
            $img_path = Storage::put('uploads/hunters', $request['image']);
            $data['image'] = $img_path;
        }

        //import use Illuminate\Support\Collection; to use collection
        $collection = collect([
            'address', 'city', 'state', 'zip'
        ]);

        $address = $collection->implode(', ');
        $data['user_id'] = Auth::user()->id;
        $newHunter = Hunter::create($data);
        
        $newHunter->save();

        if ($request->has('specializations')){
            $hunter->specializations()->sync($request->specializations);
        }

        return redirect()->route('dashboard');
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

        $data['address'] = $collection->implode(', ');

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
