<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customNav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customRiwayat.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
</head>

<body>
    @php
        $menu = 'profile';
    @endphp
    @include('partials.navbar2')

    <section class="riwayat-pesanan-container">
        <div class="sidebar">
            <h1>Profil Saya</h1>
            <div class="profile-info">
                <img src="img/profile.jpg" alt="Profile Picture" class="profile-picture">
                <div class="user-details">
                    <h2>Intan Kurnia</h2>
                    <p>kintania_cimoet@gmail.com</p>
                </div>
            </div>
            <nav class="menu-sidebar">
                <ul>
                    <li><a href="/profile#"><i id="icon-menu" class="bi bi-person"></i>Akun Saya</a></li>
                    <li><a href="/riwayatpesanan#" class="active"><i id="icon-menu" class="bi bi-cart2"></i>Riwayat
                            Pesanan</a></li>
                    <li><a href="#"><i id="icon-menu" class="bi bi-archive"></i>Pembayaran</a></li>
                    <li><a href="#"><i id="icon-menu" class="bi bi-lock"></i>Ganti Kata Sandi</a></li>
                </ul>
            </nav>
        </div>

        <div class="riwayat-pesanan">
            <div class="menu">
                <div id="all" class="active">Semua</div>
                <div id="belum-bayar">Belum Bayar</div>
                <div id="dikirim">Dikirim</div>
                <div id="selesai">Selesai</div>
                <div id="dibatalkan">Dibatalkan</div>
            </div>
            <hr style="border: 1px solid #DFE4EA">
            <div class="pesanan-item">
                <div class="pesanan-details">
                    <div class="bg-image">
                        <img src="img/riwayat1.png" alt="Batik Blus" class="pesanan-image">
                    </div>
                    <div class="pesanan-info">
                        <div class="pesanan-name">BSB101_Batik Sogan Laweyan Blus Salur Wanita</div>
                        <div class="pesanan-size">Ukuran: Medium ( M )</div>
                        <div class="pesanan-price">1 barang x <span class="harga">Rp.490.000</span> <span
                                class="discount">Rp.980.000 50%</span></div>
                    </div>
                </div>
                <div class="pesanan-status sedang-dikirim">Sedang dikirim</div>
            </div>
            <div class="pesanan-item">
                <div class="pesanan-details">
                    <div class="bg-image">
                        <img src="img/riwayat2.png" alt="Batik Rok" class="pesanan-image">
                    </div>
                    <div class="pesanan-info">
                        <div class="pesanan-name">RPYB103_Batik Rok Payung Wanita</div>
                        <div class="pesanan-size">Ukuran: Medium ( M )</div>
                        <div class="pesanan-price">1 barang x <span class="harga">Rp.225.000</span> <span
                                class="discount">Rp.980.000 50%</span></div>
                    </div>
                </div>
                <div class="pesanan-status selesai">Pesanan Selesai</div>
            </div>
            <div class="pesanan-item">
                <div class="pesanan-details">
                    <div class="bg-image">
                        <img src="img/riwayat3.png" alt="Batik Blus" class="pesanan-image">
                    </div>
                    <div class="pesanan-info">
                        <div class="pesanan-name">BSB101_Batik Sogan Laweyan Blus Salur Wanita</div>
                        <div class="pesanan-size">Ukuran: Medium ( M )</div>
                        <div class="pesanan-price">1 barang x <span class="harga">Rp.490.000</span></div>
                    </div>
                </div>
                <div class="pesanan-status selesai">Pesanan Selesai</div>
            </div>
        </div>

    </section>


    {{-- Footer --}}
    @include('partials.footer')

    <script>
        document.querySelectorAll('.menu div').forEach(menuItem => {
            menuItem.addEventListener('click', () => {
                // Remove active class from all menu items
                document.querySelectorAll('.menu div').forEach(item => item.classList.remove('active'));
                // Add active class to the clicked menu item
                menuItem.classList.add('active');

                // Get the status to filter by
                const status = menuItem.id;
                // Show/hide items based on the status
                document.querySelectorAll('.pesanan-item').forEach(item => {
                    if (status === 'all') {
                        item.style.display = 'flex';
                    } else {
                        const itemStatus = item.querySelector('.pesanan-status').classList;
                        item.style.display = itemStatus.contains(status) ? 'flex' : 'none';
                    }
                });
            });
        });
    </script>
    <script>
        window.addEventListener('scroll', function() {
            var navbar = document.getElementById('navbar');
            if (window.scrollY > 0) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>
