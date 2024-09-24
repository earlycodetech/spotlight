@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="page-title">Books Categories</h1>

        <!-- Categories list in card layout -->
        <div class="row mb-5">
            @for ($i = 0; $i < 8; $i++)
                <div class="col-md-4 col-lg-3 mb-5">
                    <div class="category-card">
                        <div class="category-header">
                            <h2 class="category-title">{{ fake()->word }}</h2>
                        </div>
                        <div class="category-body">
                            <p class="category-description">
                                {{ fake()->realText(100) }}
                            </p>
                        </div>

                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
