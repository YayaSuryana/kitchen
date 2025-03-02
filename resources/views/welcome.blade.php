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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
                        <li class="nav-item"><a class="nav-link active" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#produk">Produk</a></li>
                        <li class="nav-item"><a class="nav-link" href="#pemesanan">Cara Pemesanan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#testimoni">Testimoni</a></li>
                        <li class="nav-item"><a class="nav-link" href="#article">Artikel</a></li>
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
                    <div class="col-md-6">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade">
                            <div class="carousel-inner">
                                @foreach($carousels as $index => $about)
                                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                        <img src="{{ asset('storage/'.$about->image) }}" 
                                            class="d-block w-100 img-fluid" 
                                            style="max-height: 700px; object-fit: cover; border-radius: 5px;" 
                                            alt="{{ $about->title }}">
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
                    <div class="col-md-6">
                        <div class="content-wrapper">
                            <h1 class="content-title">Suplai Bahan Makanan Segar dan Berkualitas untuk Bisnis Anda</h1>
                            <p class="content-description">
                                Kami menyediakan berbagai bahan makanan berkualitas tinggi yang siap mendukung bisnis Anda, baik itu restoran, rumah sakit, atau usaha katering. Dengan komitmen untuk selalu menyuplai produk segar dan terjamin, kami memastikan keperluan dapur Anda terpenuhi dengan sempurna. Temukan solusi suplai yang tepat dan mudah hanya dengan satu klik.
                            </p>
                            <div class="button-group">
                                <a href="https://wa.me/+6289636003291?text=Terima%20kasih%20telah%20mempercayakan%20persediaan%20bisnis%20Anda%20kepada%20kami.%0A%0AProduk%20yang%20dipesan%20:%20%0AAlamat%20Penerima%20:%20%0AMetode%20Pembayaran%20:%20%0ANo.%20Hp%20Penerima%20:%20" class="btn btn-color-primary btn-lg">Pesan</a>
                                <a href="#produk" class="btn btn-color-secondary btn-lg">Jelajahi Produk</a>
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
                        <img src="{{asset('assets/img/landing/about2.jpg')}}" class="d-block w-100 img-about" style="max-height: 700px; object-fit: cover;" alt="gambar suplier">
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
                    @foreach($products as $product)
                        <div class="col-md-3 col-sm-12 mt-4 d-flex justify-content-center">
                            <div class="card layanan" style="width: 18rem;">
                                <img src="{{ asset('storage/' . $product->image) }}" 
                                    class="card-img-top" style="max-height: 200px; object-fit: cover;" 
                                    alt="gambar {{ $product->name }}">
                                <div class="card-body layanan-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ $product->description }}</p>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </section>

        <section class="pemesanan color-primary" id="pemesanan">
            <div class="container">
                <div class="row title-section">
                    <div class="col-md-12">
                        <h2 class="text-center">Cara Pemesanan</h2>
                        <p class="content-description text-center">
                            Pesan bahan makanan segar dengan mudah! Cukup pilih produk, konfirmasi pesanan, dan kami akan mengirimkannya langsung ke lokasi Anda.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="order-steps">
                        <div class="steps-container">
                            <div class="step">
                                <i class="fas fa-shopping-cart"></i>
                                <p>Pilih Produk</p>
                            </div>
                            <div class="step">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>Sesuaikan Alamat</p>
                            </div>
                            <div class="step">
                                <i class="fas fa-credit-card"></i>
                                <p>Bayar</p>
                            </div>
                            <div class="step">
                                <i class="fas fa-truck"></i>
                                <p>Kirim</p>
                            </div>
                        </div>

                        <a href="https://wa.me/+6289636003291?text=Terima%20kasih%20telah%20mempercayakan%20persediaan%20bisnis%20Anda%20kepada%20kami.%0A%0AProduk%20yang%20dipesan%20:%20%0AAlamat%20Penerima%20:%20%0AMetode%20Pembayaran%20:%20%0ANo.%20Hp%20Penerima%20:%20"
                            class="whatsapp-btn">
                            Pesan Sekarang via WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimoni" id="testimoni">
            <div class="container">
                <div class="row title-section">
                    <div class="col-md-12">
                        <h2 class="text-right">Testimoni</h2>
                    </div>
                </div>

                <div class="row">
                    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($testimonies as $index => $testimoni)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <div class="row align-items-center">
                                    

                                    <!-- Isi Testimoni -->
                                    <div class="col-md-8 position-relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="32" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                                            <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z"/>
                                        </svg>
                                        <h3 class="text-secondary mt-4 text-right">{{ $testimoni->description }}</h3>
                                        <hr>

                                        <!-- Navigasi Carousel di Samping Nama -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <button class="carousel-control-prev position-static" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            </button>
                                            
                                            <h6 class="m-0">{{ $testimoni->name }}</h6>
                                            
                                            <button class="carousel-control-next position-static" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Gambar Testimoni -->
                                    <div class="col-md-4 text-center">
                                        <img src="{{ asset('storage/' . $testimoni->image) }}" 
                                            alt="{{ $testimoni->name }}" 
                                            class="img-thumbnail w-100" 
                                            style="max-height: 400px; object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
            
        </section>

        <section class="article" id="article">
            <div class="container">
                <div class="row title-section">
                    <div class="col-md-12">
                        <h2 class="text-center title-white">article</h2>
                    </div>
                </div>

                <div class="row">
                    @foreach($articles as $article)
                        <div class="col-md-3 col-sm-12 mt-4 d-flex justify-content-center">
                            <div class="card layanan" style="width: 18rem;">
                                <img src="{{ asset('storage/' . $article->image) }}" 
                                    class="card-img-top" style="max-height: 200px; object-fit: cover;" 
                                    alt="gambar {{ $article->title }}">
                                <div class="card-body layanan-body">
                                    <h5 class="card-title">{{ $article->title }}</h5>
                                    <a href="{{route('articles.show', $article->id)}}" class="card-text btn btn-sm btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-md-12 text-center">
                        <a href="{{route('all.articles')}}" target="_blank" class="btn btn-md btn-color-primary mt-3">
                            Lihat Semua
                        </a>
                    </div>
                </div>
            </div>
            
        </section>
        <a href="https://wa.me/+6289636003291?text=Terima%20kasih%20telah%20mempercayakan%20persediaan%20bisnis%20Anda%20kepada%20kami.%0A%0AProduk%20yang%20dipesan%20:%20%0AAlamat%20Penerima%20:%20%0AMetode%20Pembayaran%20:%20%0ANo.%20Hp%20Penerima%20:%20" class="wa-button" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </main>
    
    
    <footer class="color-primary text-center py-3">
        <p>&copy; 2025 Kitchen. All Rights Reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>