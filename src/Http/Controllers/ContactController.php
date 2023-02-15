<?php

namespace Soroux\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Soroux\Contact\Models\Contact;

class ContactController extends Controller
{
    //
    public function index()
    {
        $contacts = Contact::all();
        return view('contact::contact',['contacts'=>$contacts]);
    }

    public function send(Request $request)
    {
        Contact::create($request->all());
        return back();

    }
}
