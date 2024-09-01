<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->fname = $request->fname;
        $contact->lname = $request->lname;
        $contact->email = $request->email;
        $contact->message = $request->message;

        $contact->save();

        // Send email 
        //will not be sent on localhost
        //remove the below comment to activate mail to be sent from contact form 
        // Mail::to('kanishkmaestros@gmail.com')->send(new ContactMail($contact));

        return redirect()->back()->with('success', 'Record created successfully.');
    }
}
