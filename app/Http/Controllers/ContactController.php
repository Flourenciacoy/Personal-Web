<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'Name' => 'required|string|max:255',
            'Email' => 'required|email|max:255',
            'Message' => 'required|string',
        ]);

        // Create a new contact entry in the database
        Contact::create([
            'name' => $request->Name,
            'email' => $request->Email,
            'message' => $request->Message,
        ]);

        // Redirect back with a success message
        return back()->with('success', 'Thank you for your message!');
    }
}