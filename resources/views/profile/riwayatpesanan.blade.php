@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/customRiwayat.css') }}">
@endsection

@section('main')
    @php
        $menu = 'profile';
    @endphp
    @include('partials.navbar')

    <section class="riwayat-pesanan-container">
        <div class="sidebar">
            <h1>Profil Saya</h1>
            <div class="profile-info">
                <img src="img/profile.jpg" alt="Profile Picture" class="profile-picture">
                <div class="user-details">
                    <h2>{{ Auth::user()->name }}</h2>
                    <p>{{ Auth::user()->email }}</p>
                </div>
            </div>
            <nav class="menu-sidebar">
                <ul>
                    <li><a href="/profile"><i id="icon-menu" class="bi bi-person"></i>Akun Saya</a></li>
                    <li><a href="/riwayatpesanan" class="active"><i id="icon-menu" class="bi bi-cart2"></i>Riwayat
                            Pesanan</a></li>
                    {{-- <li><a href="#"><i id="icon-menu" class="bi bi-archive"></i>Pembayaran</a></li> --}}
                    {{-- <li><a href="#"><i id="icon-menu" class="bi bi-lock"></i>Ganti Kata Sandi</a></li> --}}
                </ul>
            </nav>
        </div>

        <div class="riwayat-pesanan">
            <div class="menu">
                <div id="all" class="active">Semua</div>
                <div id="menunggu-pembayaran">Menunggu Pembayaran</div>
                <div id="dikirim">Dikirim</div>
                <div id="selesai">Selesai</div>
                <div id="dibatalkan">Dibatalkan</div>
            </div>
            <hr>

            @if ($orders->isEmpty())
                <div class="no-items">Tidak ada pesanan yang ditemukan</div>
            @else
                @foreach ($orders as $order)
                    <div class="pesanan-item">
                        <div class="pesanan-details">
                                <div class="bg-image">
                                    <img src="{{ asset('img/baju1.jpg') }}" alt="{{ $order->image }}" class="pesanan-image">
                                </div>
                                <div class="pesanan-info">
                                    <div class="pesanan-name">Kirim ke : {{ $order->city }}</div>
                                    <div class="rincian-pesanan">
                                        <div class="pesanan-size">Order ID: {{ $order->id }}</div>
                                        <div class="pesanan-price">Total Harga : <span
                                                class="harga">Rp.{{ number_format($order->total_price, 0, ',', '.') }}</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="pesanan-info">
                                    <div class="pesanan-name">Produk tidak ditemukan</div>
                                </div> --}}
                        </div>
                        <div class="pesanan-status {{ strtolower(str_replace(' ', '-', $order->status)) }}">
                            {{ $order->status }}</div>
                    </div>
                @endforeach
            @endif
        </div>

    </section>
@endsection

@section('js')
    <script>
        function applyNoBorderClass() {
            const pesananItems = document.querySelectorAll('.pesanan-item');
            const visibleItems = Array.from(pesananItems).filter(item => item.style.display !== 'none');

            // Remove the no-border class from all items first
            pesananItems.forEach(item => item.classList.remove('no-border'));

            // Add the no-border class to the last visible item
            if (visibleItems.length > 0) {
                visibleItems[visibleItems.length - 1].classList.add('no-border');
            }
        }

        document.querySelectorAll('.menu div').forEach(menuItem => {
            menuItem.addEventListener('click', () => {
                // Remove active class from all menu items
                document.querySelectorAll('.menu div').forEach(item => item.classList.remove('active'));
                // Add active class to the clicked menu item
                menuItem.classList.add('active');

                // Get the status to filter by
                const status = menuItem.id;
                let hasItems = false;

                // Show/hide items based on the status
                document.querySelectorAll('.pesanan-item').forEach(item => {
                    if (status === 'all') {
                        item.style.display = 'flex';
                        hasItems = true;
                    } else {
                        const itemStatus = item.querySelector('.pesanan-status').classList;
                        if (itemStatus.contains(status)) {
                            item.style.display = 'flex';
                            hasItems = true;
                        } else {
                            item.style.display = 'none';
                        }
                    }
                });

                // Display no items message if no items are found
                document.querySelector('.no-items').style.display = hasItems ? 'none' : 'block';

                // Apply the no-border class to the last visible item
                applyNoBorderClass();
            });
        });

        // Apply no-border class on initial load
        document.addEventListener('DOMContentLoaded', applyNoBorderClass);
    </script>
@endsection
