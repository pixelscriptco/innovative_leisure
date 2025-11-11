<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\SendEmail;

class ContactController extends Controller
{
    public function postContact(Request $request)
    {
        $validated = $request->validate([
            'contact-name' => 'required|string|max:255',
            'contact-email' => 'required|email',
            'contact-phone' => 'nullable|string|max:50',
            'contact-message' => 'required|string',
            'contact-message1' => 'nullable|string',
            'contact-message2' => 'nullable|string',
            'contact-message3' => 'nullable|string',
        ]);

        // 2. Prepare data for the mailable
        $details = [
            'name' => $validated['contact-name'],
            'email' => $validated['contact-email'],
            'phone' => $validated['contact-phone'],
            'contactMessage' => $validated['contact-message'],
            'contactMessage1' => $validated['contact-message1'],
            'contactMessage2' => $validated['contact-message2'],
            'contactMessage3' => $validated['contact-message3'],
        ];

        // 3. Send the email
        Mail::to('jincyannageorge18@gmail.com')->send(new SendEmail($details));

        // 4. Return a response if using AJAX
        return response()->json(['success' => true, 'message' => 'Your inquiry has been sent!']);
    }
}