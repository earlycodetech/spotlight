<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/style.css'])
</head>

<body>
    <nav>
        @include('partials.navbar')
    </nav>

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
                    <form>
                        <!-- Name Input -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Your Name"
                                required>
                        </div>

                        <!-- Email Input -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Your Email"
                                required>
                        </div>

                        <!-- Subject Input -->
                        <div class="mb-3">
                            <label for="phone-number" class="form-label">Phone-Number</label>
                            <input type="tel" class="form-control" id="phone-number"
                                placeholder="+2347041322082" required>
                        </div>

                        <!-- Message Input -->
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Your Message" required></textarea>
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
</body>

</html>
