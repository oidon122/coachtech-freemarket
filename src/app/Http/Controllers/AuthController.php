<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Exhibition;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        $exhibitions = Exhibition::all();

        return view('index', compact('exhibitions'));
    }
}