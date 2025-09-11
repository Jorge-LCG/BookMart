<?php

namespace App\Http\Controllers;

use App\Http\Requests\Mail\ClaimMailRequest;
use App\Mail\ClaimMail;
use App\Models\Claims;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ClaimsBookController extends Controller
{
    public function index()
    {
        return view('claims-book');
    }

    public function store(ClaimMailRequest $request)
    {
        $data = $request->validated();

        Claims::create([
            'name' => $request->name,
            'dni' => $request->dni,
            'email' => $request->email,
            'tipo_reclamo' => $request->tipo_reclamo,
            'subject' => $request->subject,
            'description' => $request->description,
        ]);

        Mail::to('prueba@prueba.com')->send(new ClaimMail($data));

        return back()->with('mensaje', 'Se envio su reclamo correctamente');
    }
}
