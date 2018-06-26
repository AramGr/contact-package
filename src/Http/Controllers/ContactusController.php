<?php

namespace Test\Contactus\Http\Controllers;

use Test\Contactus\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;


class ContactusController extends Controller {

    public function index ()
    {
        return view('contactus::index')->withTitle('Contact-us');
    }

    public function send_form (Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        Mail::to(config('contactus.send_email_to'))->send(new ContactUs($name, $email, $message));
        return redirect()->back();
    }
}