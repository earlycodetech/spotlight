<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage() {
        return view('pages.welcome');
    }
    public function aboutPage() {
        return view('pages.about');
    }
}
