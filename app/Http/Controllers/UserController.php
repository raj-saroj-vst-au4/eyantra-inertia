<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\UserModel;

class UserController extends Controller
{
    public function checkUserSignupComplete()
    {
        $userEmail = Auth::user()->email;

        // Check if email has completed signup in the users table
        $user = UserModel::where('email', $userEmail)->first();

        if ($user && $user->signupcomplete == 1) {
            // Signup complete
            return true;
        } else {
            // Signup incomplete, force redirect to signup
            return false; // Replace 'signup' with your actual signup route name
        }
    }

    public function handleSignup()
    {
        $userEmail = Auth::user()->email;
    }
}
