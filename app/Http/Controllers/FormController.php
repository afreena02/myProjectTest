<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
        'name' => 'required|string|max:255',
        'number' => 'required|numeric',
        'email' => 'required|email',
        'message' => 'required|string|min:10', // Adjust validation rules if necessary
    ]);
    
    Mail::to(config('app.mail_to_address'))->send(new \App\Mail\FormSubmitted($validated));

    return back()->with('success', 'Thank you for your message!');
    }
}

