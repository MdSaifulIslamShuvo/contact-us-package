<?php

namespace Shuvo\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Shuvo\Contact\Mail\ContactMail;
use Shuvo\Contact\Models\Contact;

class ContactController extends Controller
{
    public function contactForm(){
        return view("contact::contact");
    }

    public function sendContact(Request $request){
        Mail::to(Config("contact.send_email_to"))->send(new ContactMail($request->all()));
        Contact::create($request->all());
        return redirect(route('contact'));
    }
}
