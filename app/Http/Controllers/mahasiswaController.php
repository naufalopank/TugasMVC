<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public function index()
    {
        $nama = "Ahmed";
        return view ('mahasiswa', ['nama'=> $nama]);
    }
}
