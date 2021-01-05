

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
        dots: false,
        autoplay: false,
        speed: 2500,
        autoplaySpeed: 1500,
        arrows: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1100,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: true,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: true,
            }
        },
        {
            breakpoint: 560,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: true,
            }
        }]
    });

    jQuery('.slider-our-suppliers').slick({
        dots: false,
        autoplay: false,
        speed: 1500,
        autoplaySpeed: 1500,
        arrows: false,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1100,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
                dots: true,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: true,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: true,
            }
        },
        {
            breakpoint: 500,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: true,
            }
        }]
    });

    jQuery('.slider-industries').slick({
        dots: false,
        autoplay: false,
        speed: 1500,
        autoplaySpeed: 1500,
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '100px',
        responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: true,
            }
        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
            }
        }
        ]
    });
});


$(window).on('load', function () {
   
        wow = new WOW({ mobile: false, })
        wow.init();
    
});

//home view full menu
 jQuery(".toggle_menu a").click(function () {     
     jQuery('.view-full-menu .home_cat_menu').slideToggle();
     jQuery(this).toggleClass('in');
 });

 $(".scroll-down").click(function () {
     $('html, body').animate({
         scrollTop: $(".homepage-section2").offset().top
     }, 1500);
 });