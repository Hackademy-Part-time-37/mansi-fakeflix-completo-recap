<?php

namespace App\Http\Controllers;

use App\Mail\SubscribeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function subscribe(Request $request)
    {
        //Primo step validazione
        $request->validate([
            "username" => "required",
            "email" => "required|email",
            "message" => "required",
        ]);


        //2 step - mappo i dati ed elimino il token
        $data = [
            "username" => $request->username,
            "email" => $request->email,
            "message" => $request->message,
        ];

        Mail::to('amministrazione@fakeflix.com')->send(new SubscribeMail($data));

        return redirect()->route('homepage');
    }
}
