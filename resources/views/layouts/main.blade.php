<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles.css">
    <title>@yield('title')</title>  <!-- pega o campo dinamicamente -->
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-lg" style="background-color: black;">
        <a class="navbar-brand" href="#">Netflix</a>
        <div class="navbar-collapse d-lg-flex justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/">HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="#">FILMES</a></li>
                <li class="nav-item"><a class="nav-link" href="/series">SÉRIES</a></li>
                <li class="nav-item"><a class="nav-link" href="#">MINHA LISTA</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><ion-icon name="search"></ion-icon>PESQUISAR</a></li>
                <li class="nav-item"><a class="nav-link" href="#">SAIR</a></li>
            </ul>
        </div>
        
    </nav>
@yield('content') <!-- Recebe o conteúdo dinamicamente -->
    <footer >
        <div>
        © 2021 Copyright: Netflix
        </div>
    </footer>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script>
        $('.carousel').carousel({
            interval: 2000
        })
    </script>
</body>

</html>