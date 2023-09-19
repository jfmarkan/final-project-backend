<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Hunter;
use App\Models\Specialization;
use App\Models\SpecializationUser;

class HunterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

        $post->update($data);

        if ($request->has('specializations')){
            $post->specializations()->sync($request->specializations);
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
