$(document).ready(function () {

    function asset(path) {
        const baseUrl = window.location.origin;
        return `${baseUrl}/${path}`;
    }

    function checkScreenSize() {
        if ($(window).innerWidth() >= 768) {
            image.attr('src', imageUrl);
        } else {
            image.attr('src', currentUrl);
        }
    }

    const image = $(".about-us .image img");
    const imageUrl = asset('images/106176592_3008767946(1).png');
    const currentUrl = image.attr('src');


    // Call the function to check the screen size
    checkScreenSize();
    $(window).on('resize', checkScreenSize);
});

