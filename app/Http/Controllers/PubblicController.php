<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PubblicController extends Controller
{
    public function home() {
        return view('home');
    }

    public function articles() {
        return view('all-articles');
    }
}
