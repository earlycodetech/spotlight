@extends('layouts.app')
@section('content')
    @include('partials.hero', [
        'title' => 'Checkout our Library',
        'height' => '10rem',
    ])

    <div class="library_container container mt-5">
        <div class="books">
            <div class="row">
<<<<<<< HEAD
                @forelse($books as $book)
                    <div class="col-md-4 col-lg-3 mb-5">
                        <a href="{{ route('book.view.page', $book->sku) }}" class="card border nav-link h-100 rounded-0 book">
                            <div class="box">
                                <img src="{{ asset('uploads/covers/'.$book->cover) }}" class="" alt="{{ $book->title }}">
=======
                @forelse ($books as $book)
                    <div class="col-md-4 col-lg-3 mb-5">
                        <a href="{{ route('book.view.page', ['sku' => $book->sku]) }}" class="card border nav-link h-100 rounded-0 book">
                            <div class="box">
                                <img src="{{ asset('uploads/covers/' . $book->cover) }}" class="" alt="cover">
>>>>>>> 385a9718e8fa6a553a860fb19627029edf07e905
                            </div>
                            <div class="mt-2 card-body">
                                <div class="row mb-2">
                                    <span class="col-1 fa-solid fa-book text-warning"></span>
                                    <span class="col-10">
<<<<<<< HEAD
                                        {{$book->author }}
=======
                                        {{ $book->title }}
>>>>>>> 385a9718e8fa6a553a860fb19627029edf07e905
                                    </span>
                                </div>
                                <div class="row mb-2">
                                    <span class="col-1 fa-solid fa-calendar-day text-warning"></span>
                                    <span class="col-10">
<<<<<<< HEAD
                                        {{ $book->created_at->format('M. jS Y') }}
=======
                                        {{ $book->author }}
>>>>>>> 385a9718e8fa6a553a860fb19627029edf07e905
                                    </span>
                                </div>
                                <span class="badge bg-warning">
                                    {{ $book->category->title }}
                                </span>
                            </div>
                        </a>
                    </div>
<<<<<<< HEAD
                    @empty
                    <div class="col-12">
                        <p class="h2 text-danger text-center">Coming soon..</p>
                    </div>
                @endforelse
                <div class="col-12">
                    {!!  $books->links('pagination::bootstrap-5') !!}
=======
                @empty
                    <h5>Coming Soon..</h5>
                @endforelse

                <div class="col-12">
                    {!! $books->links('pagination::bootstrap-5') !!}
>>>>>>> 385a9718e8fa6a553a860fb19627029edf07e905
                </div>
            </div>


        </div>
    </div>
@endsection
