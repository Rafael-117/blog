<?php

namespace App\Http\Controllers;

use App\Mail\MensajeRecibido;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function store()
    {
        $msg = request()->validate(
            [
                'name' => 'required',
                'last_name' => 'required',
                'password' => 'required',
                'email' => 'required|email',
            ]
        );
        Mail::to('gr4n4dero@gmail.com')->queue(new MensajeRecibido($msg));
    }
}
