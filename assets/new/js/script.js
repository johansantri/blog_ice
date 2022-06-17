function toggleNavbar() {
    const navbarMobileElement = document.getElementById('navbar-mobile');
    const hamburgerElement = document.getElementById('hamburger');
    navbarMobileElement.classList.toggle('nav-hidden');

    if (navbarMobileElement.classList.contains('nav-hidden')) {
        hamburgerElement.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                                        </svg>`;
    } else {
        hamburgerElement.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>`;
    }
}