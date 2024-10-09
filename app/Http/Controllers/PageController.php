<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage()
    {
        $newArrivals  = Book::latest()->take(4)->get();
        return view('pages.welcome', compact('newArrivals'));
    }
    public function aboutPage()
    {
        $title = "Get to Know Us - Spotlight";
        return view('pages.about', compact('title'));
    }
    public function categoriesPage()
    {
        $title = "Browse our categories - Spotlight";
        $categories = Category::all()->sortBy('title');
        return view('pages.categories', compact('title', 'categories'));
    }
    public function libraryPage()
    {
        $title = "Our Vast Library - Spotlight";
        $books = Book::latest()->paginate(8);
        return view('pages.library', compact('title', 'books'));
    }
    public function contactPage()
    {
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

    public function download($sku)
    {
        $book = Book::where('sku', $sku)->firstOrFail();
        $path = public_path('uploads/books/' . $book->file);


        /* The code snippet `  = explode(".", ->file);  = end();` is extracting the file
      extension from the filename stored in the `->file` property. */
        /* The code snippet `    = explode(".", ->file);` is splitting the filename stored in the
     `->file` property based on the dot (.) delimiter. The `explode()` function in PHP breaks a
     string into an array based on a specified delimiter, in this case, the dot (.) character. */
        $ext = explode(".", $book->file);

        
        /* ` = end();` is extracting the last element from the array `` after splitting the
        filename based on the dot (.) delimiter using the `explode()` function. This line of code
        assigns the file extension extracted from the filename to the variable ``. */
        $ext = end($ext);
  

        return response()->download($path, $book->title .'.' .$ext);
    }


    public function sendMessage(Request $request)
    {
        $data = $request->validate([
            'name' => "required|string",
            'email' => "required|string|email",
            'phone' => "required|string",
            'message' => "required|string",
        ]);

        
    }
}
