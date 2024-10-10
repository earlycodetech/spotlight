@extends('layouts.app')
@section('content')
<section>
    <div class="container category">
             <!-- Contact Form Section -->
    <div class=" shadow-form p-4 mx-auto mt-5"
    style="border: 5px solid #fff; box-shadow: 0px 4px 8px 8px rgba(0, 0, 0, 0.137); width: 100%;">
    <div class="my-4" style="background-color:ghostwhite ">
        <h1 class="text-center pt-5 mt-3 Bolder" style="font-weight: 2000px">
            Get In Touch With Us
        </h1>
        <div class="row contact-section">
            <!-- Form Column -->
            <div class="col-md-6">
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf

                    <!-- Name Input -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                            required>
                    </div>

                    <!-- Email Input -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Your Email"
                            required>
                    </div>

                    <!-- Subject Input -->
                    <div class="mb-3">
                        <label for="phone-number" class="form-label">Phone-Number</label>
                        <input type="tel" name="phone" class="form-control" id="phone-number"
                            required>
                    </div>

                    <!-- Message Input -->
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" name="message" id="message" rows="5" placeholder="Your Message" required></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark">Send</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 p-2" class="boy">
                <img src="{{ asset('images/Contact (1).gif') }}" alt="" style="width: 430px; margin:auto;">
            </div>
    </div>

</section>
@endsection