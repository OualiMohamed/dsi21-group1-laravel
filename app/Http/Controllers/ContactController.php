<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function showContact() {
        $myContact = new Contact;
        $msg = $myContact->getMessage();
        return view('contact', ["message" => $msg] );
    }
}
