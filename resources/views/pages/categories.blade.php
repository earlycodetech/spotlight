<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Categories</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/style.css'])
</head>

<body>
    @include('partials.navbar')
    <div class="container">
        <h1 class="page-title">Books Categories</h1>

        <!-- Button to add a new category -->
        <div class="actions">
            <button class="btn btn-primary">Add New Category</button>
        </div>
        <!-- Categories list in card layout -->
        <div class="category-grid">
            <div class="category-card">
                <div class="category-header">
                    <h2 class="category-title">Fiction</h2>
                </div>
                <div class="category-body">
                    <img src="{{ asset('images/fiction.jpg') }}" alt=" fiction books">
                    <p class="category-description">Books Filled With Imaginative Stories.</p>
                </div>
                <div class="category-footer">
                    <button class="btn btn-edit">Edit</button>
                    <button class="btn btn-delete">Delete</button>
                </div>
            </div>

            <div class="category-card">
                <div class="category-header">
                    <h2 class="category-title">Science</h2>
                </div>
                <div class="category-body">
                    <img src="{{ asset('images/science.jpg') }}" alt=" science books">
                    <p class="category-description">Explore books on science and technology.</p>
                </div>
                <div class="category-footer">
                    <button class="btn btn-edit">Edit</button>
                    <button class="btn btn-delete">Delete</button>
                </div>
            </div>
            <div class="category-card">
                <div class="category-header">
                    <h2 class="category-title">Non-fiction</h2>
                </div>
                <div class="category-body">
                    <img src="{{ asset('images/nonfiction.jpg') }}" alt=" nonfiction books">
                    <p class="category-description">Explore books on facts and real events.</p>
                </div>
                <div class="category-footer">
                    <button class="btn btn-edit">Edit</button>
                    <button class="btn btn-delete">Delete</button>
                </div>
            </div>
            <div class="category-card">
                <div class="category-header">
                    <h2 class="category-title">Mystery</h2>
                </div>
                <div class="category-body">
                    <img src="{{ asset('images/mystery.jpg') }}" alt=" mystery books">
                    <p class="category-description">uncover the secrets behind unkwown events.</p>
                </div>
                <div class="category-footer">
                    <button class="btn btn-edit">Edit</button>
                    <button class="btn btn-delete">Delete</button>
                </div>
            </div>
            <div class="category-card">
                <div class="category-header">
                    <h2 class="category-title">Romance</h2>
                </div>
                <div class="category-body">
                    <img src="{{ asset('images/romance.jpg') }}" alt=" mystery books">
                    <p class="category-description">Read about Romance and Love.</p>
                </div>
                <div class="category-footer">
                    <button class="btn btn-edit">Edit</button>
                    <button class="btn btn-delete">Delete</button>
                </div>
            </div>
            <div class="category-card">
                <div class="category-header">
                    <h2 class="category-title">Horror</h2>
                </div>
                <div class="category-body">
                    <img src="{{ asset('images/horror.jpg') }}" alt=" horror books">
                    <p class="category-description">Explore books on terror and horror.</p>
                </div>
                <div class="category-footer">
                    <button class="btn btn-edit">Edit</button>
                    <button class="btn btn-delete">Delete</button>
                </div>
            </div>
            <div class="category-card">
                <div class="category-header">
                    <h2 class="category-title">Poetry</h2>
                </div>
                <div class="category-body">
                    <img src="{{ asset('images/poetry.jpg') }}" alt=" poetry books">
                    <p class="category-description">Enjoy poems in a beautiful way.</p>
                </div>
                <div class="category-footer">
                    <button class="btn btn-edit">Edit</button>
                    <button class="btn btn-delete">Delete</button>
                </div>
            </div>
            <div class="category-card">
                <div class="category-header">
                    <h2 class="category-title">History</h2>
                </div>
                <div class="category-body">
                    <img src="{{ asset('images/history.jpg') }}" alt=" history books">
                    <p class="category-description">learn about history and change over time.</p>
                </div>
                <div class="category-footer">
                    <button class="btn btn-edit">Edit</button>
                    <button class="btn btn-delete">Delete</button>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
