@extends('layouts.app')
@section('content')
    <section>
        <div class="container my-5">
            <div class="card mx-auto bg-white" style="max-width: 600px;">
                <div class="card-body">
                    <h3 class="card-title mb-3"> 
<<<<<<< HEAD
                        Update: {{$book->title}}    
                    </h3>

                    <div class="d-flex justify-content-end align-items-center gap-3">
                        <a href="{{ route('books.index', $book->sku) }}" class="btn btn-primary mb-4">
                            All Books
                        </a>

                        <form action="{{ route('books.destroy', $book->sku) }}" method="post" onsubmit="return confirm('Are you sure?')">
=======
                        Update: {{ $book->title }}    
                    </h3>

                    <div class="d-flex justify-content-end align-items-center gap-3 mb-4">
                        <a href="{{ route('books.index') }}" class="btn btn-primary">
                            All Books
                        </a>

                        <form action="{{ route('books.destroy', $book->id) }}" onsubmit="return confirm('Are you sure?')" method="post">
>>>>>>> 385a9718e8fa6a553a860fb19627029edf07e905
                            @csrf @method('DELETE')
                            <button class="btn btn-danger">
                                Delete
                            </button>
                        </form>
                    </div>
<<<<<<< HEAD
                        
                    <form enctype="multipart/form-data" action="{{ route('books.update', $book->sku) }}" method="post">
                        @csrf
                        @method('PUT') 
=======

                    <form enctype="multipart/form-data" action="{{ route('books.update', $book->sku) }}" method="post">
                        @csrf
                        @method('PUT')
>>>>>>> 385a9718e8fa6a553a860fb19627029edf07e905

                        <div class="mb-3">
                            <label for="" class="form-label">Title</label>
                            <input type="text" name="title" value="{{ $book->title }}" class="form-control">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Author</label>
                            <input type="text" name="author" value="{{ $book->author }}" class="form-control">
                            @error('author')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Category</label>
                            <select name="category" id="" class="form-select">
                                <option value="" hidden></option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $book->category_id ? 'selected' : '' }}> {{ $category->title }} </option>
                                @endforeach
                            </select>
                            @error('category')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Cover</label>
                            <input type="file" accept="image/*" name="cover" class="form-control">
                            @error('cover')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">File (pdf)</label>
                            <input type="file" accept=".pdf" name="file" class="form-control">
                            @error('file')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="5">{{ $book->description }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-warning">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
