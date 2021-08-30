@extends('template')

@section('content')
    {{-- section pertama --}}
    <div class="jumbotron jumbotron-fluid">
        <div class="container py-1">
            <div class="row justify-content-evenly">
                <div class="col-lg-7">
                    <h2 class="pb-4" style="color: white">Dare to try</h2>
                    <p style="color: white">
                    Belajar Ngomong Bahasa Asing Lebih Mudah dan Daily Tips Bahasa Asing 
                    </p>
                    <p style="color: white">Supported BY BIBITBAHASA.</p>
                    <a class="btn btn-outline-light btn-lg" href="">Daftar Program</a>
                </div>
                <div class="col-lg-5">
                    <img class="img-fluid" src="img/home.png" width="500">
                </div>
            </div>
        </div>
    </div>

    {{-- section kedua --}}
    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-md-4">
                <h2 class="animated_animated animate_bounceInDown">2000+</h2>
                <p>Jumlah pengikut di Instagram saat ini</p>
            </div>
            <div class="col-md-4">
                <h2 class="animated_animated animate_bounceInDown">Kelas Bahasa</h2>
                <p>Memiliki Pengajaran bahasa inggris dan jepang</p>
            </div>
            <div class="col-md-4">
                <h2 class="animated_animated animate_bounceInDown">Mini course</h2>
                <p>Memiliki Pengajaran yang dapat dimengerti oleh berbagai kalangan</p>
            </div>
        </div>
    </div>

    {{-- section ketiga --}}
    <div class="jumbotron jumbotron-fluid">
        <center>
            <img class="img-fluid" src="img/tengah.png" width="500">
        </center>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="pb-4" style="color: white">Kelas Bahasa Inggris</h2>
                    <h2 class="pb-4" style="color: white">Kelas Bahasa Jepang</h2>
                    <h2 class="pb-4" style="color: white">Kelas Bahasa Korea</h2>
                    <a class="btn btn-outline-light btn-lg" href="">Yuk Daftar !</a>
                </div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    <footer>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col text-center">
                    <h2 style="color: white">Hubungi Kami</h2>
                    <a href="https://instagram.com/daretotry_id?utm_medium=copy_link"><i class="bi bi-instagram h1"></i></a>
                    <span class="h4" style="color: white">atau</span>
                    <a href="https://t.me/daretotry_id"><i class="bi bi-telegram h1"></i></a>
                </div>
            </div>
        </div>
    </footer>
@endsection