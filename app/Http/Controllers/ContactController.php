<?php

namespace App\Http\Controllers;

use App\Contact;
use Mail;
use App\Mail\ContactSubmitted;

class ContactController extends Controller
{

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string']
        ]);

        Contact::create($attributes);

        Mail::to('roman@romansorin.com', new ContactSubmitted($attributes));

        return back()->with('success', 'Thanks for contacting us!');
    }

}
