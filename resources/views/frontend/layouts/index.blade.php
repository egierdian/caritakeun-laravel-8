<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Caritakeun</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <!-- Aos -->
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <!-- fa -->
    <link rel="stylesheet" href="{{asset('css/font-awesome/fontawesome.min.css')}}">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;600;700&display=swap" rel="stylesheet">

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h4>CARITAKEUN</h4>
            </a>
            <button class="navbar-toggler" style="border:none;margin-top: -5px;" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fa fa-bars" style="color:#000;"></i></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarText">
                <ul class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="#">
                        <h5>Novel</h5>
                    </a>
                    <a class="nav-item nav-link" href="#">
                        <h5>Komik</h5>
                    </a>
                    <a class="nav-item nav-link" href="#">
                        <h5>Cerpen</h5>
                    </a>
                    <a class="nav-item nav-link" href="#">
                        <h5>Jurnal</h5>
                    </a>
                </ul>
                <ul class="navbar-nav mr-auto">
                </ul>
                <div class="justify-content-end">
                    <?php if (Auth::check()) : ?>
                    <a href="{{route('dashboard')}}" class="nav-item nav-link btn custom-button-signin">    
                        <h5>Dashboard</h5>
                    </a>
                    <?php else : ?>
                    <a href="{{route('login')}}" class="nav-item nav-link btn custom-button-signin">    
                        <h5>Masuk</h5>
                    </a>
                    <?php endif; ?>
                    
                </div>

            </div>
        </div>
    </nav>
    <!-- end navbar -->

    @yield('content')

    <!-- footer -->
    <div class="custom-footer">
        <div class="container pt-4 pb-4">
            <div class="row">
                <div class="col-md-11 col-s-12">
                    <p>
                        Caritakeun adalah layanan situs web yang memungkinkan penggunanya untuk membaca ataupun
                        mengirimkan karya dalam bentuk artikel, cerita pendek, novel, puisi, atau sejenisnya.
                    </p>
                    <p> <span style="font-weight: 600;">Harta Tahta Cerita</span>
                        <br>
                        @Egi Erdian
                    </p>
                </div>
                <div class="col-md-1 col-s-12 message">
                    <img src="{{asset('images/message.jpg')}}" width="50" height="50">
                </div>
            </div>
        </div>
    </div>
    <!-- end -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="{{asset('js/font-awesome/all.js')}}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>