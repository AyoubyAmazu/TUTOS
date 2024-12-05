<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Blog Minimaliste')</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/app.css">

</head>
<body>
    <header>
        <h1>Mon Blog</h1>
        
        <nav>
            <a href="{{Route('articles.index')}}">Accueil</a>
            @auth<a href="{{Route('auth.login')}}">Login</a>@endauth
        </nav>
    </header>

    <main class="d-flex">
        <aside class="bg-primary me-4">
            @yield('sidebar')
        </aside>
        <div class="content">
            @yield('content')
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Mon Blog Minimaliste</p>
    </footer>
</body>
</html>
