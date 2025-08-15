<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        // Prepare email content
        $to = "mustafa@sponto.co";
        $subject = $request->subject;
        
        $message = "
        <html>
        <head>
            <title>{$request->subject}</title>
        </head>
        <body>
            <p><strong>Name:</strong> {$request->username}</p>
            <p><strong>Phone:</strong> " . (empty($request->phone) ? '-' : $request->phone) . "</p>
            <p><strong>Email:</strong> {$request->email}</p>
            <p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($request->message)) . "</p>
        </body>
        </html>
        ";

        // Set headers
        $headers  = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: {$request->email}" . "\r\n";

        // Send email using PHP's mail function
        if (mail($to, $subject, $message, $headers)) {
            return back()->with('success', 'Your message has been sent successfully!');
        } else {
            return back()->with('error', 'Failed to send your message. Please try again.');
        }
    }
}
