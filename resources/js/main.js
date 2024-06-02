class CustomNavbar extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        this.innerHTML = `
            <nav id="navbar" class="navbar">
                <div class="container">
                    <div class="navbar-left">
                        <a href="#" class="logo"><img src="img/logo2.png" alt="Logo"></a>
                        <ul class="nav-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="/product">Product</a></li>
                            <li><a href="#">Article</a></li>
                        </ul>
                    </div>
                    <div class="navbar-right">
                        <form class="search-form">
                            <input type="text" placeholder="Search">
                        </form>
                        <ul class="nav-links">
                            <li><a href="/login">Login</a></li>
                            <li><a href="#">Cart</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        `;
    }
}

customElements.define('custom-navbar', CustomNavbar);

window.addEventListener('scroll', function() {
    var navbar = document.getElementById('navbar');
    if (window.scrollY > 0) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});
