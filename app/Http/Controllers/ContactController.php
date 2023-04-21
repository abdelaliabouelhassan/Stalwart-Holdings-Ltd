<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
        ]);
        $email = env('MAIL_FROM_ADDRESS');
        $useremail = $request->email;
        $subject = $request->subject;
        $text = $request->message;
        $name = $request->name;

      

        Mail::send('contacmail', ['email' =>  $useremail, 'subject' => $subject, 'text' => $text, 'name' => $name], function ($message) use ($email) {
            $message->to($email);
            $message->subject('New Contact');
        });

        return response()->json([
            'status' => 'success',
        ],200);
    }
}
