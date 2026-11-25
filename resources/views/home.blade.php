<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Static Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">DemoSite</a>
            <div class="navbar-nav">
                <a class="nav-link active" href="{{ route('home') }}">Home</a>
                <a class="nav-link" href="{{ route('about') }}">About</a>
            </div>
        </div>
    </nav>
    <main class="container py-5 text-center">
        <h1 class="display-4 fw-bold">Welcome to Laravel on Render</h1>
        <p class="lead text-muted">A lightweight static website built with Laravel and deployed via Docker.</p>
        <a href="{{ route('about') }}" class="btn btn-primary btn-lg mt-3">Learn More</a>
    </main>
</body>
</html>
