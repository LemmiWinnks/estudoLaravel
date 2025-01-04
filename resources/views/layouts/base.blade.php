<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width-device-width, initial-scale=1.0" >
    <title>@yield('title')</title>


    {{--Font Google: Roboto--}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    {{--Link bootstrap--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{--Css/js--}}
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/scripts.js"></script>

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
                <img src="/img/galinha.png" />
            </a>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/events/events" class="nav-link">Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/events/eventCreate" class="nav-link">Criar Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/events/enter" class="nav-link">Entrar</a>
                </li>
                <li class="nav-item">
                    <a href="/events/accountCreate" class="nav-link">Cadastrar</a>
                </li>
            </ul>
            </div>
        </nav>
    </header>


    <section>
        @yield('content')
    </section>


    <footer>Rodapé oficial &copy</footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</body>


</html>