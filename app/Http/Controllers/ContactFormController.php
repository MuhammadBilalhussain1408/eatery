<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\Models\Contact;
use App\Mail\ContactMail;
use App\Mail\ThankYou;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class ContactFormController extends Controller {

    // View Credit Intake Form

    public function viewContactForm(Request $request) {
        return view('components.contact.contact');

    }

    // Store Contact Form data
    public function ContactForm(Request $request) {

        // Form validation
//        $this->validate($request, [
//            'g-recaptcha-response' => 'required|recaptchav3:contact,0.5'
//        ]);

        $data = array(
            'name'      =>  $request->name,
            'email'      =>  $request->email,
            'phone'      =>  $request->phone,
            'message'   =>   $request->message
        );
        $data_thankYou = array(
            'subject' => "Thanks you for contacting to 80/20 Eatery",
            'name' => $request->name
        );

//        Mail::to('info@8020eatery.com')->send(new ContactMail($data));
//        Mail::to($request->email)->send(new ThankYou($data_thankYou));
        //  Store data in database
//        Contact::create($request->all());

        //
        return view('components.contact.thankyou')->with('name', $request->name);
    }



}
