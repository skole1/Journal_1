<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
<<<<<<< HEAD
        $today = Carbon::today();
        $current = Carbon::now();
        return view('pages.admin', ['today' => $today, 'current' => $current]);
=======
        return view('pages.admin');
>>>>>>> 915263283e04003d0d5075d96cb2a6f4cf9b79cc
>>>>>>> 0537f1aea87bd7cef5fc200b5569e82b3afeab8b
    }
}
