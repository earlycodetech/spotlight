@extends('layouts.app')
@section('content')
    @include('partials.hero', [
        'title' => 'Welcome To our E-library',
        'height' => "10rem"
    ])

      <!-- Meet Up starts -->
      <section class="container mb-5 mt-5 color">
        <div class="row  mx-auto ">
            <div class="col-md-6 mb-5">
                <img src="{{ asset("images/img-1.jpg") }}" class="order-1 order-md-0 w-100" alt=""> 
            </div>
            <div class="col-md-6 order-1 order-md-0 text-center meet-div " >
                <h2 class="w-50 pri">Spotlight MEETUP.</h2>
                <div class="text-start  ">
                    <p class="Meet_p">Meet Kindred Book Lovers In A Local Meetup Book Club!.
                        Fiction Or Non Fiction ,Paperback Or Hardcover,You Like?
                        Read A New Book Every Month..</p>
                </div>
                <div class="row d-flex justify-content-evenly meet bgsecn">
                    <div class="col-md-4 col-4 me-5 me-md-0 text-start">
                        <h4 class="pri">1M+</h4>
                        <p>Books</p>
                        <p>Collections</p>
                    </div>
                    <div class="col-md-4 col-4  text-start">
                        <h4 class="pri">50K+</h4>
                        <p>Club</p>
                        <p>Members</p>
                    </div>
                    <div class="col-md-4 text-start">
                        <h4 class="pri">4,972</h4>
                        <p>Groups</p>
                        <p>Created</p>
                    </div>
                    <button class="w-50 p-2 rounded  border-0 bgsec text-white ms-4 mt-5">Join Now</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Meet Up ends -->


    {{-- New Arrivals --}}
    <div class="container mb-5">
        <h2 class="mt-4">New Arrivals</h2>
        <div class="library_container container mt-5">
            <div class="books">
                <div class="row">
                    @for ($i = 0; $i < 4; $i++)
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
    </div>
    {{-- New Arrivals Ends --}}
    
    
@endsection