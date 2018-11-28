<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;
use Mapper; // Call mapper control

class ContactController extends Controller
{
    public function create()
    {       
      // provide the longertive and latitude of the location
        Mapper::map(-43.535189, 172.646615);
        return view('contact.create');
    }

           public function store(Request $request)
        {
      
          $contact = [];
      
          $contact['name'] = $request->get('name');
          $contact['email'] = $request->get('email');
          $contact['mobile'] = $request->get('mobile');
          $contact['msg'] = $request->get('msg');
          
          $sender = [
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            "mobile" => $request->input('mobile'),
            "message" => $request->input('msg')
        ];

        $mailStatus = [
            "status" => "",
            "message" => "",
            "failedMails" => []
        ];
      
          // Mail delivery logic goes here

          \Mail::send('emails.contact', ["name" => $sender['name'], "email" => $sender['email'] , "mobile" => $sender['mobile'], "text" => $sender['message']], function($message) use ($sender){
            $message->from('aalgperera@gmail.com', 'Notification Mailer');
            $message->to('aalgperera@gmail.com');
            $message->subject('Inquiry');
            $mailStatus["status"] = "success";
            $mailStatus["message"] = "Email sending successful";});
          //Mail::to(config('mail.support.address'))->send(new ContactEmail($contact));
      
        //   flash('Your message has been sent!')->success();
      
          return redirect()->route('contact.create');
      
        }
      
      
      
}
