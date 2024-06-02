<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customLanding.css') }}">
</head>
<body>
    <!-- Navigation -->
    <nav id="navbar" class="navbar">
        <div class="container">
            <div class="navbar-left">
                <a href="#" class="logo"><img src="img/logo.png" alt="Logo"></a>
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="/product">Product</a></li>
                    <li><a href="#">Article</a></li>
                </ul>
            </div>
            <div class="navbar-right">
                <form class="search-form">
                    <input type="text" placeholder="Search">
                </form>
                <ul class="nav-links">
                    <li><a href="/login">Login</a></li>
                    <li><a href="#">Cart</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" style="background-image: url('img/hero.jpg');">
        <div class="hero-overlay" style="background: rgba(0, 0, 0, 0.1)">
            <div class="hero-text">
            </div>
        </div>
    </section>
    <section class="hero-section" style="background-image: url('img/batik.jpg');">
        <div class="hero-overlay">
            <div class="hero-text">
                <h1>"Amba Nitik"</h1>
                <p>Secara etimologi kata batik berasal dari kata 'amba' yang berarti menulis dan 'nitik' yang berarti titik. Seperti seni lukis, seni batik adalah sebuah proses penambahan warna pada kain dengan cara perintang warna menggunakan bahan lilin yang diproses sedemikian rupa.</p>
            </div>
        </div>
    </section>

    <!-- Product Section -->
    <section class="product-section">
        <div class="container">
            <h2>Lineup Garment Product</h2>
            <div class="products-grid">
                <div class="product-card">
                    <img src="{{ asset('img/baju1.jpg') }}" alt="Product 1">
                    <div class="product-info">
                        <h3>Batik Batikan</h3>
                        <p>Rating: ★★★★☆</p>
                        <p>Terjual: 50</p>
                        <p>Rp.99.999</p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="{{ asset('img/baju2.jpg') }}" alt="Product 2">
                    <div class="product-info">
                        <h3>Batik Asli</h3>
                        <p>Rating: ★★★☆☆</p>
                        <p>Terjual: 30</p>
                        <p>Rp.89.999</p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="{{ asset('img/baju3.jpg') }}" alt="Product 3">
                    <div class="product-info">
                        <h3>Batik Palsu</h3>
                        <p>Rating: ★★★★★</p>
                        <p>Terjual: 70</p>
                        <p>Rp.109.999</p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="{{ asset('img/baju4.jpg') }}" alt="Product 4">
                    <div class="product-info">
                        <h3>Batik Abstrak</h3>
                        <p>Rating: ★★★★☆</p>
                        <p>Terjual: 45</p>
                        <p>Rp.95.999</p>
                    </div>
                </div>
            </div>
            <a href="/product" class="btn-more">More</a>
        </div>
    </section>

<!-- Testimonial Section -->
<section class="testimonial-section">
    <div class="container">
        <h2>TESTIMONIAL</h2>
        <h3>Mereka yang telah berkunjung ke Laweyan</h3>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-rating">
                    &#9733;&#9733;&#9733;&#9733;&#9733;
                </div>
                <p class="testimonial-quote">"Lorem ipsum dolor sit amet consectetur. diam pellentesque feugiat accumsan lorem mauris. Vestibulum rhoncus"</p>
                <img src="img/testimonial1.jpg" alt="Intan Kurnia Safitri">
                <h4>Intan Kurnia Safitri</h4>
                <p class="testimonial-role">Mahasiswa</p>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-rating">
                    &#9733;&#9733;&#9733;&#9733;&#9733;
                </div>
                <p class="testimonial-quote">"Lorem ipsum dolor sit amet consectetur. diam pellentesque feugiat accumsan lorem mauris. Vestibulum rhoncus"</p>
                <img src="img/testimonial2.jpg" alt="Roby Syahrul Abdullah">
                <h4>Roby Syahrul Abdullah</h4>
                <p class="testimonial-role">Direktur PT. Serba Bisa</p>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-rating">
                    &#9733;&#9733;&#9733;&#9733;&#9733;
                </div>
                <p class="testimonial-quote">"Lorem ipsum dolor sit amet consectetur. diam pellentesque feugiat accumsan lorem mauris. Vestibulum rhoncus"</p>
                <img src="img/testimonial3.jpg" alt="Ana Siti Permatasari">
                <h4>Ana Siti Permatasari</h4>
                <p class="testimonial-role">Pengusaha Ayam</p>
            </div>
        </div>
        <div class="testimonial-pagination">
            <a href="#">&larr;</a>
            <span>1/3</span>
            <a href="#">&rarr;</a>
        </div>
    </div>
</section>

<!-- Media Partner Section -->
<section class="media-partner-section">
    <div class="container">
        <h2>MEDIA PARTNER</h2>
        <h3>Dipublikasikan oleh Media Internasional dan Nasional</h3>
        <div class="media-logos">
            <img src="img/cnn.png" alt="CNN">
            <img src="img/bbc.png" alt="BBC">
            <img src="img/afc.png" alt="AFC">
            <img src="img/discovery.png" alt="Discovery">
            <img src="img/aljazeera.png" alt="Al Jazeera">
            <img src="img/transtv.png" alt="Trans TV">
            <img src="img/trans7.png" alt="Trans 7">
            <img src="img/sctv.png" alt="SCTV">
            <img src="img/rcti.png" alt="RCTI">
            <img src="img/net.png" alt="NET">
            <img src="img/metrotv.png" alt="Metro TV">
            <img src="img/tvri.png" alt="TVRI">
            <img src="img/tvone.png" alt="TV One">
            <img src="img/kompas.png" alt="Kompas">
            <img src="img/indosiar.png" alt="Indosiar">
            <img src="img/antv.png" alt="ANTV">
        </div>
    </div>
</section>


<!-- Promo Section -->
<section class="promo-section" >
    <div class="container" style="background:rgba(0, 0, 0, 0.75);">
        <h2>Promo Akhir Tahun Laweyan</h2>
        <p>Dapatkan diskon 50% untuk pembelian online</p>
        <a href="#" class="btn-get-promo">Beli Sekarang</a>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container footer-top">
        <div class="footer-column footer-contact">
            <img src="img/logo2.png" alt="Logo">
            <p>Lorem ipsum dolor sit amet consectetur. diam pellentesque feugiat accumsan lorem mauris. Vestibulum rhoncus</p>
        </div>
        <div class="footer-column">
            <h3>Produk</h3>
            <ul>
                <li><a href="#">Batik Wanita</a></li>
                <li><a href="#">Batik Pria</a></li>
                <li><a href="#">Batik Anak-anak</a></li>
                <li><a href="#">Batik Keluarga</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Bantuan</h3>
            <ul>
                <li><a href="#">Syarat dan Ketentuan</a></li>
                <li><a href="#">Pertanyaan (FAQ)</a></li>
                <li><a href="#">Cara Belanja</a></li>
                <li><a href="#">Customer Service</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Mitra Kami</h3>
            <img src="img/mitra1.png" alt="Mitra 1">
            <img src="img/mitra2.png" alt="Mitra 2">
            <img src="img/mitra3.png" alt="Mitra 3">
        </div>
        <div class="footer-column footer-contact">
            <h3>Layanan Kontak Kami</h3>
            <p>+62 859 8989 999</p>
            <p>Senin - Jumat: 9:00 - 20:00</p>
            <p>Sabtu: 11:00 - 15:00</p>
        </div>
    </div>
    <div class="container footer-bottom">
        <p>&copy; 2024 Batik Wonderland Laweyan. All Rights Reserved.</p>
    </div>
</footer>



    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
