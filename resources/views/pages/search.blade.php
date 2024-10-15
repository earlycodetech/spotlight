@extends('layouts.app')
@section('content')
    @include('partials.hero', [
        'title' => $title,
        'height' => '10rem',
    ])

    <div class="library_container container mt-5">
        <div class="books">
            <div class="row">
                @forelse($books as $book)
                    <div class="col-md-4 col-lg-3 mb-5">
                        <a href="{{ route('book.view.page', $book->sku) }}" class="card border nav-link h-100 rounded-0 book">
                            <div class="box">
                                <img src="{{ asset('uploads/covers/'.$book->cover) }}" class="" alt="{{ $book->title }}">
                            </div>
                            <div class="mt-2 card-body">
                                <div class="row mb-2">
                                    <span class="col-1 fa-solid fa-book text-warning"></span>
                                    <span class="col-10">
                                        {{$book->author }}
                                    </span>
                                </div>
                                <div class="row mb-2">
                                    <span class="col-1 fa-solid fa-calendar-day text-warning"></span>
                                    <span class="col-10">
                                        {{ $book->created_at->format('M. jS Y') }}
                                    </span>
                                </div>
                                <span class="badge bg-warning">
                                    {{ $book->category->title }}
                                </span>
                            </div>
                        </a>
                    </div>
                    @empty
                    <div class="col-12">
                        <p class="h1 text-danger text-center">
                            🔍 <br>

                            No Result Found for "{{ $search }}"
                        </p>
                    </div>
                @endforelse
                <div class="col-12">
                    {!!  $books->links('pagination::bootstrap-5') !!}
                </div>
            </div>
        </div>
    </div>
@endsection
