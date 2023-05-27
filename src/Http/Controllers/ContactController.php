<?php
namespace Anwar\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Anwar\Contact\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Anwar\Contact\Models\Contact;

class ContactController extends Controller {
    public function index()
    {
        return view('contact::contact');
    }

    public function sendMessage(Request $request)
    {
        Mail::to(config('contact.mail_send_to'))->send(new ContactMail(
            $request->name, 
            $request->message,
            $request->email,
        ));

        Contact::create($request->all());

        return redirect(route('contact'))->with(['message'=> 'Your message has been sent!']);
    }


}