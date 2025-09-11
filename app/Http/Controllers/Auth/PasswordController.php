<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\PasswordRequest;
use App\Mail\PasswordMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PasswordController extends Controller
{
    public function index()
    {
        return view('auth.password');
    }

    public function store(PasswordRequest $request)
    {
        $data = $request->validated();

        Mail::to('prueba@prueba.com')->send(new PasswordMail);
        
        return back()->with('mensaje', 'Se envio un mensaje a su correo');
    }
}
