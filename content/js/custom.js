jQuery(document).ready(function () {
    jQuery('.restaurant_slider').slick({
        dots: false,
        infinite: true,
        autoplay: false,
        speed: 1500,
        autoplaySpeed: 1500,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
        slidesToShow: 1,
        slidesToScroll: 1,
        touchThreshold: 100
    });
    jQuery('.slider-what-makes-different').slick({
        dots: true,
        autoplay: true,
        speed: 1000,
        autoplaySpeed: 1500,
        arrows: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1100,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 560,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }]
    });

    jQuery('.slider-our-suppliers').slick({
        dots: false,
        autoplay: true,
        speed: 1000,
        autoplaySpeed: 1500,
        arrows: false,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1100,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 500,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }]
    });

    jQuery('.slider-industries').slick({
        dots: true,
        autoplay: true,
        speed: 1000,
        autoplaySpeed: 1500,
        arrows: false,
        slidesToShow: 4,
        slidesToScroll: 4,
        loop:true,
        // centerMode: true,
        // centerPadding: '100px',
        responsive: [
            {
                breakpoint: 1180,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },{
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        ]
    });

    jQuery('.about_slider').slick({
        dots: true,
        autoplay: true,
        speed: 1000,
        autoplaySpeed: 1500,
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        // centerMode: true,
        // centerPadding: '100px',
        responsive: [
        {
            breakpoint: 1100,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        ]
    });
});


jQuery(window).on('load', function () {
    jQuery("#preloader").fadeOut(500); setTimeout(function () {
        wow = new WOW({ mobile: false, })
        wow.init();
    });
});

//home view full menu
jQuery(".toggle_menu a").click(function () {
    jQuery('.view-full-menu .home_cat_menu').slideToggle();
    jQuery(this).toggleClass('in');
});

jQuery(".burgr-menu-icon").click(function () {
    jQuery('.menu_block').fadeIn();
    jQuery(this).addClass('in');
});
jQuery(".menu_block_back_arr").click(function () {
    jQuery('.menu_block').fadeOut();
    jQuery(this).removeClass('in');
});

$(".scroll-down").click(function () {
    $('html, body').animate({
        scrollTop: $(".section2").offset().top
    }, 1500);
});

$(".explore-serv").click(function () {
    $('html, body').animate({
        scrollTop: $(".homepage-section2").offset().top
    }, 1500);
});

$("#get_free_utility").click(function () {
    $('html, body').animate({
        scrollTop: $(".values-div").offset().top
    }, 1500);
});