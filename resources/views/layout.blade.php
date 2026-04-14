<!DOCTYPE html>
<html>
<head>
    <title>Menus</title>
    <style>
        nav a {
            margin: 10px;
            text-decoration: none;
        }

        .active {
            font-weight: bold;
            color: red;
        }
    </style>
</head>
<body>

    <nav>
        <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
        <a href="/photos" class="{{ request()->is('photos') ? 'active' : '' }}">Photos</a>
        <a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>
    </nav>

    <hr>

    @yield('content')

    <hr>

    <footer>
        <p>Realizado por: Dania Valenzuela</p>
    </footer>

</body>
</html>