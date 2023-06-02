<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{$description}}">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="\berber\prje\public\frontend\css\stil.css" rel="stylesheet">
    <link href="\berber\prje\public\frontend\vendor\bootstrap\css\bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="\berber\prje\public\frontend\css/modern-business.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark  fixed-top navigasyon" >
    <div class="container">
        <a class="navbar-brand logo" href="{{route('home.Index')}}">E-Berberim</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navkapsayıcı" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item hover-Devredısı">
                    <a class="nav-link" href="{{route('home.Index')}}">Anasayfa</a>
                </li>

                <li class="nav-item hover-Devredısı">
                    <a class="nav-link" href="{{route('blog.Index')}}">Blog</a>
                </li>

                <li class="nav-item hover-Devredısı">
                    <a class="nav-link" href="../public/page/{{$slug}}">Sayfalar</a>
                </li>

                <li class="nav-item hover-Devredısı">
                    <a class="nav-link" href="{{route('contact.Detail')}}">Bize Ulaşın</a>
                </li>
                <li class="cusdüg1">
                    <a>Berber Giriş</a>
                </li>
            </ul>
        </div>
    </div>
<<<<<<< HEAD
    <cusdüg1 class="m-5">
     
        <a href="{{route('admin.Login')}}">Berber Giriş</a>
    </cusdüg1>
=======

>>>>>>> 4a19b65a8924fa1368b4a6ba0c56a334867b5947
</nav>
<div style="margin-bottom: 40px"></div>

@yield('content')
<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">{{$footer}}</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="\berber\prje\public\frontend\vendor/jquery/jquery.min.js"></script>
<script src="\berber\prje\public\frontend\vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
