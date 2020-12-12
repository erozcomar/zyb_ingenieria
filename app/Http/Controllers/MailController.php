<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use App;

class MailController extends Controller
{
    public function store(Request $request)
    {
        Mail::send('emails.message-received', $request->all(), function($msj)
        {
            $msj->subject('correo de contacto');
            $msj->to('cristianbono87@gmail.com');
        });


        // $nuevaPregunta = new App\consultas;

        // $nuevaPregunta->name = $request->name;
        // $nuevaPregunta->email = $request->email;
        // $nuevaPregunta->email = $request->phone;
        // $nuevaPregunta->email = $request->query;

        // $nuevaPregunta->save();

        // return view('zyb');

        return back();
    }
}
