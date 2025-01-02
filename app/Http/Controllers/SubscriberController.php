<?php

namespace App\Http\Controllers;

use App\Mail\AdminSubscriptionMail;
use App\Mail\UserSubscriptionMail;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscriberController extends Controller
{
    public function subscribeUser(Request $request){
        // dd($request);
        $Subscriber = Subscriber::create($request->except('_token'));
        Mail::to($Subscriber->email)->send(new AdminSubscriptionMail($Subscriber));
        Mail::to($Subscriber->email)->send(new UserSubscriptionMail($Subscriber));
        return response()->json(['message' => 'Thank You For Subscribing']);
    }
}
