<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth/register');
    }

    public function store(UserRequest $request)
    {
        $user = $request->only(['name', 'email', 'password']);
        User::create($user);
        return view('auth/login');
    }
}
