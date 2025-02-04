<script type="module">
    (function($) {
        "use strict";

        const navigationArrows = [
            '<i class="{{ _icons('arrow_left2') }}"></i>',
            '<i class="{{ _icons('arrow_right2') }}"></i>',
        ];

        // Mean Menu
        $(".mean-menu").meanmenu({
            meanScreenWidth: "991",
        });

        // Header Sticky
        $(window).on("scroll", function() {
            if ($(this).scrollTop() > 120) {
                $(".navbar-area").addClass("is-sticky");
            } else {
                $(".navbar-area").removeClass("is-sticky");
            }
        });

        // Language-switcher
        $(".language-option").each(function() {
            var each = $(this);
            each.find(".lang-name").html(
                each.find(".language-dropdown-menu a:nth-child(1)").text()
            );
            var allOptions = $(".language-dropdown-menu").children("a");
            each.find(".language-dropdown-menu").on("click", "a", function() {
                allOptions.removeClass("selected");
                $(this).addClass("selected");
                $(this)
                    .closest(".language-option")
                    .find(".lang-name")
                    .html($(this).text());
            });
        });

        // Search
        $("#close-btn").on("click", function() {
            $("#search-overlay").fadeOut();
            $("#search-btn").show();
        });
        $("#search-btn").on("click", function() {
            $("#search-overlay").fadeIn();
        });

        // Sidebar Modal JS
        $(".burger-menu").on("click", function() {
            $(".sidebar-modal").toggleClass("active");
        });
        $(".sidebar-modal-close-btn").on("click", function() {
            $(".sidebar-modal").removeClass("active");
        });

        // Banner Slider
        $("#banner-slider").owlCarousel({
            loop: true,
            margin: 0,
            autoHeight: true,
            nav: true,
            items: 1,
            dots: false,
            center: true,
            autoplay: true,
            autoplayHoverPause: true,
            navText: navigationArrows,

        });

        // Services Slider
        $(".services-slider").owlCarousel({
            loop: true,
            margin: 10,
            autoHeight: true,
            animateOut: "fadeOutUp",
            animateIn: "fadeInUp",
            nav: true,
            dots: false,
            center: true,
            autoplay: true,
            autoplayHoverPause: true,
            navText: navigationArrows,
            responsive: {
                0: {
                    items: 1,
                    center: false,
                },
                768: {
                    items: 2,
                    center: false,
                },
                992: {
                    items: 2,
                    center: false,
                },
                1200: {
                    items: 3,
                },
            },
        });

        // Services Slider Two
        $('.services-slider-two').owlCarousel({
            loop: true,
            margin: 30,
            autoHeight: true,
            nav: true,
            dots: false,
            animateOut: 'fadeOutUp',
            animateIn: 'fadeInUp',
            autoplay: true,
            autoplayHoverPause: true,
            navText: navigationArrows,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                1000: {
                    items: 3
                },
            }
        })


        // Project Slider Two
        $('.project-slider-two').owlCarousel({
            loop: true,
            margin: 30,
            items: 1,
            thumbs: true,
            thumbsPrerendered: true,
            nav: true,
            dots: false,
            autoplay: true,
            smartSpeed: 1500,
            autoplayHoverPause: true,
            navText: navigationArrows,
        })



        // Project Slider
        $("#homeProductsSlider").owlCarousel({
            loop: true,
            margin: 30,
            autoHeight: true,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayHoverPause: true,
            navText: navigationArrows,
            responsive: {
                0: {
                    items: 1,
                },
                769: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
                1200: {
                    items: 3,
                },
            },
        });

        // Testimonial Slider
        $(".testimonial-slider").owlCarousel({
            loop: true,
            margin: 10,
            autoHeight: true,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayHoverPause: true,
            navText: navigationArrows,
            responsive: {
                0: {
                    items: 1,
                },
                576: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
            },
        });

        $(".testimonial-slider-two").owlCarousel({
            loop: true,
            margin: 10,
            autoHeight: true,
            nav: true,
            items: 1,
            animateOut: "fadeOutUp",
            animateIn: "fadeInUp",
            dots: false,
            autoplay: true,
            autoplayHoverPause: true,
            navText: navigationArrows,
        });

        // FAQ Accordion JS
        $(".accordion")
            .find(".accordion-title")
            .on("click", function() {
                // Adds Active Class
                $(this).toggleClass("active");
                // Expand or Collapse This Panel
                $(this).next().slideToggle("fast");
                // Hide The Other Panels
                $(".accordion-content").not($(this).next()).slideUp("fast");
                // Removes Active Class From Other Titles
                $(".accordion-title").not($(this)).removeClass("active");
            });

        // Odometer JS
        // $(".odometer").appear(function (e) {
        //     var odo = $(".odometer");
        //     odo.each(function () {
        //         var countNumber = $(this).attr("data-count");
        //         $(this).html(countNumber);
        //     });
        // });

        // Tabs Single Page
        $(".tab ul.tabs").addClass("active").find("> li:eq(0)").addClass("current");
        $(".tab ul.tabs li a").on("click", function(g) {
            var tab = $(this).closest(".tab"),
                index = $(this).closest("li").index();
            tab.find("ul.tabs > li").removeClass("current");
            $(this).closest("li").addClass("current");
            tab.find(".tab_content")
                .find("div.tabs_item")
                .not("div.tabs_item:eq(" + index + ")")
                .slideUp();
            tab.find(".tab_content")
                .find("div.tabs_item:eq(" + index + ")")
                .slideDown();
            g.preventDefault();
        });

        // Popup Gallery
        // $(".gallery-photo").magnificPopup({
        //     delegate: "a",
        //     type: "image",
        //     tLoading: "Loading image #%curr%...",
        //     mainClass: "mfp-img-mobile",
        //     gallery: {
        //         enabled: true,
        //         navigateByImgClick: true,
        //         preload: [0, 1],
        //     },
        // });


        // Back To Top
        $("body").append(
            "<div class='go-top'><i class='bx bx-caret-up'></i></div>"
        );
        $(window).on("scroll", function() {
            var scrolled = $(window).scrollTop();
            if (scrolled > 600) $(".go-top").addClass("active");
            if (scrolled < 600) $(".go-top").removeClass("active");
        });
        $(".go-top").on("click", function() {
            $("html, body").animate({
                    scrollTop: "0",
                },
                500
            );
        });

        // Preloader JS
        jQuery(window).on("load", function() {
            jQuery(".preloader").fadeOut(500);
        });

        // Switch Btn
        $("body").append(
            "<div class='switch-box'><label id='switch' class='switch'><input type='checkbox' onchange='toggleTheme()' id='slider'><span class='slider round'></span></label></div>"
        );
    })($);

    // function to set a given theme/color-scheme
    function setTheme(themeName) {
        localStorage.setItem("vconn_theme", themeName);
        document.documentElement.className = themeName;
    }

    // function to toggle between light and dark theme
    function toggleTheme() {
        if (localStorage.getItem("vconn_theme") === "theme-dark") {
            setTheme("theme-light");
        } else {
            setTheme("theme-dark");
        }
    }

    // Immediately invoked function to set the theme on initial load
    (function() {
        if (localStorage.getItem("vconn_theme") === "theme-dark") {
            setTheme("theme-dark");
            document.getElementById("slider").checked = false;
        } else {
            setTheme("theme-light");
            document.getElementById("slider").checked = true;
        }
    })();
</script>
