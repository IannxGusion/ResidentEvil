<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResidentEvilController extends Controller
{
    public function index()
    {
        // Bisa kirim data ke view jika perlu
        return view('residentevil');
    }
}
