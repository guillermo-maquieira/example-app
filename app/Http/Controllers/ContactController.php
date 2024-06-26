<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $allContacts = Contact::all();

        return view('welcome', ['contacts' => $allContacts]);
    }
}
