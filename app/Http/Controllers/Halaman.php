<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Halaman extends Controller
{
    public function home()
    {
        
    }

    public function detail()
    {
        return view('moviedetail');
    }
}
