@extends('layouts.main')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/customGaleri.css') }}">
@endsection

@section('main')
    <!-- Navbar -->
    @php
        $menu = 'galeri';
    @endphp
    @include('partials.navbar')

    <main>
        <div class="carousel">
            <button class="carousel-button prev" onclick="prevSlide()">&#9664;</button>
            <div class="carousel-slides">
                <img class="img-fluid" src="img/carousel1.jpg" alt="Image 1">
                <img class="img-fluid" src="img/carousel2.jpg" alt="Image 2">
                <img class="img-fluid" src="img/carousel4.jpg" alt="Image 3">
                <img class="img-fluid" src="img/carousel3.jpg" alt="Image 4">
                <img class="img-fluid" src="img/carousel5.jpg" alt="Image 5">
            </div>
            <button class="carousel-button next" onclick="nextSlide()">&#9654;</button>
        </div>

        <section class="moto">
            <div class="moto-content">
                <h1>Galleri Bawean</h1>
                <p>Jelajahi keindahan warisan budaya Indonesia di Galleri Bawean, di mana setiap batik menceritakan kisah yang mendalam.</p>
            </div>
        </section>

        <section class="highlight">
            <div class="highlight-left">
                <img src="img/galeri1.jpg">
            </div>
            <div class="highlight-right">
                <div class="highlight-small">
                    <img src="img/galeri3.jpg">
                </div>
                <div class="highlight-small">
                    <img src="img/galeri1.jpg">
                </div>
            </div>
            <div class="highlight-text">
                <h2>Kualitas kain yang terjamin keasliannya</h2>
            </div>
        </section>

        <section class="batik-store">
            <div class="left-images">
                <img src="img/batik2.jpg" alt="Batik Store Image 2">
                <img src="img/batik3.jpg" alt="Batik Store Image 3">
            </div>
            <div class="text-block">
                <h2>Toko Batik Kami</h2>
                <h3>Wonderful Laweyan</h3>
                <p>
                    "Toko Batik Kami: Wonderful Laweyan" adalah destinasi utama untuk menemukan
                    keindahan dan kekayaan batik. Terletak di Laweyan, kami menawarkan koleksi
                    batik eksklusif dengan motif tradisional dan modern yang memukau. Kami bangga
                    dengan kualitas tinggi dan kerajinan tangan yang kami tawarkan, serta komitmen
                    kami dalam melestarikan warisan budaya batik.
                </p>
            </div>
            <div class="right-image">
                <img src="img/batik1.jpg" alt="Batik Store Image 1">
            </div>
        </section>

        <section class="batik-process">
            <div class="image-container">
                <img src="img/batik-process.jpg" alt="Proses Pembuatan Kain Batik Laweyan">
                <div class="text-overlay">
                    <h3>Proses Pembuatan Kain Batik Laweyan</h3>
                    <p>Proses pembuatan kain batik di Laweyan merupakan warisan budaya yang berharga. Dimulai dari pemilihan bahan baku kain hingga proses pewarnaan dan pembatikan secara manual, setiap tahapan dilakukan dengan teliti dan penuh dedikasi oleh para pengrajin lokal. Motif-motif tradisional yang khas dihasilkan melalui teknik canting dan celup, menciptakan karya seni tekstil yang unik dan memikat bagi para penggemar batik di seluruh dunia.</p>
                </div>
                <div class="navigation-buttons">
                    <button class="prev">&larr;</button>
                    <button class="next">&rarr;</button>
                </div>
            </div>
        </section>

        <section class="collection">
            <div class="row">
                <img src="img/artikel5.jpg" alt="Image 1">
                <img src="img/coll1.jpg" alt="Image 2">
                <img src="img/coll2.jpg" alt="Image 2">
                <img src="img/coll3.jpg" alt="Image 3">
                <img src="img/coll4.jpg" alt="Image 4">
                <img src="img/coll5.jpg" alt="Image 5">
            </div>
            <div class="row">
                <img src="img/coll6.jpg" alt="Image 6">
                <img src="img/coll7.jpg" alt="Image 7">
                <img src="img/coll8.jpg" alt="Image 8">
                <img src="img/coll9.jpg" alt="Image 9">
                <img src="img/coll10.jpg" alt="Image 10">
                <img src="img/coll11.jpg" alt="Image 11">
            </div>
        </section>
    </main>
@endsection
@section('js')
    <script>
        let currentIndex = 0;

        function showSlide(index) {
            const slides = document.querySelectorAll('.carousel-image');
            if (index >= slides.length) currentIndex = 0;
            if (index < 0) currentIndex = slides.length - 1;
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = i === currentIndex ? 'block' : 'none';
            }
        }

        function nextSlide() {
            currentIndex++;
            showSlide(currentIndex);
        }

        function prevSlide() {
            currentIndex--;
            showSlide(currentIndex);
        }

        // Initialize the carousel to show the first slide
        showSlide(currentIndex);
    </script>
@endsection
