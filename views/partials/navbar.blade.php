<nav id="navbar" class="navbar">
    <div class="container">
        <a href="/" class="logo"><img src="img/logo2.png" alt="Logo"></a>
        <div class="navbar-left">
            <ul class="nav-links">
                <li class="@php if($menu == 'beranda') echo 'active'; @endphp"><a href="/">Beranda</a></li>
                <li class="@php if($menu == "produk") echo 'active'; @endphp"><a href="/produk">Produk</a></li>
                <li class="@php if($menu == "artikel") echo 'active'; @endphp"><a href="/artikel">Artikel</a></li>
                <li class="@php if($menu == "galeri") echo 'active'; @endphp"><a href="/galeri">Galeri</a></li>
                <li class="@php if($menu == "faq") echo 'active'; @endphp"><a href="/#faq">Faq</a></li>
                <li class="@php if($menu == "kontak") echo 'active'; @endphp"><a href="#">Kontak</a></li>
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
