<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

class ContactController extends Controller
{
    public function index(){
        
        $contacts = Contact::paginate(5);
        
        return view('contacts.index', /*['contacts'=>$contacts]*/ compact('contacts'));
    }
}
