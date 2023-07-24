<!DOCTYPE html>
<html lang="{{ config('app.locale')  }}">
<head>
    <div>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{  config('app.name') }} @yield('page_title')</title>

    @section('vite')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @show
</head>
<body>
    <header>
        @section('banner')
            <img src="{{ asset('img/banner.jpg') }}" alt="FP">
        @show
        <h1>FITNESS PARKY</h1>
        <li><a href="{{ route('accueil') }}" class='menu'>Accueil</a></li>
        <li><a href="{{ route('cours') }}" class='menu'>Cours</a></li>
        <li><a href="{{ route('tarifs') }}" class='menu'>Tarifs</a></li>
        <li><a href="{{ route('contact') }}" class='menu'>Contact</a></li> 
    </header>
    </div>
   

    <div class="container">
        @yield('content')
    </div>

    <footer>
        @section('footer')
            <nav> 
                <li><a href="{{ route('mentions-legales') }}" class='menu'>Mentions légales</a></li> 
            Copyright FOTIE CHARLES 2023
            </nav>  
        @show
        
    </footer>
</body>
</html >