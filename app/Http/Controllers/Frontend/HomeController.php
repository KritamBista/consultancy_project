<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Country;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    function company()
    {
        $company = Company::first();
        $country = Country::all();
        // return $company;
        return view('frontend.home', compact('company', 'country'),);
    }

    function contact(Request $request)
    {
        $request->validate([
            'Name' => 'string|required',
            'Email' => 'email|required',
            'Phone' => 'string|required',
            'message' => 'string|required',
        ]);

        Contact::create([
            'Name' => $request->Name,
            "Email" => $request->Email,

            "Phone" => $request->Phone,
            "message" => $request->message,



        ]);
        return redirect()->back();
    }
}
