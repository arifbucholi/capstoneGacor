<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Artikel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customNav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customGaleri.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- Navigation -->
    @php
        $menu = 'galeri';
    @endphp
    @include('partials.navbar2')

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
                <p>Lorem ipsum dolor sit amet consectetur. Arcu sed habitasse nibh proin sit interdum curabitur ac.
                    Morbi cras eget duis</p>
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
                    Nulla consequat eget purus a tincidunt. Integer semper lacus sem, quis tincidunt est dictum vel.
                    Phasellus sit amet ultrices tellus. Pellentesque non est facilisis, posuere nulla vel, sagittis
                    lacus. Vestibulum.
                </p>
                <p>
                    Duis consectetur, sem vitae imperdiet tincidunt, dolor augue tempus justo, et tempus mi risus eget
                    diam. Nunc dolor urna, sollicitudin vitae efficitur ac, venenatis quis turpis. Suspendisse potenti.
                    Pellentesque aliquam.
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
                    <p>Lorem ipsum dolor sit amet consectetur. Arcu sed habitasse nibh proin sit interdum curabitur ac. Morbi cras eget duis Lorem ipsum dolor sit amet consectetur. Arcu sed habitasse nibh proin sit interdum curabitur ac. Morbi cras eget duis</p>
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

    {{-- Footer --}}
    @include('partials.footer')
    <script src="{{ asset('js/main.js') }}"></script>
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
</body>

</html>
