<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->all();
        return view('confirm',['contact' => $contact]);
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only([
            'first_name' => $request->first_name,
            'gender'=>$request->gender,
            'email'=>$request->email,
            'tel'=>$request->tel,
            'address'=>$request->address,
            'building'=>$request->building,
            'category_id'=>$request->category_id,
            'content'=>$request->content,
        ]);

        return view('thanks');
        Contact::create($contact);
    }
}
