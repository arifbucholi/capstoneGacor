<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customLanding.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customCheckout.css') }}">
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

    <!-- Checkout Section -->
    <section class="checkout">
        <div class="container">
            <h1>Checkout</h1>
            <div class="checkout-content">
                <div class="checkout-left">
                    <div class="form-group">
                        <label for="first-name">Nama Depan</label>
                        <input type="text" id="first-name" placeholder="Nama Depan">
                    </div>
                    <div class="form-group">
                        <label for="last-name">Nama Belakang</label>
                        <input type="text" id="last-name" placeholder="Nama Belakang">
                    </div>
                    <div class="form-group">
                        <label for="phone">Nomor Telepon</label>
                        <input type="text" id="phone" placeholder="Nomor Telepon">
                    </div>
                    <div class="form-group">
                        <label for="province">Pilih Provinsi</label>
                        <select id="province">
                            <option>Pilih Provinsi</option>
                            <!-- Add options here -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="city">Pilih Kab/Kota</label>
                        <select id="city">
                            <option>Pilih Kab/Kota</option>
                            <!-- Add options here -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="district">Nama Kecamatan</label>
                        <input type="text" id="district" placeholder="Nama Kecamatan">
                    </div>
                    <div class="form-group">
                        <label for="postcode">Kodepos</label>
                        <input type="text" id="postcode" placeholder="Kodepos">
                    </div>
                    <div class="form-group">
                        <label for="address">Tuliskan alamat lengkap pengiriman</label>
                        <textarea id="address" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="same-address">
                        <label for="same-address">Samakan dengan alamat profile</label>
                    </div>
                    <div class="form-group">
                        <label for="shipping">Opsi Pengiriman</label>
                        <select id="shipping">
                            <option>Instan 3 Jam</option>
                            <option>Regular</option>
                            <option>Ekonomi</option>
                        </select>
                    </div>
                </div>
                <div class="checkout-right">
                    <h3>Tambahkan Kupon Diskon</h3>
                    <input type="text" placeholder="Coupon code">
                    <button> Terapkan </button>
                    <div class="order-summary">
                        <h3>Daftar Pembelian</h3>
                        <ul>
                            <li>BSB101_Batik Sogan Laweyan Blus Salur Wanita (x2) - Rp.980.000</li>
                            <li>RPYB103_Batik Rok Payung Wanita (x1) - Rp.225.000</li>
                            <li>BSB101_Batik Sogan Laweyan Blus Salur Wanita (x1) - Rp.225.000</li>
                        </ul>
                        <div class="summary">
                            <p>Subtotal: Rp.1.430.000</p>
                            <p>Shipping Cost: Rp.10.000</p>
                            <p>Discount: Rp.0</p>
                            <p>Total: Rp.1.440.000</p>
                        </div>
                    </div>
                    <h3>Pembayaran</h3>
                    <div class="payment-methods">
                        <label><input type="radio" name="payment" value="bank"> Virtual Account Bank</label>
                        <label><input type="radio" name="payment" value="gopay"> GoPay</label>
                        <label><input type="radio" name="payment" value="linkaja"> LinkAja</label>
                        <label><input type="radio" name="payment" value="shopeepay"> ShopeePay</label>
                    </div>
                    <button>Buat Pesanan</button>
                    <p>Dengan melanjutkan, kamu menyetujui Syarat & Ketentuan berlaku</p>
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
