<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

           public function store(ContactFormRequest $request)
        {
      
          $contact = [];
      
          $contact['name'] = $request->get('name');
          $contact['email'] = $request->get('email');
          $contact['mobile'] = $request->get('mobile');
          $contact['msg'] = $request->get('msg');          
      
          // Mail delivery logic goes here

          Mail::to(config('mail.support.address'))->send(new ContactEmail($contact));
      
          flash('Your message has been sent!')->success();
      
          return redirect()->route('contact.create');
      
        }
      
      
      
}
