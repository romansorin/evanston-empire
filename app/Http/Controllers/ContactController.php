<?php

namespace App\Http\Controllers;

use App\Contact;
use Mail;
use App\Mail\ContactSubmitted;

class ContactController extends Controller
{
    private $toMail = 'coltonhorn2021@u.northwestern.edu';

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'user_message' => ['required', 'string']
        ]);

        Contact::create($attributes);
        
        // change as needed
        Mail::to($this->toMail)->send(new ContactSubmitted(request()->all()));

        return back();
    }

}
