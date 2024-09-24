@extends('layouts.app')
@section('aboutus')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Spotlight</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/style.css'])

</head>
<body>
    <div class="section">
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h1>
                        About Spotlight
                    </h1>
                </div>
                <div class="content">
                    
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci debitis modi recusandae magni repellat rem aliquid nobis. Laborum, asperiores autem.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia commodi, nostrum vitae quidem porro autem accusantium molestias quis quas nulla, nisi amet iure perspiciatis rem adipisci expedita animi saepe deleniti, unde numquam minus ut reiciendis aliquam! Facilis dignissimos, repudiandae neque omnis deserunt esse, repellat incidunt doloribus dolor quas tempora numquam.
    
                    </p>
                    <div class="button">
                        <a href="">Read More</a>
                    </div>
                </div>
                <div class="socials">
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-whatsapp"></i></a>
                </div>
    
            </div>
            <div class="image-section">
                <img src="{{ asset('images/img-3.jpg')  }}" alt="">
            </div>
        </div>
    </div>
</body>
</html>




    
@endsection