<?php

namespace App\Http\Controllers;

use App\Mail\MembershipMail;
use App\Mail\MembershipMailAdmin;
use App\Models\MembershipDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\Isset_;

class MembershipController extends Controller
{
    public function store(Request $request)
    {
        $is_becoming_member = [];
        if (isset($request->is_becoming_member1)) {
            array_push($is_becoming_member, $request->is_becoming_member1);
        }
        if (isset($request->is_becoming_member2)) {
            array_push($is_becoming_member, $request->is_becoming_member2);
        }
        if (isset($request->is_becoming_member3)) {
            array_push($is_becoming_member, $request->is_becoming_member3);
        }
        if (isset($request->is_becoming_member4)) {
            array_push($is_becoming_member, $request->is_becoming_member4);
        }
        if (isset($request->is_becoming_member5)) {
            array_push($is_becoming_member, $request->is_becoming_member5);
        }
        $membershipType = [];

        if (isset($request->membership1)) {
            array_push($membershipType, $request->membership1);
        }
        if (isset($request->membership2)) {
            array_push($membershipType, $request->membership2);
        }
        if (isset($request->membership3)) {
            array_push($membershipType, $request->membership3);
        }
        if (isset($request->membership4)) {
            array_push($membershipType, $request->membership4);
        }

        $assistence = [];

        if (isset($request->membership1)) {
            array_push($assistence, $request->membership1);
        }
        if (isset($request->membership2)) {
            array_push($assistence, $request->membership2);
        }
        if (isset($request->membership3)) {
            array_push($assistence, $request->membership3);
        }
        if(isset($request->assistanceOther)){
            $assistence = [];
            array_push($assistence, $request->assistanceOtherVal);
        }
        $services = [];
        if (isset($request->services1)) {
            array_push($services, $request->services1);
        }
        if (isset($request->services2)) {
            array_push($services, $request->services2);
        }
        if (isset($request->services3)) {
            array_push($services, $request->services3);
        }
        if (isset($request->services4)) {
            array_push($services, $request->services4);
        }
        if (isset($request->services5)) {
            array_push($services, $request->services5);
        }
        if(isset($request->servicesOther)){
            $services = [];
            array_push($services, $request->servicesOtherVal);
        }
        $goals = [];
        if (isset($request->goal1)) {
            array_push($goals, $request->goal1);
        }
        if (isset($request->goal2)) {
            array_push($goals, $request->goal2);
        }
        if (isset($request->goal3)) {
            array_push($goals, $request->goal3);
        }
        if (isset($request->goal4)) {
            array_push($goals, $request->goal4);
        }
        if(isset($request->goalOther)){
            $goals = [];
            array_push($goals, $request->goalOtherVal);
        }
        $reqArr = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'interested_in_use' => $request->interested_in_use,
            'is_becoming_member' => implode(',', $is_becoming_member),
            'membershipType' => implode(',', $membershipType),
            'assistence' => implode(',', $assistence),
            'services' => implode(',', $services),
            'goals' => implode(',', $goals),
            "current_project" => $request->current_project,
            "current_projectVal" => $request->current_projectVal,
            "tour" => $request->tour,
            "about" => $request->about,
        ];
        // dd($request);
        $membership = MembershipDetail::create($reqArr);
        Mail::to($membership->email)->send(new MembershipMail($membership));
        Mail::to($membership->email)->send(new MembershipMailAdmin($membership));
        return view('components.thanks_membership');
    }
}
