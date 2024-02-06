<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PubblicController extends Controller
{
    public function home() {
        return view('home');
    }

    public function articles() {
        return view('all-articles');
    }

    public function edit (Article $article) {
        return view('edit-article', compact('article'));
    }
}
