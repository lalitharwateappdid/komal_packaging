<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactLead;

class ContactLeadController extends Controller
{
    public function store(Request $request){
        $description = $request->description;
        $contact = $request->contact;

        $this->validate($request,[
            "description" => "required",
            "contact" => "required"
        ]);


        ContactLead::create([
            "description" => $description,
            "contact" => $contact
        ]);

        return response([
            "status" => true
        ],200);
    }
}
