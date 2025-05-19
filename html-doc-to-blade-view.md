# Creating Views from Static HTML Pages in Laravel Blade

You have a static HTML document that shows how your webpage will look like.
In this tutorial, you will learn how to convert that static HTML into a dynamic Blade template in Laravel.

Blade is Laravel’s templating engine that helps you organize your HTML into reusable components like:
- Layout templates (e.g., layouts/app.blade.php)
- Partials (e.g., header, footer, navigation)
- Page-specific views (e.g., home.blade.php, about.blade.php)

By splitting your static HTML into these parts, your code will be:
- Easier to maintain
- More flexible for future updates
- Ready for dynamic data from your Laravel backend

## Step 1: Move your static HTML into Laravel 🚌

Start by copying your static HTML files into your Laravel project.

📂 Where to put your files?

In Laravel, views (HTML templates) go into the `resources/views` folder.

So if you have files like:

```
index.html
about.html
contact.html
```

Copy them into resources/views/ and rename them to use the Blade format:

```
resources/views/
├── home.blade.php
├── about.blade.php
└── contact.blade.php
```

>🔁 Rename .html to .blade.php. Laravel needs this to process Blade syntax.

## Step 2: Identify reusable parts in your HTML ✂️

Look at your HTML and figure out what parts repeat across pages:
- `<head>...</head>` → shared metadata, styles → goes to layout
- `<nav>...</nav>` → navigation bar → becomes a partial
- `<footer>...</footer>` → also a partial
- `<body>...</body>` → main structure → split between layout and sections

```html
<!DOCTYPE html>
<html>
<head>
  <title>My Page</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav>
    <!-- navigation -->
  </nav>

  <div class="content">
    <h1>Welcome</h1>
    <p>This is the homepage</p>
  </div>

  <footer>
    <!-- footer info -->
  </footer>
</body>
</html>
```

We’ll split this into:
- layouts/app.blade.php – the base HTML structure
- partials/nav.blade.php – the navbar
- partials/footer.blade.php – the footer
- home.blade.php – the page content

## Step 3: Create the main layout – layouts/app.blade.php 🪟

A layout is a template that contains the common elements of a webpage: `<html>`, `<head>`, `<body>`, nav, footer, etc. All subpages will inherit from it.

📄 create a file: resources/views/layouts/app.blade.php

In this file pase a common structure of vebpages:
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Website')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    @include('partials.nav') {{-- nawigacja --}}

    <div class="content">
        @yield('content') {{-- tutaj pojawi się treść podstrony --}}
    </div>

    @include('partials.footer') {{-- stopka --}}

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
```

How it works 👀
- `@yield('title')` – dynamic page title (can be set individually on each subpage)
- `@include('partials.nav')` – inserts the file partials/nav.blade.php
- `@yield('content')` – placeholder for the content of a specific subpage
- `asset('...')` – generates a correct link to CSS/JS files from the public/ folder

## Step 4: Create partials – reusable components 🧩

Create files like:

```
resources/views/partials/nav.blade.php
resources/views/partials/footer.blade.php
```

```php
<nav>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</nav>
```


```php
<footer>
    <p>&copy; {{ date('Y') }} My Website. All rights reserved.</p>
</footer>
```

## Step 5: Create individual views (pages) 📃

Let’s create the content pages and extend the layout you built.

Example: resources/views/home.blade.php

```php
@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Welcome to My Website</h1>
    <p>This is the homepage.</p>
@endsection
```

Example: resources/views/about.blade.php

```php
@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <h1>About Us</h1>
    <p>We are a team of awesome developers.</p>
@endsection
```

**How it works?** 👀

- `@extends('layouts.app')`
    - This tells Blade that this view inherits from the layout file layouts/app.blade.php.
    - In other words: "Use this layout as the base template for my page."
    - This way, you don’t have to repeat the full HTML structure on every page.
- `@section('title', 'Home')`
    - This sets the content of the title section defined in the layout.
    - In layouts/app.blade.php, there is a @yield('title') placeholder that will be replaced by 'Home'.
    - It’s used to dynamically set the page’s `<title>` tag.
- `@section('content') ... @endsection`
    - This defines the content section, which holds the main content of the page.
    - Everything between @section('content') and @endsection will be inserted into the layout where @yield('content') is placed.
    - Here you put the unique content of the page — for example, a heading and a paragraph for the homepage.

## Whats next? 👀

- Introduction to migrations
    - How to create migrations
    - Understanding columns, data types, and indexes
    - Running migrations (php artisan migrate) to build your tables
- Creating seeders
    - How to write seeders to add dummy data
    - Using factories for generating realistic data
    - Running seeders (php artisan db:seed)
- Connecting your data with views
    - Retrieving data from the database with Eloquent models
    - Passing that data to Blade views
    - Displaying dynamic content on your pages