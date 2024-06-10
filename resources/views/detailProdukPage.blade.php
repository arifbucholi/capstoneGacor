<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customLanding.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customProduk.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customDetailProduk.css') }}">
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

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <div class="container">
            <a href="#">Beranda</a> > <a href="#">Produk</a> > <span>Detail Produk</span>
        </div>
    </section>

    <!-- Product Detail Section -->
    <section class="product-detail">
        <div class="container">
            <div class="product-detail-content">
                <div class="product-images">
                    <img src="img/batik1.png" alt="Batik Sogan Blus Salur Wanita" class="main-image">
                    <div class="thumbnail-images">
                        <img src="img/batik1.png" alt="Batik Sogan Blus Salur Wanita">
                        <img src="img/batik1.png" alt="Batik Sogan Blus Salur Wanita">
                        <img src="img/batik1.png" alt="Batik Sogan Blus Salur Wanita">
                    </div>
                </div>
                <div class="product-info">
                    <h1>BSB101_Batik Sogan Laweyan Blus Salur Wanita</h1>
                    <div class="rating">
                        <span class="star">★</span>
                        <span class="rating-value">4.8</span>
                        <span class="reviews">| 77 Penilaian | 124 Terjual</span>
                    </div>
                    <div class="price">
                        <span class="current-price">Rp.490.000</span>
                        <span class="original-price">Rp.980.000</span>
                        <span class="discount">50%</span>
                    </div>
                    <p class="description">Lorem ipsum dolor sit amet consectetur. Ultricies platea tristique montes blandit. Admet mattis orci malesuada faucibus nisl vestibulum hac. Netus commodo gravida odio vitae nunc scelerisque sed nec dui. Nunc.</p>
                    <div class="product-details">
                        <h3>Detail Produk</h3>
                        <ul>
                            <li>Material: Katun Laweyan</li>
                            <li>Jenis Pakaian: Wanita</li>
                            <li>Nama Brand: Marin Laweyan</li>
                            <li>Code Brand: BSB101</li>
                        </ul>
                    </div>
                    <div class="size-selection">
                        <h3>Pilih Ukuran</h3>
                        <div class="sizes">
                            <label><input type="radio" name="size" value="S"> Small (S)</label>
                            <label><input type="radio" name="size" value="M"> Medium (M)</label>
                            <label><input type="radio" name="size" value="L"> Large (L)</label>
                            <label><input type="radio" name="size" value="XL"> Extra Large (XL)</label>
                            <label><input type="radio" name="size" value="XXL"> Double Extra Large (XXL)</label>
                        </div>
                        <a href="#" class="size-guide">Panduan Ukuran →</a>
                    </div>
                    <div class="quantity-selection">
                        <h3>Kuantity</h3>
                        <div class="quantity">
                            <button class="quantity-button">-</button>
                            <input type="number" value="1" min="1">
                            <button class="quantity-button">+</button>
                            <span>Stock : 30 tersisa</span>
                        </div>
                    </div>
                    <div class="purchase-buttons">
                        <button class="buy-now">Beli Sekarang</button>
                        <button class="add-to-cart">Masukkan Keranjang</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="reviews">
        <div class="container">
            <h2>Penilaian Produk Oleh Pembeli</h2>
            <div class="review-summary">
                <div class="average-rating">
                    <span class="rating-value">4.8</span>
                    <span>dari 5.0</span>
                </div>
                <div class="rating-breakdown">
                    <div class="rating-bar">
                        <span class="star">★</span> 5
                        <div class="bar">
                            <div class="fill" style="width: 66%;"></div>
                        </div>
                        66
                    </div>
                    <div class="rating-bar">
                        <span class="star">★</span> 4
                        <div class="bar">
                            <div class="fill" style="width: 10%;"></div>
                        </div>
                        5
                    </div>
                    <div class="rating-bar">
                        <span class="star">★</span> 3
                        <div class="bar">
                            <div class="fill" style="width: 5%;"></div>
                        </div>
                        4
                    </div>
                    <div class="rating-bar">
                        <span class="star">★</span> 2
                        <div class="bar">
                            <div class="fill" style="width: 2%;"></div>
                        </div>
                        2
                    </div>
                    <div class="rating-bar">
                        <span class="star">★</span> 1
                        <div class="bar">
                            <div class="fill" style="width: 1%;"></div>
                        </div>
                        1
                    </div>
                </div>
            </div>
            <div class="customer-reviews">
                <div class="review">
                    <h3>Jhon Smith <span class="review-date">25, Nov 2025</span></h3>
                    <div class="review-rating">
                        Rating: 3.0 ★★★☆☆
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at risus a lacus elementum vehicula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean tristique mi nec fermentum euismod. Fusce tincidunt, tortor at elementum vehicula, magna ligula iaculis lacus, vel feugiat velit felis a metus.</p>
                </div>
                <div class="review">
                    <h3>Andrio Gelario <span class="review-date">12, Dec 2024</span></h3>
                    <div class="review-rating">
                        Rating: 4.0 ★★★★☆
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at risus a lacus elementum vehicula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean tristique mi nec fermentum euismod. Fusce tincidunt, tortor at elementum vehicula, magna ligula iaculis lacus, vel feugiat velit felis a metus.</p>
                </div>
                <div class="review">
                    <h3>Juliya Gessy <span class="review-date">23, Apr 2024</span></h3>
                    <div class="review-rating">
                        Rating: 5.0 ★★★★★
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at risus a lacus elementum vehicula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean tristique mi nec fermentum euismod. Fusce tincidunt, tortor at elementum vehicula, magna ligula iaculis lacus, vel feugiat velit felis a metus.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products Section -->
    <section class="related-products">
        <div class="container">
            <h2>Produk Terkait</h2>
            <div class="related-product-cards">
                <div class="product-card">
                    <div class="product-image">
                        <img src="img/batik1.png" alt="Batik Sogan Blus Salur Wanita">
                    </div>
                    <div class="product-info">
                        <p class="product-name">Batik Sogan Blus Salur Wanita</p>
                        <div class="product-rating">
                            <span class="star">★</span>
                            <span class="rating">5.0</span>
                            <span class="sold">| 124 Terjual</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">Rp.490.000</span>
                            <span class="original-price">Rp.980.000</span>
                            <span class="discount">50%</span>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="img/batik2.png" alt="Batik Sogan Blus Salur Wanita">
                    </div>
                    <div class="product-info">
                        <p class="product-name">Batik Sogan Blus Salur Wanita</p>
                        <div class="product-rating">
                            <span class="star">★</span>
                            <span class="rating">5.0</span>
                            <span class="sold">| 99 Terjual</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">Rp.459.999</span>
                            <span class="original-price">Rp.980.000</span>
                            <span class="discount">50%</span>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="img/batik3.png" alt="Batik Sogan Blus Salur Wanita">
                    </div>
                    <div class="product-info">
                        <p class="product-name">Batik Sogan Blus Salur Wanita</p>
                        <div class="product-rating">
                            <span class="star">★</span>
                            <span class="rating">5.0</span>
                            <span class="sold">| 124 Terjual</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">Rp.490.000</span>
                            <span class="original-price">Rp.980.000</span>
                            <span class="discount">50%</span>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="img/batik4.png" alt="Batik Sogan Blus Salur Wanita">
                    </div>
                    <div class="product-info">
                        <p class="product-name">Batik Sogan Blus Salur Wanita</p>
                        <div class="product-rating">
                            <span class="star">★</span>
                            <span class="rating">5.0</span>
                            <span class="sold">| 99 Terjual</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">Rp.459.999</span>
                            <span class="original-price">Rp.980.000</span>
                            <span class="discount">50%</span>
                        </div>
                    </div>
                </div>
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
