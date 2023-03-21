<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{'/assets/bootstrap/css/bootstrap.min.css'}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">



    <link rel="stylesheet" href="{{'/assets/css/style.css'}}">
    <title>VideoSharp</title>
</head>
<body>
<!--Шапка-->
<header class="container">
    <div class="row">
        <div class="col-md-6 col">
            <a class="navbar-brand logo" href="{{route('home')}}">
                <img src="/assets/img/logo.png" alt="" width="71" height="71" class="d-inline-block align-text-top">
            </a>
        </div>
        <div class="col-md-6 col text-end p-4">
            <a href="" class=" user"><i class="fas fa-user"></i> Авторизация</a>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content user__modal">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body">

                </div>
                <div class="col-md-12 text-center py-2 ">
                    <p><a href="" class="">Зарегистрироваться</a></p>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
</header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="{{route('courses')}}">Видеокурсы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">об авторе</a>
                </li>
                <!--<li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown link
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>-->
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer class="container-fluid py-5 footer">

    <div class="row">
        <div class="col-md-3 text-center">
            <h3>Основатель</h3>
        </div>
        <div class="col-md-3">

        </div>
        <div class="col-md-3">

        </div>
    </div>

</footer>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->

<!-- Option 2: Separate Popper and Bootstrap JS -->
<script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</body>
</html>
