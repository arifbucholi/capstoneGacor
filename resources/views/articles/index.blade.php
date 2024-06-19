@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/customArtikel.css') }}">
@endsection

@section('main')
    <!-- Navbar -->
    @php
        $menu = 'artikel';
    @endphp
    @include('partials.navbar')

    <!-- Artikel Section -->
    <section class="artikel">
        <div class="container">
            <h1>Artikel Terbaru Laweyan</h1>
            <p>Laweyan, sebuah kampung batik yang terletak di Surakarta, Jawa Tengah, tidak hanya terkenal dengan keindahan kain batiknya tetapi juga sebagai tempat bersejarah di Indonesia.</p>
            <div class="artikel-header">
                <div class="artikel-item">
                    <img src="img/artikel1.jpg" alt="Artikel 1">
                    <p>Dalam kampung batik Laweyan, setiap sudut rumah-rumah tradisionalnya memancarkan keanggunan arsitektur Jawa klasik. Setiap jendela, pintu, dan atapnya memberikan nuansa yang khas dan memikat bagi para pengunjung yang ingin merasakan keindahan sejarah.</p>
                    <a href="/detail-artikel">Selanjutnya...</a>
                </div>
                <div class="artikel-item">
                    <img src="img/artikel2.jpg" alt="Artikel 2">
                    <p>Masjid Laweyan menawarkan panorama yang megah dengan kubahnya yang menjulang tinggi dan arsitektur yang memikat, mencerminkan harmoni antara keindahan arsitektur dan spiritualitas yang mendalam.</p>
                    <a href="/detail-artikel">Selanjutnya...</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Artikel Mini --}}
    <section class="artikel-mini">
        <div class="container">
            <hr>
            <div class="artikel-mini list">
                <div class="artikel-item-mini">
                    <img src="img/artikelmini1.jpg" alt="ArtikelMini1">
                    <div class="artikel-content">
                        <h3>Forum Pengembangan Kampoeng Batik Laweyan</h3>
                        <p>2 Juni 2024 | 14:00</p>
                    </div>
                </div>
                <div class="artikel-item-mini">
                    <img src="img/artikelmini2.jpg" alt="ArtikelMini2">
                    <div class="artikel-content">
                        <h3>Forum Pengembangan Kampoeng Batik Laweyan</h3>
                        <p>2 Juni 2024 | 14:00</p>
                    </div>
                </div>
                <div class="artikel-item-mini">
                    <img src="img/artikelmini2.jpg" alt="ArtikelMini3">
                    <div class="artikel-content">
                        <h3>Forum Pengembangan Kampoeng Batik Laweyan</h3>
                        <p>2 Juni 2024 | 14:00</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Artikel List Section -->
    <section class="artikel-list">
        <div class="container">
            <h2>Artikel Terbaru</h2>
            <hr>
            <div class="artikel-items">
                <!-- Artikel Item -->
                <div class="artikel-item">
                    <img src="img/artikel3.jpg" alt="Artikel 3">
                    <h3>Proses Membatik di Laweyan</h3>
                    <p>2 Juni 2024 | 14:00</p>
                    <a href="/detail-artikel">Baca Selanjutnya...</a>
                </div>
                <div class="artikel-item">
                    <img src="img/artikel4.jpg" alt="Artikel 4">
                    <h3>Proses Membuat Kain Batik di Laweyan</h3>
                    <p>2 Juni 2024 | 14:00</p>
                    <a href="/detail-artikel">Baca Selanjutnya...</a>
                </div>
                <div class="artikel-item">
                    <img src="img/artikel5.jpg" alt="Artikel 5">
                    <h3>Pak Calon Wakil Presiden Pernah ke Laweyan</h3>
                    <p>2 Juni 2024 | 14:00</p>
                    <a href="/detail-artikel">Baca Selanjutnya...</a>
                </div>
                <div class="artikel-item">
                    <img src="img/artikel6.jpg" alt="Artikel 6">
                    <h3>Rumah Laweyan</h3>
                    <p>2 Juni 2024 | 14:00</p>
                    <a href="/detail-artikel">Baca Selanjutnya...</a>
                </div>
                {{-- ------------ --}}
                <div class="artikel-item">
                    <img src="img/artikel4.jpg" alt="Artikel 4">
                    <h3>Proses Membuat Kain Batik di Laweyan</h3>
                    <p>2 Juni 2024 | 14:00</p>
                    <a href="/detail-artikel">Baca Selanjutnya...</a>
                </div>
                <div class="artikel-item">
                    <img src="img/artikel5.jpg" alt="Artikel 5">
                    <h3>Pak Calon Wakil Presiden Pernah ke Laweyan</h3>
                    <p>2 Juni 2024 | 14:00</p>
                    <a href="/detail-artikel">Baca Selanjutnya...</a>
                </div>
                <div class="artikel-item">
                    <img src="img/artikel6.jpg" alt="Artikel 6">
                    <h3>Rumah Laweyan</h3>
                    <p>2 Juni 2024 | 14:00</p>
                    <a href="/detail-artikel">Baca Selanjutnya...</a>
                </div>
                <div class="artikel-item">
                    <img src="img/artikel3.jpg" alt="Artikel 3">
                    <h3>Proses Membatik di Laweyan</h3>
                    <p>2 Juni 2024 | 14:00</p>
                    <a href="/detail-artikel">Baca Selanjutnya...</a>
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

    {{-- Artikel Banner --}}
    <section class="artikel-banner">
        <div class="overlay"></div>
        <div class="content">
            <div class="text-content">
                <h1>Subscribe Artikel Lawean</h1>
                <p>Subcribe untuk mendapatkan artikel dan info terbaru Batik Lawean. <br> Tidak perlu khawatir kami
                    tidak
                    akan spam email.</p>
            </div>
            <form class="subscribe-form">
                <input type="email" placeholder="Masukan email anda" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </section>
@endsection
