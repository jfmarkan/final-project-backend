<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return new UserResource(Auth::user());
    }
}
