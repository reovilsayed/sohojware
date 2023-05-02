<?php

namespace App\Http\Controllers;

use App\Mail\NotificationEmail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'max:30'],
            'email' => ['email', 'required', 'max:80'],
            'subject' =>  ['required', 'max:250'],
            'message' =>  ['required', 'max:500'],
            'phone' =>  ['nullable', 'max:20'],
            'package' =>  ['nullable', 'max:20'],
        ]);

        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'package' => $request->package,
        ]);
        $data = [
            'name'=>$request->name,
            'subject' => 'Thank you for reaching out to SohojWare',
            'body' => "Thank you for reaching out to us. Our team of IT specialists is excited to work with you and help bring your online vision to life.",
            'button_link' => '',
            'button_text' => '',
            'emails' => [],
        ];
        Mail::to($request->email)->send(new NotificationEmail($data));
        return redirect('/')->with('success_msg', 'Your message has been sent. We will get back to you soon!');
    }
}
