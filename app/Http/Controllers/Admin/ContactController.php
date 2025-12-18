<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function destroy($id)
    {
        $contacts = Contact::find($id);
        $contacts->delete();
        return redirect()->back()->with('status','Enquiry Deleted Successfully');
    }
}

