<!DOCTYPE html>
<html>

<head>
    <title>Mis Bookmarks</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('bookmarks.index') }}">Ver Mis Bookmarks</a></li>
                <li><a href="{{ route('bookmarks.create') }}">Agregar Bookmark</a>
            </ul>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>