<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationBookController extends Controller
{
    public function index()
    {
        return view('book.information');
    }
}
