@extends('layouts.app')
@section('content')
    @include('partials.hero', [
        'title' => 'Welcome To our E-library',
        'height' => "10rem"
    ])

      <!-- Meet Up starts -->
      <section class="container mb-5 mt-5 color">
        <div class="row  mx-auto ">
            <div class="col-6">
                <img src="{{ asset("images/img-1.jpg") }}" class="order-1 order-md-0 w-100" alt=""> 
            </div>
            <div class="col-6 order-1 order-md-0 text-center meet-div " >
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
        <div class="row">
            <div class="col-md-4">
                <div class="card arrival_card">
                    <img src="{{ asset("images/img-1.jpg") }}" class="card-img-top arrival_img" alt="New Book 1">
                    <div class="card-body position-relative">
                        <h5 class="card-title">New Book Title 1</h5>
                        <p  class="card-text text-truncate" style="max-width: 320px;">Latest insights into the world of technology and innovation.</p>
                        <a href="#" class="btn btn-warning  position-absolute bottom-0 mb-1 text-white rounded-0">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card arrival_card">
                    <img src="{{ asset("images/img-2.jpg") }}" class="card-img-top arrival_img" alt="New Book 2">
                    <div class="card-body position-relative">
                        <h5 class="card-title">New Book Title 2</h5>
                        <p class="card-text text-truncate" style="max-width: 320px;">Explore the depths of the ocean and its mysteries.</p>
                        <a href="#" class="btn btn-warning position-absolute bottom-0  mb-1 text-white  rounded-0">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card arrival_card">
                    <img src="{{ asset('images/img-3.jpg') }}" class="card-img-top arrival_img" alt="New Book 3">
                    <div class="card-body">
                        <h5 class="card-title">New Book Title 3</h5>
                        <p class="card-text text-truncate" style="max-width: 320px;">
                            A riveting tale of adventure and survival that takes you on an unforgettable journey through uncharted territories.
                        </p>
                        <a href="#" class="btn btn-warning position-absolute bottom-0 mb-1 text-white  rounded-0">Read More</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    {{-- New Arrivals Ends --}}
    
    
@endsection