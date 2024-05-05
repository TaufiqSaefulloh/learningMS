<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Beritacontroller extends Controller
{
    public function berita()
    {
        return view('beritas.berita');
    }
}
