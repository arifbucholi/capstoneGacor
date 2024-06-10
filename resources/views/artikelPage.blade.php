<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customLanding.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customArtikel.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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

    <!-- Artikel Section -->
    <section class="artikel">
        <div class="container">
            <h1>Artikel Terbaru Laweyan</h1>
            <p>Lorem ipsum dolor sit amet consectetur. Arcu sed habitasse nibh proin sit interdum curabitur ac. Morbi cras eget duis</p>
            <div class="artikel-header">
                <div class="artikel-item">
                    <img src="img/artikel1.jpg" alt="Artikel 1">
                    <p>Lorem ipsum dolor sit amet consectetur. Arcu sed habitasse nibh proin sit interdum curabitur ac. Morbi cras eget duis</p>
                </div>
                <div class="artikel-item">
                    <img src="img/artikel2.jpg" alt="Artikel 2">
                    <p>Lorem ipsum dolor sit amet consectetur. Arcu sed habitasse nibh proin sit interdum curabitur ac. Morbi cras eget duis</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Artikel List Section -->
    <section class="artikel-list">
        <div class="container">
            <h2>Artikel Terbaru</h2>
            <div class="artikel-items">
                <!-- Artikel Item -->
                <div class="artikel-item">
                    <img src="img/artikel3.jpg" alt="Artikel 3">
                    <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                    <p>2 Juni 2024 | 14:00</p>
                    <p>Lorem ipsum dolor sit amet consectetur. Massa portti</p>
                </div>
                <!-- Ulangi untuk artikel lain -->
                <div class="artikel-item">
                    <img src="img/artikel4.jpg" alt="Artikel 4">
                    <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                    <p>2 Juni 2024 | 14:00</p>
                    <p>Lorem ipsum dolor sit amet consectetur. Massa portti</p>
                </div>
                <div class="artikel-item">
                    <img src="img/artikel5.jpg" alt="Artikel 5">
                    <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                    <p>2 Juni 2024 | 14:00</p>
                    <p>Lorem ipsum dolor sit amet consectetur. Massa portti</p>
                </div>
                <div class="artikel-item">
                    <img src="img/artikel6.jpg" alt="Artikel 6">
                    <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                    <p>2 Juni 2024 | 14:00</p>
                    <p>Lorem ipsum dolor sit amet consectetur. Massa portti</p>
                </div>
            </div>
            <div class="pagination">
                <a href="#" class="pagination-link">1</a>
                <a href="#" class="pagination-link active">2</a>
                <a href="#" class="pagination-link">3</a>
                <a href="#" class="pagination-link">4</a>
                <span class="pagination-dots">...</span>
                <a href="#" class="pagination-link">10</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container footer-top">
            <div class="footer-column footer-contact">
                <h3>Batik Wonderland Laweyan</h3>
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
                <div class="mitra-logos">
                    <img src="img/mitra1.png" alt="Mitra 1">
                    <img src="img/mitra2.png" alt="Mitra 2">
                    <img src="img/mitra3.png" alt="Mitra 3">
                    <img src="img/mitra4.png" alt="Mitra 4">
                    <img src="img/mitra5.png" alt="Mitra 5">
                </div>
            </div>
            <div class="footer-column footer-contact">
                <h3>Layanan Kontak Kami</h3>
                <p>+62 859 8989 999</p>
                <p>Senin - Jumat: 9:00 - 20:00</p>
                <p>Sabtu: 11:00 - 15:00</p>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="container footer-bottom">
            <p>&copy; 2024 Batik Wonderland Laweyan. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
