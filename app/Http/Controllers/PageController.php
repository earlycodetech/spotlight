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
    public function categoriesPage() {
        return view('pages.categories');
    }
    public function libraryPage() {
        $title = "Our Vast Library - Spotlight";
        return view('pages.library', compact('title'));
    }
    public function contactPage() {
        return view('pages.contact');
    }
}
