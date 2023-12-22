<?php

namespace App\Http\Controllers;

use App\Models\CollegeModel;

class CollegeController extends Controller
{
    public function getCollegesByCountry($country)
    {
        // Specify the database connection for the College model
        $colleges = CollegeModel::on('college_database')
            ->where('country', $country)
            ->get();

        return response()->json(['colleges' => $colleges]);
    }
}
