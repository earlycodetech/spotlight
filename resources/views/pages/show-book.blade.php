@extends('layouts.app')
@section('content')
    <section>
        <div class="container my-5">
<<<<<<< HEAD
            <div class="card border-0 shadow-sm bg-white" style="max-width: 900px" >
=======
            <div class="card border-0 shadow-sm bg-white mx-auto" style="max-width: 900px;">
>>>>>>> 385a9718e8fa6a553a860fb19627029edf07e905
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <img src="{{ asset('uploads/covers/' . $book->cover) }}" class="w-100 rounded-1" alt="{{ $book->title }}">
                        </div>

                        <div class="col-md-8 mb-4">
<<<<<<< HEAD
                            <div class="d-flex flex-column gap3">
=======
                            <div class="d-flex flex-column gap-3">
>>>>>>> 385a9718e8fa6a553a860fb19627029edf07e905
                                <h1>{{ $book->title }}</h1>

                                <p>
                                    <i class="fa-solid fa-user-edit text-warning"></i> {{ $book->author }}
                                </p>
                                <p>
                                    <i class="fa-solid fa-calendar-day text-warning"></i> {{ $book->created_at->format('M. jS Y') }}
                                </p>

                                <p>
<<<<<<< HEAD
                                     {{ $book->description }}
                                </p>

                                <div>
                                    {{-- <a href="{{ asset('uploads/books/'. $book->file) }}" target="_blank" download="{{ $book->title }}" class="btn btn-warning">
                                        <i class="fa-solid fa-file-pdf"></i> Download --}}
                                    <a href="{{ route('download.book', ['sku' => $book->sku])}}" class="btn btn-warning">
=======
                                    {{ $book->description }}
                                </p>

                                <div>
                                    {{-- <a href="{{ asset('uploads/books/' . $book->file) }}" target="_blank" download="{{ $book->title }}" class="btn btn-warning">
                                        <i class="fa-solid fa-file-pdf"></i> Download
                                    </a> --}}
                                    <a href="{{ route('download.book', ['sku' => $book->sku]) }}" class="btn btn-warning">
>>>>>>> 385a9718e8fa6a553a860fb19627029edf07e905
                                        <i class="fa-solid fa-file-pdf"></i> Download
                                    </a>
                                </div>
                            </div>
<<<<<<< HEAD

=======
>>>>>>> 385a9718e8fa6a553a860fb19627029edf07e905
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
