<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate form input
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Prepare data
        $contactData = [
            'username' => $request->username,
            'phone' => empty($request->phone)?'-':$request->phone,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        // Send email
        Mail::to('mustafa@sponto.co')->send(new ContactMail($contactData));

        // Redirect with success message
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
