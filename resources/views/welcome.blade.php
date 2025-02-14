<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kitchen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Signika+Negative:wght@300..700&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">Kitchen</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Produk</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Cara Pemesanan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Testimoni</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Artikel</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Hubungi Kami</a></li>
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a></li>
                            @else
                                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!-- Carousel -->
        <section id="home">
            <div class="carousel-container">
                <div class="row">
                    <div class="col-md-8">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade">
                            <div class="carousel-inner">
                                @foreach($images as $index => $image)
                                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                        <img src="{{ $image['urls']['regular'] }}&w=1920&h=800" class="d-block w-100" style="max-height: 700px; object-fit: cover; alt="Gambar dari Unsplash">
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="content-wrapper">
                            <h1 class="content-title">Suplai Bahan Makanan Segar dan Berkualitas untuk Bisnis Anda</h1>
                            <p class="content-description">
                                Kami menyediakan berbagai bahan makanan berkualitas tinggi yang siap mendukung bisnis Anda, baik itu restoran, rumah sakit, atau usaha katering. Dengan komitmen untuk selalu menyuplai produk segar dan terjamin, kami memastikan keperluan dapur Anda terpenuhi dengan sempurna. Temukan solusi suplai yang tepat dan mudah hanya dengan satu klik.
                            </p>
                            <div class="button-group">
                                <a href="#" class="btn btn-color-primary btn-lg">Pesan</a>
                                <a href="#" class="btn btn-color-secondary btn-lg">Jelajahi Produk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Carousel -->

        <section id="about" class="about color-primary">
            <div class="container">
                <div class="row title-section">
                    <div class="col-md-12">
                        <h2 class="text-center">Tentang Kami</h2>
                    </div>
                </div>

                <div class="row section-content">
                    <div class="col-md-6">
                        @if($about)
                            <img src="{{ $about['urls']['regular'] }}&w=1920&h=800" class="d-block w-100 img-about" style="max-height: 700px; object-fit: cover;" alt="gambar suplier">
                        @else
                            <p>Gambar tidak tersedia</p>
                        @endif

                    </div>
                    <div class="col-md-6">
                        <h3 class="">
                            Suplai Bahan Makanan Terpercaya untuk Berbagai Industri
                        </h3>
                        <p class="content-description">
                            Kami hadir sebagai solusi utama dalam penyediaan bahan makanan segar dan berkualitas untuk berbagai bisnis,
                            mulai dari restoran, rumah sakit, hingga katering. Dengan sistem distribusi yang efisien dan standar kualitas tinggi, 
                            kami memastikan setiap pelanggan mendapatkan suplai terbaik yang sesuai dengan kebutuhan mereka.
                        </p>
                        <h3 class="">
                            Dedikasi Kami untuk Kualitas dan Keandalan
                        </h3>
                        <p class="content-description">
                            Sebagai mitra terpercaya dalam penyediaan bahan makanan, kami berfokus pada kualitas, keandalan, dan kepuasan pelanggan. Dengan pengalaman lebih dari 10 tahun, 
                            kami telah menjadi penyedia utama untuk berbagai sektor, memastikan setiap produk yang kami suplai memenuhi standar kualitas tertinggi.
                            <br>
                            <strong>Apa yang Membuat Kami Berbeda?</strong>
                            <ul>
                                <li><strong>Pengalaman dan Kepercayaan</strong> Lebih dari satu dekade melayani berbagai bisnis dengan produk berkualitas.</li>
                                <li><strong>Produk Berkualitas Tinggi</strong> Semua bahan makanan dipilih secara teliti dan melalui proses kontrol kualitas ketat.</li>
                                <li><strong>Distribusi Efisien</strong> Jaringan pengiriman luas dengan sistem logistik yang memastikan ketepatan waktu dan kesegaran produk.</li>
                                <li><strong>Komitmen pada Pelanggan</strong> Tim kami siap memberikan solusi terbaik sesuai kebutuhan bisnis Anda.</li>
                            </ul>
                        </p>

                        <p class="content-description">
                            Kami berkomitmen untuk menjadi penyedia bahan makanan yang tidak hanya mengirimkan produk, tetapi juga mendukung kesuksesan bisnis Anda dengan suplai yang handal dan berkualitas tinggi.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="produk" class="produk">
            <div class="container">
                <div class="row title-section">
                    <div class="col-md-12">
                        <h2 class="text-center title-white">Produk dan Layanan</h2>
                        <p class="content-description text-center">
                            Kami menawarkan berbagai macam produk yang memenuhi standar kualitas tinggi, mulai dari sayuran segar, daging premium, bumbu dapur, hingga bahan baku khusus untuk bisnis kuliner. 
                            Semua produk kami dipilih dengan teliti, langsung dari petani atau pemasok terkemuka, untuk memastikan Anda mendapatkan bahan terbaik setiap saat.
                        </p>
                    </div>
                </div>

                <div class="row">
                    @php
                        $defaultImage = 'https://via.placeholder.com/600x150?text=No+Image';
                    @endphp

                    <div class="col-md-3">
                        <div class="card layanan" style="width: 18rem;">
                            <img src="{{ $meat['urls']['regular'] ?? $defaultImage }}&w=600&h=150" 
                                class="card-img-top" style="max-height: 200px; object-fit: cover;" 
                                alt="gambar meat">
                            <div class="card-body layanan-body">
                                <h5 class="card-title">Daging Berkualitas</h5>
                                <p class="card-text">Daging premium, higienis, dan bercita rasa terbaik.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card layanan" style="width: 18rem;">
                            <img src="{{ $vegetable['urls']['regular'] ?? $defaultImage }}&w=600&h=150" 
                                class="card-img-top" style="max-height: 200px; object-fit: cover;" 
                                alt="gambar vegetable">
                            <div class="card-body layanan-body">
                                <h5 class="card-title">Sayur Mayur Segar </h5>
                                <p class="card-text">Sayuran pilihan, segar, dan bernutrisi langsung dari petani.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card layanan" style="width: 18rem;">
                            <img src="{{ $herb['urls']['regular'] ?? $defaultImage }}&w=600&h=150" 
                                class="card-img-top" style="max-height: 200px; object-fit: cover;" 
                                alt="gambar herb">
                            <div class="card-body layanan-body">
                                <h5 class="card-title">Bumbu Dapur Pilihan </h5>
                                <p class="card-text">Rempah asli dan bumbu olahan untuk cita rasa sempurna.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card layanan" style="width: 18rem;">
                            <img src="{{ $healty['urls']['regular'] ?? $defaultImage }}&w=600&h=150" 
                                class="card-img-top" style="max-height: 200px; object-fit: cover;" 
                                alt="gambar healthy">
                            <div class="card-body layanan-body">
                                <h5 class="card-title">Produk Spesial</h5>
                                <p class="card-text">Bahan musiman dan khusus untuk berbagai kebutuhan industri.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>