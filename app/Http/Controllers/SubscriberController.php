<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function subscribeUser(Request $request){
        // dd($request);
        Subscriber::create($request->except('_token'));
        return response()->json(['message' => 'Subscribed Successfully']);
    }
}
