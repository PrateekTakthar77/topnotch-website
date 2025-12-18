<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Contact;
use App\Models\Service;

class FrontendController extends Controller
{   
    // Public function contact(){
    //     return view('contact');
    // }

    public function addContact(Request $request){
        // dd($request->all());
        $contacts = new Contact;
        $contacts->name = $request->input('name');
        $contacts->email = $request->input('email');
        $contacts->phone = $request->input('number');
        $contacts->company_name = $request->input('company_name');
        $contacts->save();

        return redirect()->back()->withSuccess('Enquiry Submitted Successfully');

    }
}
