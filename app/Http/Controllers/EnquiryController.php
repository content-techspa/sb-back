<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;

class EnquiryController extends Controller
{
    public function store(Request $request)
    {
        // Validate form fields
        $validator = \Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => [
                'required',
                'string',
                'max:20',
                'regex:/^[0-9]{7,15}$/', // Updated regex for phone validation
            ],
            'interested_program' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors() // Return key-value error pairs
            ], 422);
        }

        // Save data to database
        $enquiry = new Enquiry([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'interested_program' => $request->get('interested_program'),
            'message' => $request->get('message'),
        ]);

        $enquiry->save();

        // Success response
        return response()->json(['success' => 'Form submitted successfully!']);
    }
}
