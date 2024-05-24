<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {
        return view('index');
    }

    public function confirm(ContactRequest $request) {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'phone1', 'phone2', 'phone3', 'address', 'building', 'category__id', 'content']);
    
        return view('confirm', compact('contact'));
    }
    
    public function store(ContactRequest $request) {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'phone1', 'phone2', 'phone3', 'address', 'building', 'category__id', 'content']);
        Contact::create($contact);

        return view('thanks');
    }


}
