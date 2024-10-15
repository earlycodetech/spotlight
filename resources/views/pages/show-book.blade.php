@extends('layouts.app')
@section('content')
    <section>
        <div class="container my-5">
            <div class="card border-0 shadow-sm bg-white" style="max-width: 900px" >
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <img src="{{ asset('uploads/covers/' . $book->cover) }}" class="w-100 rounded-1" alt="{{ $book->title }}">
                        </div>

                        <div class="col-md-8 mb-4">
                            <div class="d-flex flex-column gap3">
                                <h1>{{ $book->title }}</h1>

                                <p>
                                    <i class="fa-solid fa-user-edit text-warning"></i> {{ $book->author }}
                                </p>
                                <p>
                                    <i class="fa-solid fa-calendar-day text-warning"></i> {{ $book->created_at->format('M. jS Y') }}
                                </p>

                                <p>
                                     {{ $book->description }}
                                </p>

                                <div>
                                    {{-- <a href="{{ asset('uploads/books/'. $book->file) }}" target="_blank" download="{{ $book->title }}" class="btn btn-warning">
                                        <i class="fa-solid fa-file-pdf"></i> Download --}}
                                    <a href="{{ route('download.book', ['sku' => $book->sku])}}" class="btn btn-warning">
                                        <i class="fa-solid fa-file-pdf"></i> Download
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
