<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Requests\AdminUpdateRequest;
use App\Models\User;
use App\Models\Hunter;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = User::all();

        return response()->json([
            'success' => true,
            'results' => $users,
        ]);
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
    public function show(string $slug)
    {
    
        $user = User::findOrFail($slug);

        return response()->json([
            'success' => true,
            'results' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        
        return response()->json([
            'success' => true,
            'results' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminUpdateRequest $request, Hunter $hunter)
    {

        $hunter->update($request->validated());

        return response()->json([
            'success' => true,
            'results' => $hunter
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
