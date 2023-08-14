$(document).ready(function () {
    const navbar = $('.navbar-content-container');
    const hamburger = $(".hamburger");
    const navMenu = $(".navbar-content-menu");
    // Translations
    const languages = {
        en: {
            home: "Home",
            project: "Projects",
            gallery: "GALLERYS",
            construction: "CONSTRUCTION",
            news: "News",
            about: "About Us",
            contact: "Contact Us",
            career: "Career",
        },
        kh: {
            home: "ទំព័រដើម",
            project: "គំរោង",
            gallery: "វិចិត្រសាល",
            construction: "សំណង់",
            news: "ព័ត៌មានថ្មីៗ",
            about: "អំពីយើង",
            contact: "ទំនាក់ទំនង់",
            career: "ឱកាសការងារ",
        }
    };

    hamburger.on("click", function () {
        hamburger.toggleClass("active");
        navMenu.toggleClass("active");
    });

    function hideNavbarOnScroll() {
        const windowHeight = $(window).innerHeight();
        const scrollPosition = $(window).scrollTop();
        const middleOfPage = windowHeight / 2;

        if (scrollPosition > middleOfPage) {
            navbar.css({
                opacity: '0',
                transform: 'translateY(-100%)'
            });
            hamburger.removeClass("active");
            navMenu.removeClass('active');
        } else {
            navbar.css({
                opacity: '1',
                transform: 'translateY(0)'
            });
        }
    }


    // Update Content with Translations
    function updateContent(translation) {
        const change = languages[translation];
        $("#home").text(change.home);
        $("#project").text(change.project);
        $("#gallery").text(change.gallery);
        $("#construction").text(change.construction);
        $("#news").text(change.news);
        $("#about").text(change.about);
        $("#contact").text(change.contact);
        $("#career").text(change.career);
        // Update other content with translated strings as needed
        localStorage.setItem("selectedFlag", translation);
    }
    $(".flag").on("click", function () {
        var selectedFlag = $(this).attr("class").split(" ")[1];
        if (selectedFlag == 'flag-kh') {
            $(".flag-en").show();
            $(".flag-kh").hide();
            updateContent('kh');
        } else {
            $(".flag-en").hide();
            $(".flag-kh").show();
            updateContent('en');
        }
    });

    function checkScreenSize() {
        if ($(window).innerWidth() >= 750 && navMenu.hasClass('active')) {
            hamburger.removeClass("active");
            navMenu.removeClass('active');
        }
    }
    var selectedFlag = localStorage.getItem("selectedFlag");
    if (selectedFlag) {
        if (selectedFlag == 'kh') {
            $(".flag-en").show();
            $(".flag-kh").hide();
            updateContent('kh');
        } else {
            $(".flag-en").hide();
            $(".flag-kh").show();
            updateContent('en');
        }
        updateContent(selectedFlag);
    }
    $(window).on('scroll', hideNavbarOnScroll);
    $(window).on('resize', checkScreenSize);
});
