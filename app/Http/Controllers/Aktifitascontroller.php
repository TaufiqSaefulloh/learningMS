<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aktifitascontroller extends Controller
{
    public function aktifitas()
    {
        return view('aktifitas.aktifitas');
    }
}
