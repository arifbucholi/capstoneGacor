<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <h2>Join Our Newsletter</h2>
            <form class="newsletter-form">
                <input type="email" placeholder="Enter your email" required>
                <button type="submit">Submit</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container clearfix">
            <div>
                <img src="img/logo.png" alt="Logo">
                <p>WhatsApp: +62 859 8989 999</p>
                <p>Email: hello@batik.com</p>
                <p>Address: Lorem ipsum street Block B Number 08, Jakarta, Indonesia, 12345</p>
            </div>
            <div>
                <h3>Menu</h3>
                <ul>
                    <li><a href="#">Sale</a></li>
                    <li><a href="#">New Arrivals</a></li>
                    <li><a href="#">Formal Men</a></li>
                    <li><a href="#">Formal Women</a></li>
                    <li><a href="#">Casual Men</a></li>
                    <li><a href="#">Casual Women</a></li>
                </ul>
            </div>
            <div>
                <h3>Get Help</h3>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Customer Service</a></li>
                    <li><a href="#">Refund and Return</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Shipping</a></li>
                </ul>
            </div>
            <div>
                <h3>Account</h3>
                <ul>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">My Orders</a></li>
                    <li><a href="#">Vouchers and Discounts</a></li>
                </ul>
            </div>
        </div>
        <br><br>
        <div class="copyright">
            <p>&copy; 2024 Batik Wonderland Laweyan</p>
        </div>
    </footer>

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
