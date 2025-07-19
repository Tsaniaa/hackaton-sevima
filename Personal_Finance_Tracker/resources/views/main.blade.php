<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{route('bank')}}">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a0/Coin_of_Maximian.jpg" alt="Bootstrap" width="100" height="100">
            </a>
        </div>
    </nav>
    @yield('content')
</body>
</html>