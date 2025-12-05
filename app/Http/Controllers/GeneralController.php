<?php

// app/Http/Controllers/GeneralController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index()
    {
        return view('pages.landing');
    }



}