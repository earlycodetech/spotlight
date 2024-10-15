@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="page-title">Books Categories</h1>

        <!-- Categories list in card layout -->
        <div class="row mb-5">
            @forelse ($categories as $category)
                <div class="col-md-4 col-lg-3 mb-5">
                    <div class="category-card h-100">
<<<<<<< HEAD
                        <div class="category-header ">
=======
                        <div class="category-header">
>>>>>>> 385a9718e8fa6a553a860fb19627029edf07e905
                            <h2 class="category-title">{{ $category->title }}</h2>
                        </div>
                        <div class="category-body">
                            <p class="category-description">
                                {{ $category->description }}
                            </p>

                            <span class="badge bg-warning">
<<<<<<< HEAD
                                {{ Number::abbreviate($category->books->count()) }}
                                {{ $category->books->count() > 1 ? 'Books' : 'Book' }}
                            </span>

=======
                                {{ Number::abbreviate($category->books->count()) }} 
                                {{ $category->books->count() > 1 ? 'Books' : 'Book' }}
                            </span>


>>>>>>> 385a9718e8fa6a553a860fb19627029edf07e905
                            <a href="{{ route('category.view.page', $category->slug) }}" class="btn btn-warning w-100 mt-3">
                                View Books
                            </a>
                        </div>
                        

                    </div>
                </div>
<<<<<<< HEAD
                @empty
                <p class="text-center h2">
                    Coming Soon
                </p>

=======
            @empty
                <p class="text-center h2">
                    Coming Soon..
                </p>
>>>>>>> 385a9718e8fa6a553a860fb19627029edf07e905
            @endforelse
        </div>
    </div>
@endsection
