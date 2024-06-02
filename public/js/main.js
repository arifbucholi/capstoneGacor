document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('navbar');
    let lastScrollTop = 0;

    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop && scrollTop > 100) {
            navbar.classList.add('scrolled');
        } else if (scrollTop === 0) {
            navbar.classList.remove('scrolled');
        }

        lastScrollTop = scrollTop;
    });

    // Set transparansi navbar saat di atas
    window.addEventListener('load', function() {
        if (window.scrollY === 0) {
            navbar.classList.remove('scrolled');
        }
    });
});
