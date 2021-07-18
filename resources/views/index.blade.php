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
            <button class="navbar-toggler" style="border:none;margin-top: -5px;" type="button" data-toggle="collapse"
                data-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                aria-label="Toggle navigation">
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
                    <a class="nav-item nav-link btn custom-button-signin">
                        <h5>Masuk</h5>
                    </a>
                </div>

            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- jumbotron -->
    <div class="container custom-jumbotron mt-2 mb-5">
        <div class="row d-flex custom-section align-items-center">
            <div class="col-md-6 custom-heading-jumbotron pt-2 pb-3">
                <div class="content-jumbotron">
                    <h1 style="font-weight: 700;">Ceritakan Apa yang Ingin Kamu Ungkapkan</h1>
                    <p>Baca atau tulis ceritamu sendiri.</p>
                    <!-- <a class="btn custom-button-jumbotron">
                        <h5>Mulai Membaca</h5>
                    </a> -->
                    <a class="btn custom-button-jumbotron">
                        <h5>Mulai Menulis</h5>
                    </a>
                </div>
            </div>
            <div class="col-md-6 order-first order-md-last pb-3">
                <img class="img-fluid " src="{{asset('images/undraw_book_lover_mkck.svg')}}">
            </div>
        </div>
    </div>
    <!-- end jumbotron -->

    <!-- partner -->
    <div class="custom-partner">
        <div class="container">
            <div class="row custom-card-partner">
                <div class="col-md-4 col-lg-4 col-sm-12 pb-2 pt-2 custom-partner-row">
                    <h2>Gramedia</h2>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 pb-2 pt-2 custom-partner-row">
                    <h2>WikiBook</h2>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 pb-2 pt-2 custom-partner-row">
                    <h2>BooksBooks</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- end partner -->

    <!-- write-story -->
    <div class="custom-write-story">
        <div class="container">
            <h1>Tulis Ceritamu</h1>
            <div class="row custom-card-partner">
                <div class="col-md-4 col-lg-4 col-sm-12 pb-2 pt-2">
                    <div data-aos="fade-up" data-aos-duration="3000">
                        <div class="card custom-card">
                            <img class="card-img-top custom-img" src="{{asset('images/undraw_mobile_login_ikmv.png')}}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">1. Masuk/Daftar</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 pb-2 pt-2">
                    <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="2000">
                        <div class="card custom-card">
                            <img class="card-img-top custom-img" src="{{asset('images/undraw_typewriter_i8xd.png')}}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">2. Tulis Cerita</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 pb-2 pt-2">
                    <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="3000">
                        <div class="card custom-card">
                            <img class="card-img-top custom-img" src="{{asset('images/undraw_publish_post_vowb.png')}}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">3. Terbitkan</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- benefit -->
    <div class="custom-benefit">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-2 pb-2">
                    <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="2000">
                        <div class="card custom-card">
                            <div class="custom-button">
                                <h1 class="display-3">1</h1>
                            </div>
                            <div class="card-body custom-card-body">
                                <h5>Cerita yang kamu tulis di Publis secara luas</h5>
                                <p>Caritakeun menemukan penulis-penulis yang tak dikenal, belum dikontrak, tetapi
                                    berbakat di Wattpad dan menghubungkan mereka dengan perusahaan hiburan multimedia
                                    global.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 pt-2 pb-2">
                    <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="2000">
                        <div class="card custom-card">
                            <div class="custom-button">
                                <h1 class="display-3">2</h1>
                            </div>
                            <div class="card-body custom-card-body">
                                <h5>Cerita yang kamu tulis juga berkesempatan untuk diterbitkan menjadi Buku</h5>
                                <p>Caritakeun Books bercita-cita untuk mengenali dan mewakili suara-suara yang beragam
                                    dengan mengubah cerita Caritakeun menjadi buku yang diterbitkan di seluruh dunia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->

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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="{{asset('js/font-awesome/all.js')}}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>