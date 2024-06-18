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
    @include('partials.navbar2')
    <div class="cart-container">
        <div class="cart-header">
            <h2>Keranjang Belanja</h2>
            <a class="delete-all" href="{{ route('cart.clear') }}" onclick="event.preventDefault();
                if(confirm('Anda yakin ingin menghapus semua item dari keranjang?'))
                    document.getElementById('cart-clear-form').submit();">Hapus Semua</a>
            <form id="cart-clear-form" action="{{ route('cart.clear') }}" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
            </form>
        </div>
        @foreach ($userCart as $cartItem)
        <div class="cart-item">
            <div class="cart-item-checkbox">
                <input type="checkbox" id="custom-checkbox-{{ $cartItem->id }}" class="checkbox-custom" checked>
                <label for="custom-checkbox-{{ $cartItem->id }}"></label>
            </div>
            <img src="{{ asset('img/' . $cartItem->product->image) }}" alt="{{ $cartItem->product->name }}">
            <div class="cart-item-info">
                <p>{{ $cartItem->product->name }}</p>
                <p>Ukuran: {{ $cartItem->product->ukuran }}</p>
            </div>
            <div class="cart-item-price">
                <p style="margin-left: 15px;">Rp.{{ number_format($cartItem->product->price, 0, ',', '.') }}</p>
                @if ($cartItem->product->discount_price)
                <p style="text-decoration: line-through; margin-left: 10px;">Rp.{{ number_format($cartItem->product->original_price, 0, ',', '.') }}</p>
                <p style="color: #a0522d; margin-left: 10px;">{{ $cartItem->product->discount }}%</p>
                @endif
            </div>
            <div class="cart-item-controls">
                <div class="quantity-box">
                    <button onclick="kurangiJumlah({{ $cartItem->id }})">-</button>
                    <input type="number" value="{{ $cartItem->quantity }}" min="1" max="10">
                    <button onclick="tambahJumlah({{ $cartItem->id }})">+</button>
                </div>
            </div>
            <form action="{{ route('removeFromCart', ['id' => $cartItem->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-button" onclick="return confirm('Anda yakin ingin menghapus produk ini dari keranjang?')">🗑</button>
            </form>
        </div>
        @endforeach
        <!-- Repeat for other items -->
        <div class="cart-footer">
            <p>Total ({{ $userCart->count() }} Produk): Rp.{{ number_format($userCart->sum(function ($cartItem) { return $cartItem->product->price * $cartItem->quantity; }), 0, ',', '.') }}</p>
            <a href="{{ route('pembayaran') }}">
                <button>Lanjut ke Pembayaran</button>
            </a>
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
