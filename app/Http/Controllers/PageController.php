<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends Controller
{
    public function homePage() 
    {
        $newArrivals = Book::latest()->take(4)->get();
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
        return view('pages.categories', compact('title','categories'));
    }
    public function libraryPage()
    {
        $title = "Our Vast Library - Spotlight";
        $books=Book::latest()->paginate(8);
        return view('pages.library', compact('title','books'));
    }
    public function contactPage()
    {
        $title = "Get in touch with us - Spotlight";
        return view('pages.contact', compact('title'));
    }

    public function viewCategory($slug)
    {
        $category = Category::where('slug',$slug)->firstOrFail();
        $books = Book::where('category_id', $category->id)->latest()->paginate(8);

        $title = $category->title . 'Books - Spotlight';

        return view('pages.show-category', compact('category','books','title'));
        
    }

    public function viewBook($sku)
    {
        $book = Book::where('sku', $sku)->firstOrFail();

        $title = $book->title . ' - Spotlight';

        return view('pages.show-book', compact('book','title'));   
    }

    public function download($sku){
        $book = Book::where('sku', $sku)->firstOrFail();
        $path = public_path('uploads/books/' . $book->file);


        $ext = explode (".", $book->file);

        $ext = end($ext);


        return response()->download($path, $book->title . '.' .$ext);
    }

    public function sendMessage(Request $request){
        $data = $request->validate([
            'name'=> "required|string",
            'email'=> "required|string",
            'phone'=> "required|string",
            'message'=> "required|string"
        ]);

        Mail::to('support@spotlight.ng')->send(new ContactMail($data));

        Alert::success('Mail Sent');
        return back();
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        if(empty($search)){
            Alert::toast('Please Enter a Search Keyword', 'warning');
            return redirect()->route('library.page');
        } else {
            $books = Book::where('title','like',"%$search%")
            ->orWhere('author', 'like', "%$search%")
            ->orWhereHas('category', function ($query) use ($search){
                $query->where('title','like',"%$search%");
            })
            ->with(['category'])
            ->paginate(12);

        }
        
        $title = "Search Result For: " . $search;
        return view('pages.search', compact('books', 'title', 'search'));
    }
}
