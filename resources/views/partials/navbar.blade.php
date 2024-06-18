<!-- Navigation -->
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
                    <img src="{{ asset('img/profile.jpg') }}" class="img-fluid rounded-circle" alt="">
                @else
                    <li><a href="/login">Login</a></li>
                    <li><a href="#">Signin</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
