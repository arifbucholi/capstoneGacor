<nav id="navbar" class="navbar">
    <div class="container">
        <a href="/" class="logo"><img src="{{ asset('img/logo2.png') }}" alt="Logo"></a>
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
                <a href="/cart" style="color: #985a33;">
                    <i class="bi bi-basket3 fs-3"></i>
                </a>
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
