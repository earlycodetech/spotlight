<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
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
        $categories = Category::all()->sortBy('title');
        return view('pages.categories', compact('title', 'categories'));
    }
    public function libraryPage() {
        $title = "Our Vast Library - Spotlight";
        return view('pages.library', compact('title'));
    }
    public function contactPage() {
        $title = "Get in touch with us - Spotlight";
        return view('pages.contact', compact('title'));
    }


    public function viewCategory($slug)
    {
        $category  = Category::where('slug', $slug)->firstOrFail();
        $books = Book::where('category_id', $category->id)->latest()->paginate(8);

        $title =  $category->title . ' Books - Spotlight';

        return view('pages.show-category', compact('category', 'books', 'title'));
    }

    public function viewBook($sku)
    {
        $book = Book::where('sku', $sku)->firstOrFail();

        $title =  $book->title . ' - Spotlight';

        return view('pages.show-book', compact('book', 'title'));
    }
}
