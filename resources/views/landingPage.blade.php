<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customLanding.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
</head>

<body>
    {{-- Navbar --}}
    @php
        $menu = 'beranda';
    @endphp
    <nav id="navbar" class="navbar">
        <div class="container">
            <a href="/" class="logo"><img src="img/logo.png" alt="Logo"></a>
            <div class="navbar-left">
                <ul class="nav-links">
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/produk">Produk</a></li>
                    <li><a href="/artikel">Artikel</a></li>
                    <li><a href="/galeri">Galeri</a></li>
                    <li><a href="/#faq">Faq</a></li>
                    <li><a href="#">Kontak</a></li>
                </ul>
            </div>
            <div class="navbar-right">
                <form class="search-form">
                    <input type="text" placeholder="Search">
                </form>
                <div class="cart-logo">
                    <i class="bi bi-basket3 fs-3"></i>
                </div>
                <div class="vertical-line"></div>
                <ul class="nav-links">
                    @auth
                        <div class="dropdown">
                            <div class="img-profile-container">
                                <img src="{{ asset('img/profile.jpg') }}" class="img-profile" alt="">
                            </div>
                            <div class="dropdown-content">
                                <a href="/profile">Profile</a>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                                    <button type="submit">Logout</button>
                                </form>
                            </div>
                        </div>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('signup') }}">Signup</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" style="background-image: url('img/hero.jpg');">
        <div class="hero-overlay" style="background: rgba(0, 0, 0, 0.1)">
            <div class="hero-text">
            </div>
        </div>
    </section>
    <section class="hero-section" style="background-image: url('img/batik.jpg');">
        <div class="hero-overlay">
            <div class="hero-text">
                <h1>"Amba Nitik"</h1>
                <p>Secara etimologi kata batik berasal dari kata 'amba' yang berarti menulis dan 'nitik' yang berarti
                    titik. Seperti seni lukis, seni batik adalah sebuah proses penambahan warna pada kain dengan cara
                    perintang warna menggunakan bahan lilin yang diproses sedemikian rupa.</p>
            </div>
        </div>
    </section>

    <!-- Product Section -->
    <section class="product-section">
        <div class="container">
            <h2>Lineup Garment Product</h2>
            <div class="products-grid">
                @foreach ($products as $product)
                    <div class="product-card">
                        <a href="{{ route('product.detail', ['id' => $product->id]) }}"
                            style="text-decoration: none; color: inherit;">
                            <img src="{{ asset('img/' . $product->image) }}" alt="{{ $product->name }}">
                            <div class="product-info">
                                <h3>{{ $product->name }}</h3>
                                <p>Rating: {{ $product->rating }}</p>
                                <p>Terjual: {{ $product->sold }}</p>
                                <p>Rp.{{ number_format($product->price, 0, ',', '.') }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
                {{-- <div class="product-card">
                    <img src="{{ asset('img/baju1.jpg') }}" alt="Product 1">
                    <div class="product-info">
                        <h3>Batik Batikan</h3>
                        <p>Rating: ★★★★☆</p>
                        <p>Terjual: 50</p>
                        <p>Rp.99.999</p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="{{ asset('img/baju2.jpg') }}" alt="Product 2">
                    <div class="product-info">
                        <h3>Batik Asli</h3>
                        <p>Rating: ★★★☆☆</p>
                        <p>Terjual: 30</p>
                        <p>Rp.89.999</p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="{{ asset('img/baju3.jpg') }}" alt="Product 3">
                    <div class="product-info">
                        <h3>Batik Palsu</h3>
                        <p>Rating: ★★★★★</p>
                        <p>Terjual: 70</p>
                        <p>Rp.109.999</p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="{{ asset('img/baju4.jpg') }}" alt="Product 4">
                    <div class="product-info">
                        <h3>Batik Abstrak</h3>
                        <p>Rating: ★★★★☆</p>
                        <p>Terjual: 45</p>
                        <p>Rp.95.999</p>
                    </div>
                </div> --}}
            </div>
            <a href="/product" class="btn-more">More</a>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">
            <h2>TESTIMONIAL</h2>
            <h3>Mereka yang telah berkunjung ke Laweyan</h3>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        &#9733;&#9733;&#9733;&#9733;&#9733;
                    </div>
                    <p class="testimonial-quote">"Lorem ipsum dolor sit amet consectetur. diam pellentesque feugiat
                        accumsan lorem mauris. Vestibulum rhoncus"</p>
                    <img src="img/testimonial1.jpg" alt="Intan Kurnia Safitri">
                    <h4>Intan Kurnia Safitri</h4>
                    <p class="testimonial-role">Mahasiswa</p>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        &#9733;&#9733;&#9733;&#9733;&#9733;
                    </div>
                    <p class="testimonial-quote">"Lorem ipsum dolor sit amet consectetur. diam pellentesque feugiat
                        accumsan lorem mauris. Vestibulum rhoncus"</p>
                    <img src="img/testimonial2.jpg" alt="Roby Syahrul Abdullah">
                    <h4>Roby Syahrul Abdullah</h4>
                    <p class="testimonial-role">Direktur PT. Serba Bisa</p>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        &#9733;&#9733;&#9733;&#9733;&#9733;
                    </div>
                    <p class="testimonial-quote">"Lorem ipsum dolor sit amet consectetur. diam pellentesque feugiat
                        accumsan lorem mauris. Vestibulum rhoncus"</p>
                    <img src="img/testimonial3.jpg" alt="Ana Siti Permatasari">
                    <h4>Ana Siti Permatasari</h4>
                    <p class="testimonial-role">Pengusaha Ayam</p>
                </div>
            </div>
            <div class="testimonial-pagination">
                <a href="#">&larr;</a>
                <span>1/3</span>
                <a href="#">&rarr;</a>
            </div>
        </div>
    </section>

    <!-- Media Partner Section -->
    <section class="media-partner-section">
        <div class="container">
            <h2>MEDIA PARTNER</h2>
            <h3>Dipublikasikan oleh Media Internasional dan Nasional</h3>
            <div class="media-logos">
                <img src="img/cnn.png" alt="CNN">
                <img src="img/bbc.png" alt="BBC">
                <img src="img/afc.png" alt="AFC">
                <img src="img/discovery.png" alt="Discovery">
                <img src="img/aljazeera.png" alt="Al Jazeera">
                <img src="img/trans-tv-k 1.png" alt="Trans TV">
                <img src="img/trans7.png" alt="Trans 7">
                <img src="img/sctv.png" alt="SCTV">
                <img src="img/rcti.png" alt="RCTI">
                <img src="img/net.png" alt="NET">
                <img src="img/metrotv.png" alt="Metro TV">
                <img src="img/tvri.png" alt="TVRI">
                <img src="img/tvone.png" alt="TV One">
                <img src="img/kompas.png" alt="Kompas">
                <img src="img/indosiar.png" alt="Indosiar">
                <img src="img/antv.png" alt="ANTV">
            </div>
        </div>
    </section>

    <section class="faq" id="faq">
        <h2>FAQ</h2>
        <h1>Ada Pertanyaan? Cek disini</h1>
        <p>Beberapa pertanyaan yang paling sering di tanyakan oleh user yang mungkin <br> membantu informasi untuk Anda
        </p>

        <div class="faq-item">
            <button class="faq-question">Apakah batik nya asli?</button>
            <div class="faq-answer">
                <p>Lorem ipsum dolor sit amet consectetur. Nulla nunc id donec fermentum nulla sed nibh. Ultrices
                    egestas
                    mauris ipsum commodo morbi. Et in scelerisque dolor eu sagittis magna sociis. Tristique ac risus
                    facilisis aenean sagittis. commodo morbi. Et in scelerisque dolor eu sagittis magna sociis.
                    Tristique ac
                    risus facilisis aenean sagittis.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Bagaimana Proses Pembuatan Batik Laweyan?</button>
            <div class="faq-answer">
                <p>Lorem ipsum dolor sit amet consectetur. Nulla nunc id donec fermentum nulla sed nibh. Ultrices
                    egestas
                    mauris quam commodo morbi. In sit scelerisque dolor eu sagittis magna sodis. Tristique ac risus
                    facilisis aenean sagittis, commodo morbi. Et in scelerisque dolor eu sagittis magna sodis. Tristique
                    ac
                    risus facilisis aenean sagittis.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Berapa lama waktu pengirimannya?</button>
            <div class="faq-answer">
                <p>Lorem ipsum dolor sit amet consectetur. Nulla nunc id donec fermentum nulla sed nibh. Ultrices
                    egestas
                    mauris ipsum commodo morbi. Et in scelerisque dolor eu sagittis magna sociis. Tristique ac risus
                    facilisis aenean sagittis. commodo morbi. Et in scelerisque dolor eu sagittis magna sociis.
                    Tristique ac
                    risus facilisis aenean sagittis.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Apakah Kualitas Bahannya bisa di pertanggung jawabkan?</button>
            <div class="faq-answer">
                <p>Lorem ipsum dolor sit amet consectetur. Nulla nunc id donec fermentum nulla sed nibh. Ultrices
                    egestas
                    mauris ipsum commodo morbi. Et in scelerisque dolor eu sagittis magna sociis. Tristique ac risus
                    facilisis aenean sagittis. commodo morbi. Et in scelerisque dolor eu sagittis magna sociis.
                    Tristique ac
                    risus facilisis aenean sagittis.</p>
            </div>
        </div>
    </section>

    <section class="hero-section2">
        <div class="hero-overlay2">
            <div class="hero-text2">
                <p>Diskon 50% Pembelian Online</p>
                <h2>Promo Akhir Tahun Laweyan</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel dolor pellentesque, varius elit
                    quis, malesuada quam.</p>
                <a href="#" class="btn-get-promo">Beli Sekarang</a>
            </div>
        </div>
    </section>

    {{-- <section>
        <div class="promo-overlay">
            <div class="promo-text">
                <p>Diskon 50% Pembelian Online</p>
                <h2>Promo Akhir Tahun Laweyan</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel dolor pellentesque, varius elit
                    quis, malesuada quam.</p>
                <a href="#" class="btn-get-promo">Beli Sekarang</a>
            </div>
        </div>
    </section> --}}
    @include('partials.footer')

    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        document.querySelectorAll('.faq-question').forEach(button => {
            button.addEventListener('click', () => {
                const faqItem = button.parentElement;

                // Close all other faq items
                document.querySelectorAll('.faq-item').forEach(item => {
                    if (item !== faqItem) {
                        item.querySelector('.faq-question').classList.remove('active');
                        item.classList.remove('active');
                        item.querySelector('.faq-answer').style.maxHeight = '0';
                    }
                });

                // Toggle the clicked faq item
                button.classList.toggle('active');
                faqItem.classList.toggle('active');
                const answer = button.nextElementSibling;
                if (button.classList.contains('active')) {
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                } else {
                    answer.style.maxHeight = '0';
                }
            });
        });
    </script>
</body>

</html>
