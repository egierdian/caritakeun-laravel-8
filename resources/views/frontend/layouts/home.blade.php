@extends('frontend.layouts.index')

@section('content')
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
                <a href="/login" class="btn custom-button-jumbotron">
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

<!-- contents -->'
<div class="custom-content">
    <div class="container">
        <h2>Cerita Terpublikasi</h2>
        <div class="row">
            @foreach($data as $row)
            <div class="col-12 pb-3">
                <a href="">
                <div class="card custom-card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $row->title}}</h5>
                        <span class="badge badge-primary">{{ $row->creator }}</span>
                        <span class="badge badge-info">{{ $row->category }}</span>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
            {!! $data->links() !!}
        </div>
    </div>
</div>
<!-- end-contents -->

<!-- write-story -->
<div class="custom-write-story">
    <div class="container">
        <h1>Tulis Ceritamu</h1>
        <div class="row custom-card-partner">
            <div class="col-md-4 col-lg-4 col-sm-12 pb-2 pt-2">
                <div data-aos="fade-up" data-aos-duration="3000">
                    <div class="card custom-card">
                        <img class="card-img-top custom-img" src="{{asset('images/undraw_mobile_login_ikmv.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">1. Masuk/Daftar</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 pb-2 pt-2">
                <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="2000">
                    <div class="card custom-card">
                        <img class="card-img-top custom-img" src="{{asset('images/undraw_typewriter_i8xd.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">2. Tulis Cerita</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 pb-2 pt-2">
                <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="3000">
                    <div class="card custom-card">
                        <img class="card-img-top custom-img" src="{{asset('images/undraw_publish_post_vowb.png')}}" alt="Card image cap">
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
            <h1 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="2000" class="pb-2 ml-3">Benefit</h1>
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
@endsection