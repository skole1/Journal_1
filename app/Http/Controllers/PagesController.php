<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        return view('index');
=======
        return view('pages.index');
    }

    public function admin()
    {
        return view('pages.admin');
>>>>>>> 915263283e04003d0d5075d96cb2a6f4cf9b79cc
    }
}
