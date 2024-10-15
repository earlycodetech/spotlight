<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "ALl Boooks";
        $books = Book::latest()->paginate(10);

        return view('books.index', compact('title', 'books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Upload Your book";
        $categories =  Category::oldest('title')->get();
        return view('books.create', compact('title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => "required|string",
            'author' => "required|string",
            'category' => "required|numeric|exists:categories,id",
            'description' => "required|string",
            'cover' => "required|image|mimes:jpg,png,jpeg|max:2048",
            'file' => "required|file|mimes:pdf|max:10240",
        ]);

        // Upload the cover
        $coverFile = $request->file('cover');
        $coverExt = $coverFile->extension();
        $coverFileName = "book_cover_" . time() . '_' . mt_srand() . '.' . $coverExt;
        $coverFile->move('uploads/covers', $coverFileName);


        // Upload the book
        $bookFile = $request->file('file');
        $bookExt = $bookFile->extension();
        $bookFileName = "book_" . time() . '_' . mt_srand() . '.' . $bookExt;
        $bookFile->move('uploads/books', $bookFileName);

        // Generate Slug
        $slug = Str::slug($data['title']);

        Book::create([
            'sku'=> Str::random(16),
            'category_id' => $data['category'],
            'title' => $data['title'],
            'slug' => $slug,
            'author' => $data['author'],
            'cover' => $coverFileName,
            'file' => $bookFileName,
            'description' => $data['description']
        ]);

        Alert::success('Uploaded Successfully', "Your book has been uploaded");
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
