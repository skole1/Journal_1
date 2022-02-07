<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function admin()
    {
        $today = Carbon::today();
        $current = Carbon::now();
        return view('pages.admin', ['today' => $today, 'current' => $current]);
    }
}
