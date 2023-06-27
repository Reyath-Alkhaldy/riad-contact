<?php

namespace Riyad\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Riyad\Contact\Mail\ContactMailable;
use Riyad\Contact\models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }
    public function send(Request $request)
    {
//        return config('contact.send_email_to');
        Contact::create($request->all());
//        Mail::to("riadalkhaldy833@gmail.com")->send(new ContactMailable($request->message,$request->name));
        Mail::to( config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
        return redirect( route('contact'));
    }
}
