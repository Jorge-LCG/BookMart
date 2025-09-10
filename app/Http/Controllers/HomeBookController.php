<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeBookController extends Controller
{
    public function __invoke()
    {
        return view('books');
    }
}
