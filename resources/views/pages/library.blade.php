@extends('layouts.app')
@section('content')
    @include('partials.hero', [
        'title' => 'Checkout our Library',
        'height' => '10rem',
    ])

    <div class="library_container container mt-5">
        <div class="books">
            <div class="row">
                @for ($i = 0; $i < 12; $i++)
                    <div class="col-md-4 col-lg-3 mb-5">
                        <a href="" class="card border nav-link h-100 rounded-0 book">
                            <div class="box">
                                <img src="{{ asset('images/img-1.jpg') }}" class="" alt="cover">
                            </div>
                            <div class="mt-2 card-body">
                                <div class="row mb-2">
                                    <span class="col-1 fa-solid fa-book text-warning"></span>
                                    <span class="col-10">
                                        {{ fake()->realText(50) }}
                                    </span>
                                </div>
                                <div class="row mb-2">
                                    <span class="col-1 fa-solid fa-user-edit text-warning"></span>
                                    <span class="col-10">
                                        {{ fake()->name }}
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
