<?php

namespace App\Http\Controllers;

use App\Models\CountryModel;

class CountryController extends Controller
{
    public function index()
    {   
        $countries = CountryModel::all();
        return response()->json($countries);
    }
}
