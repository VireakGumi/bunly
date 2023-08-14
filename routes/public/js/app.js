
const navbar = document.querySelector('.navbar-content-container');
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".navbar-content-menu");
hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");

}

function hideNavbarOnScroll() {
    const windowHeight = window.innerHeight;
    const scrollPosition = window.scrollY;
    const middleOfPage = windowHeight / 2;

    if (scrollPosition > middleOfPage) {
        navbar.style.opacity = '0';
        navbar.style.transform = 'translateY(-100%)';
        hamburger.classList.remove("active");
        navMenu.classList.remove('active');
    } else {
        navbar.style.opacity = '1';
        navbar.style.transform = 'translateY(0)';
    }
}
function checkScreenSize() {
    if (window.innerWidth >= 750 && navMenu.classList.contains('active')) {
        hamburger.classList.remove("active");
        navMenu.classList.remove('active');
    }
}

window.addEventListener('scroll', hideNavbarOnScroll);
window.addEventListener('resize', checkScreenSize);
