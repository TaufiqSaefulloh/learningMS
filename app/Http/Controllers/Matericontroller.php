<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi;

class Matericontroller extends Controller
{
    public function materi()
    {
        $materis = Materi::latest()->paginate(10);
        return view('materis.materi', compact('materis'));
    }
    public function create()
    {
        return view('kontens.create');
    }
}
