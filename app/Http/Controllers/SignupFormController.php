<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SignupFormController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|min:3|max:255',
                'country' => 'required|string|max:255',
                'state' => 'required|string|max:255',
                'college' => 'required|string|max:255',
                'department' => 'required|string|max:255',
                'designation' => 'required|string|max:255',
                'address' => 'required|string|min:10|max:255',
                'pin' => 'required|numeric|digits_between:4,10',
            ]);

            return response()->json([
                'status' => 200,
                'message' => 'Form submitted successfully',
                'data' => $validated,
                'validated' => true,
            ]);
        } catch (ValidationException $e) {
            // Validation failed
            return response()->json([
                'status' => 406,
                'message' => auth()->check(),
                'validated' => false,
                'errors' => $e->errors(),
            ]);
        }
    }
}
