<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validasi input dari form
        $data = $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'message' => 'required',
        ]);

        try {
            // Kirim email ke kamu (admin)
            Mail::to('gemparramadhan983@gmail.com')->send(new ContactMail($data));

            // Kirim salinan email ke user
            Mail::to($data['email'])->send(new ContactMail([
                'name'    => $data['name'],
                'email'   => $data['email'],
                'message' => "Hi {$data['name']}, this is a copy of your message:\n\n{$data['message']}\n\nThanks for reaching out!",
            ]));

            return back()->with('success', 'Thanks! Your message has been sent.');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to send message: ' . $e->getMessage());
        }
    }
}
