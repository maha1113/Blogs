<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function contactss(){

        return view('site1assets.contact');

    }

    public function contacts(){
        // $path = '';
        // $contacts = new Contact();
        // $contacts->name = $request->name;
        // $contacts->email = $request->email;
        // $contacts->phone = $request->phone;
        // $contacts->message = $request->message;
        // $contacts->img = $path;
        $contacts = Contact::all();

        return view('admin-dashboard.contacts.contact',[
         "contacts" => $contacts

        ]);
    }

    public function store(Request $request){
        $contacts = new Contact();
        $contacts->name = $request->name;
        $contacts->email = $request->email;
        $contacts->phone = $request->phone;
        $contacts->message = $request->message;
        $contacts->save();

        return redirect()->route('site1.index');
    }

}
