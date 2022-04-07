<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\siteMail;
use Session;

class mailController extends Controller
{
    function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'notes' => 'required'
        ],
            [
                'notes.required' => 'The message field is required'
            ]
        );
            $mail = array(

                'name' => $request->name,
                'email' => $request->email,
                'date' => $request->date,
                'notes' => $request-> notes

            );



        Mail::to($mail['email'])->send(new siteMail($mail));
        Mail::to('connorricotta@gmail.com')->send(new siteMail($mail));
        return redirect('/')->with('status', 'Message Sent, Thank You!');
    }

}
