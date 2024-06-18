<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customNav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customLanding.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customArtikel.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- Navigation -->
    @php
        $menu = 'artikel';
    @endphp
    @include('partials.navbar2')

    <!-- Artikel Section -->
    <section class="artikel">
        <div class="container">
            <h1>Artikel Terbaru Laweyan</h1>
            <p>Lorem ipsum dolor sit amet consectetur. Arcu sed habitasse nibh proin sit interdum curabitur ac. Morbi
                cras eget duis</p>
            <div class="artikel-header">
                <div class="artikel-item">
                    <img src="img/artikel1.jpg" alt="Artikel 1">
                    <p>Lorem ipsum dolor sit amet consectetur. Arcu sed habitasse nibh proin sit interdum curabitur ac.
                        Morbi cras eget duis</p>
                </div>
                <div class="artikel-item">
                    <img src="img/artikel2.jpg" alt="Artikel 2">
                    <p>Lorem ipsum dolor sit amet consectetur. Arcu sed habitasse nibh proin sit interdum curabitur ac.
                        Morbi cras eget duis</p>
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

    @include('partials.footer')
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
