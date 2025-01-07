<?php

namespace App\Http\Controllers;

use App\Mail\AdminSubscriptionMail;
use App\Mail\UserSubscriptionMail;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SubscriberController extends Controller
{
    public function subscribeUser(Request $request)
    {
        // dd($request);
        // return response()->json(['errors' => ['Recaptcha Failed']]);

        $validator = Validator::make($request->all(), [
            'email' => 'required|email:rfc,dns'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }
        $isCaptchaValid = validateRecaptcha($request);
        if ($isCaptchaValid) {
            $Subscriber = Subscriber::create($request->except('_token','g-recaptcha-token'));
            Mail::to('info@8020eatery.com')->send(new AdminSubscriptionMail($Subscriber));
            Mail::to($Subscriber->email)->send(new UserSubscriptionMail($Subscriber));
            return response()->json(['message' => 'Thank You For Subscribing']);
        } else {
            return response()->json(['errors' => ['Recaptcha Failed']]);
        }
    }
}
