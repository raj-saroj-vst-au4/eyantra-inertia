<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class InertiaRouteController extends Controller
{
    protected function checkSignupComplete()
    {
        // Call the checkUserSignupComplete method from UserController
        // Assuming 'email' needs to be passed as a parameter, adjust as needed
        $response = app(UserController::class)->checkUserSignupComplete(request()->merge(['email' => Auth::user()->email]));
        return $response;
    }
    public function home()
    {
        if (Auth::check()) {
            if($this->checkSignupComplete()){
                return Inertia::render('Home');
            }else{
                return redirect()->route('signup');
            }
        }
        return Inertia::render('Main');
    }

    public function signup()
    {
        return Inertia::render('Signup');
    }

}
