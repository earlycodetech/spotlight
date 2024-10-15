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
<<<<<<< HEAD
    public function homePage() 
    {
        $newArrivals = Book::latest()->take(4)->get();
=======
    public function homePage()
    {
        $newArrivals  = Book::latest()->take(4)->get();
>>>>>>> 385a9718e8fa6a553a860fb19627029edf07e905
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
<<<<<<< HEAD
        return view('pages.categories', compact('title','categories'));
=======
        return view('pages.categories', compact('title', 'categories'));
>>>>>>> 385a9718e8fa6a553a860fb19627029edf07e905
    }
    public function libraryPage()
    {
        $title = "Our Vast Library - Spotlight";
<<<<<<< HEAD
        $books=Book::latest()->paginate(8);
        return view('pages.library', compact('title','books'));
=======
        $books = Book::latest()->paginate(8);
        return view('pages.library', compact('title', 'books'));
>>>>>>> 385a9718e8fa6a553a860fb19627029edf07e905
    }
    public function contactPage()
    {
        $title = "Get in touch with us - Spotlight";
        return view('pages.contact', compact('title'));
    }

<<<<<<< HEAD
    public function viewCategory($slug)
    {
        $category = Category::where('slug',$slug)->firstOrFail();
        $books = Book::where('category_id', $category->id)->latest()->paginate(8);

        $title = $category->title . 'Books - Spotlight';

        return view('pages.show-category', compact('category','books','title'));
        
=======

    public function viewCategory($slug)
    {
        $category  = Category::where('slug', $slug)->firstOrFail();
        $books = Book::where('category_id', $category->id)->latest()->paginate(8);

        $title =  $category->title . ' Books - Spotlight';

        return view('pages.show-category', compact('category', 'books', 'title'));
>>>>>>> 385a9718e8fa6a553a860fb19627029edf07e905
    }

    public function viewBook($sku)
    {
        $book = Book::where('sku', $sku)->firstOrFail();

<<<<<<< HEAD
        $title = $book->title . ' - Spotlight';

        return view('pages.show-book', compact('book','title'));   
    }

    public function download($sku){
=======
        $title =  $book->title . ' - Spotlight';

        return view('pages.show-book', compact('book', 'title'));
    }

    public function download($sku)
    {
>>>>>>> 385a9718e8fa6a553a860fb19627029edf07e905
        $book = Book::where('sku', $sku)->firstOrFail();
        $path = public_path('uploads/books/' . $book->file);


<<<<<<< HEAD
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
=======
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


        return response()->download($path, $book->title . '.' . $ext);
    }


    public function sendMessage(Request $request)
    {
        $data = $request->validate([
            'name' => "required|string",
            'email' => "required|string|email",
            'phone' => "required|string",
            'message' => "required|string",
>>>>>>> 385a9718e8fa6a553a860fb19627029edf07e905
        ]);

        Mail::to('support@spotlight.ng')->send(new ContactMail($data));

<<<<<<< HEAD
        Alert::success('Mail Sent');
        return back();
    }

=======
        Alert::success('Mail Sent', "We will get back to you shortly");
        return back();
    }


>>>>>>> 385a9718e8fa6a553a860fb19627029edf07e905
    public function search(Request $request)
    {
        $search = $request->input('search');

<<<<<<< HEAD
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
=======
        if (empty($search)) {
            Alert::toast('Please Enter a Search keyword', 'warning');
            return redirect('/');
        } else {

            $books = Book::where('title', 'like', "%$search%")
                ->orWhere('author', 'like', "%$search%")
                ->orWhereHas('category', function ($query) use ($search) {
                    $query->where('title', 'like', "%$search%");
                })
                ->with(['category'])
                ->paginate(12);
        }


        $title = "Search Result For: " . $search;
        return view('pages.search', compact('books', 'title'));
>>>>>>> 385a9718e8fa6a553a860fb19627029edf07e905
    }
}
