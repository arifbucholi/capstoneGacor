<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customLanding.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customCart.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customNav.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
</head>

<body>

    @php
        $menu = "cart";
    @endphp
    @include('partials.navbar')
    <div class="cart-container">
        <div class="cart-header">
            <h2>Keranjang Belanja</h2>
            <a class="delete-all" onclick="hapusSemua()">Hapus Semua</a>
        </div>
        <div class="cart-item">
            <div class="cart-item-checkbox">
                <input type="checkbox" id="custom-checkbox" class="checkbox-custom" checked>
                <label for="custom-checkbox"></label>
            </div>
            <img src="{{ asset('img/baju1.jpg') }}" alt="Batik Sogan Lawean Blus Salur Wanita">
            <div class="cart-item-info">
                <p>BSB101_Batik Sogan Lawean Blus Salur Wanita</p>
                <p>Ukuran: Medium (M)</p>
            </div>
            <div class="cart-item-price">
                <p style="margin-left: 15px;">Rp.490.000</p>
                <p style="text-decoration: line-through; margin-left: 10px;">Rp.980.000</p>
                <p style="color: #a0522d; margin-left: 10px;">50%</p>
            </div>
            <div class="cart-item-controls">
                <div class="quantity-box">
                    <button onclick="kurangiJumlah()">-</button>
                    <input type="number" value="2" min="1" max="10">
                    <button onclick="tambahJumlah()">+</button>
                </div>
            </div>

            {{-- <button onclick="hapusItem()" style="color: red; background: none; border: none; cursor: pointer;">🗑</button> --}}
            <button onclick="hapusItem()" class="delete-button" style="color: red; background: none; border: none; cursor: pointer;">🗑</button>

        </div>
        <!-- Repeat for other items -->
        <div class="cart-item">
            <div class="cart-item-checkbox">
                <input type="checkbox" id="pp" class="checkbox-custom">
                <label for="pp"></label>
            </div>
            <img src="{{ asset('img/baju2.jpg') }}" alt="Batik Rok Payung Wanita">
            <div class="cart-item-info">
                <p>RPYB103_Batik Rok Payung Wanita</p>
                <p>Ukuran: Medium (M)</p>
            </div>
            <div class="cart-item-price">
                <p style="margin-left: 15px;">Rp.225.000</p>
                <p style="text-decoration: line-through; margin-left: 10px;">Rp.980.000</p>
                <p style="color: #a0522d; margin-left: 10px;">50%</p>
            </div>
            <div class="cart-item-controls">
                <div class="quantity-box">
                    <button onclick="kurangiJumlah()">-</button>
                    <input type="number" value="2" min="1" max="10">
                    <button onclick="tambahJumlah()">+</button>
                </div>
            </div>

            <button onclick="hapusItem()" style="color: red; background: none; border: none; cursor: pointer;">🗑</button>
        </div>
        <!-- Repeat for other items -->
        <div class="cart-footer">
            <p>Total (1 Produk): Rp.490.000</p>
            <button>Lanjut ke Pembayaran</button>
        </div>
    </div>

    {{-- Footer --}}
    @include('partials.footer')
    {{-- end Footer --}}

    <script>
        function hapusSemua() {
            alert('Hapus semua item dari keranjang');
        }

        function kurangiJumlah() {
            alert('Kurangi jumlah produk');
        }

        function tambahJumlah() {
            alert('Tambah jumlah produk');
        }

        function hapusItem() {
            alert('Hapus item dari keranjang');
        }

        window.addEventListener('scroll', function() {
            var navbar = document.getElementById('navbar');
            if (window.scrollY > 0) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
