<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage() {
        return view('pages.welcome');
    }
    public function aboutPage() {
        $title = "Get to Know Us - Spotlight";
        return view('pages.about', compact('title'));
    }
    public function categoriesPage() {
        $title = "Browse our categories - Spotlight";
        return view('pages.categories', compact('title'));
    }
    public function libraryPage() {
        $title = "Our Vast Library - Spotlight";
        return view('pages.library', compact('title'));
    }
    public function contactPage() {
        $title = "Get in touch with us - Spotlight";
        return view('pages.contact', compact('title'));
    }
}
