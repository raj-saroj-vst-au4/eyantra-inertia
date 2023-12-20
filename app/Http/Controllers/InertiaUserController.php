<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class InertiaUserController extends Controller
{
    public function home(Request $request)
    {
        if (Auth::check()) {
            return Inertia::render('Home');
        }
        return Inertia::render('Main');
    }
    public function signup()
    {
        return Inertia::render('Signup');
    }
}
