<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customProduk.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customNav.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
</head>

<body>
    @php
        $menu = "produk";
    @endphp
    @include('partials.navbar2')
    <!-- Banner Slider Section -->
    <section class="banner-slider">
        <div class="banner-content">
            <img src="{{ asset('img/banner.png') }}" alt="Banner Image" class="banner-image">
        </div>
    </section>

    <!-- Special Discount Section -->
    <section class="special-discount">
        <div class="container">
            <div class="header">
                <h2>Diskon Spesial</h2>
                <div class="header-line"></div>
            </div>
            <div class="discount-content">
                <div class="discount-card">
                    <div class="discount-info">
                        <p>Diskon s.d</p>
                        <h1>75%</h1>
                        <p class="terms">* Syarat & ketentuan berlaku</p>
                    </div>
                    <div class="product-cards">
                        <div class="product-card">
                            <img src="img/product1.png" alt="Batik Sogan Blus Salur Wanita">
                            <div class="product-info">
                                <p>Batik Sogan Blus Salur Wanita</p>
                                <p>Rp.490.000 <span class="discounted">Rp.980.000</span> 50%</p>
                            </div>
                        </div>
                        <div class="product-card">
                            <img src="img/product2.png" alt="Batik Sogan Blus Salur Wanita">
                            <div class="product-info">
                                <p>Batik Sogan Blus Salur Wanita</p>
                                <p>Rp.490.000 <span class="discounted">Rp.980.000</span> 50%</p>
                            </div>
                        </div>
                        <div class="product-card">
                            <img src="img/product3.png" alt="Batik Sogan Blus Salur Wanita">
                            <div class="product-info">
                                <p>Batik Sogan Blus Salur Wanita</p>
                                <p>Rp.490.000 <span class="discounted">Rp.980.000</span> 50%</p>
                            </div>
                        </div>
                        <div class="product-card">
                            <img src="img/product3.png" alt="Batik Sogan Blus Salur Wanita">
                            <div class="product-info">
                                <p>Batik Sogan Blus Salur Wanita</p>
                                <p>Rp.490.000 <span class="discounted">Rp.980.000</span> 50%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Main Content -->
    <main class="produk-page">
        <!-- Koleksi Batik Laweyan Section -->
        <section class="koleksi-batik">
            <div class="container">
                <div class="section-header">
                    <h2>Koleksi Batik Laweyan</h2>
                    <div class="sort-options-container">
                        <div class="sort-options">
                            <label for="sort">Urutkan berdasarkan :</label>
                            <select id="sort">
                                <option value="popular">Penjualan terbanyak</option>
                                <option value="newest">Produk terbaru</option>
                                <option value="price-low-high">Harga terendah</option>
                                <option value="price-high-low">Harga tertinggi</option>
                            </select>
                        </div>
                        <div class="view-options">
                            <button class="view-button active"><i class="fas fa-th"></i></button>
                            <button class="view-button"><i class="fas fa-list"></i></button>
                        </div>
                    </div>
                </div>
                <div class="sidebar-and-products">
                    <div class="sidebar">
                        <div class="filter-category">
                            <h3>Kategori Batik</h3>
                            <ul>
                                <li><label><input type="checkbox"> Marin Laweyan</label></li>
                                <li><label><input type="checkbox"> Putra Laweyan</label></li>
                                <li><label><input type="checkbox"> Cempaka</label></li>
                                <li><label><input type="checkbox"> Mahkota Laweyan</label></li>
                                <li><label><input type="checkbox"> Puspa Kencana</label></li>
                            </ul>
                        </div>
                        <div class="filter-size">
                            <h3>Pilih Ukuran Batik</h3>
                            <div class="sizes">
                                <label><input type="checkbox" value="S"> S</label>
                                <label><input type="checkbox" value="M"> M</label>
                                <label><input type="checkbox" value="L"> L</label>
                                <label><input type="checkbox" value="XL"> XL</label>
                                <label><input type="checkbox" value="XXL"> XXL</label>
                            </div>
                        </div>
                    </div>
                    <div class="products">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="img/batik1.png" alt="Batik Sogan Blus Salur Wanita">
                            </div>
                            <div class="product-info">
                                <div class="product-rating">
                                    <span class="star">★</span>
                                    <span class="rating">5.0</span>
                                    <span class="sold">| 124 Terjual</span>
                                </div>
                                <p class="product-name">Batik Sogan Blus Salur Wanita</p>
                                <div class="product-price">
                                    <span class="current-price">Rp.490.000</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="img/batik8.png" alt="Batik Sogan Blus Salur Wanita">
                            </div>
                            <div class="product-info">
                                <div class="product-rating">
                                    <span class="star">★</span>
                                    <span class="rating">5.0</span>
                                    <span class="sold">| 124 Terjual</span>
                                </div>
                                <p class="product-name">Batik Sogan Blus Salur Wanita</p>
                                <div class="product-price">
                                    <span class="current-price">Rp.490.000</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="img/batik7.png" alt="Batik Sogan Blus Salur Wanita">
                            </div>
                            <div class="product-info">
                                <div class="product-rating">
                                    <span class="star">★</span>
                                    <span class="rating">5.0</span>
                                    <span class="sold">| 124 Terjual</span>
                                </div>
                                <p class="product-name">Batik Sogan Blus Salur Wanita</p>
                                <div class="product-price">
                                    <span class="current-price">Rp.490.000</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="img/batik6.png" alt="Batik Sogan Blus Salur Wanita">
                            </div>
                            <div class="product-info">
                                <div class="product-rating">
                                    <span class="star">★</span>
                                    <span class="rating">5.0</span>
                                    <span class="sold">| 124 Terjual</span>
                                </div>
                                <p class="product-name">Batik Sogan Blus Salur Wanita</p>
                                <div class="product-price">
                                    <span class="current-price">Rp.490.000</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="img/batik5.png" alt="Batik Sogan Blus Salur Wanita">
                            </div>
                            <div class="product-info">
                                <div class="product-rating">
                                    <span class="star">★</span>
                                    <span class="rating">5.0</span>
                                    <span class="sold">| 124 Terjual</span>
                                </div>
                                <p class="product-name">Batik Sogan Blus Salur Wanita</p>
                                <div class="product-price">
                                    <span class="current-price">Rp.490.000</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="img/batik4.png" alt="Batik Sogan Blus Salur Wanita">
                            </div>
                            <div class="product-info">
                                <div class="product-rating">
                                    <span class="star">★</span>
                                    <span class="rating">5.0</span>
                                    <span class="sold">| 124 Terjual</span>
                                </div>
                                <p class="product-name">Batik Sogan Blus Salur Wanita</p>
                                <div class="product-price">
                                    <span class="current-price">Rp.490.000</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="img/batik3.png" alt="Batik Sogan Blus Salur Wanita">
                            </div>
                            <div class="product-info">
                                <div class="product-rating">
                                    <span class="star">★</span>
                                    <span class="rating">5.0</span>
                                    <span class="sold">| 124 Terjual</span>
                                </div>
                                <p class="product-name">Batik Sogan Blus Salur Wanita</p>
                                <div class="product-price">
                                    <span class="current-price">Rp.490.000</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="img/batik2.png" alt="Batik Sogan Blus Salur Wanita">
                            </div>
                            <div class="product-info">
                                <div class="product-rating">
                                    <span class="star">★</span>
                                    <span class="rating">5.0</span>
                                    <span class="sold">| 124 Terjual</span>
                                </div>
                                <p class="product-name">Batik Sogan Blus Salur Wanita</p>
                                <div class="product-price">
                                    <span class="current-price">Rp.490.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-container">
                    <a href="#" class="pagination-arrow">&lt;</a>
                    <a href="#" class="pagination-link">1</a>
                    <a href="#" class="pagination-link active">2</a>
                    <a href="#" class="pagination-link">3</a>
                    <a href="#" class="pagination-link">4</a>
                    <span class="pagination-dots">...</span>
                    <a href="#" class="pagination-link">10</a>
                    <a href="#" class="pagination-arrow">&gt;</a>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container footer-top">
            <div class="footer-column footer-contact">
                <h3>Batik Wonderland Laweyan</h3>
                <p>Lorem ipsum dolor sit amet consectetur. diam pellentesque feugiat accumsan lorem mauris. Vestibulum
                    rhoncus</p>
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
