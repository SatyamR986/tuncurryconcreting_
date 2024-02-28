$(document).ready(function() {

    // Header Fixed on Scroll
    $(window).on("load resize scroll", function() {
        var sticky = $(".header"),
            scroll = $(window).scrollTop();

        if (scroll >= 150) sticky.addClass("fixed-header");
        else sticky.removeClass("fixed-header");
    });

    // banner slider
    $(".banner .banner-wrapper").slick({
        prevArrow: "<span class='slick-arrow left'><i class='icon icon-arrow-left'></i></slick>",
        nextArrow: "<span class='slick-arrow right'><i class='icon icon-arrow-right'></i></slick>",
        arrows: true,
        autoplay: true,
        fade: true,
        slidesToShow: 1,
        dots: false,
        pauseOnHover: false,
        autoplaySpeed: 3000,
        speed: 1000,
        responsive: [{
            breakpoint: 768,
            settings: {
                arrows: false,
                dots: true,
            }
        }]
    });

    $(window).resize(function() {
        $(".banner .banner-wrapper").slick("resize");
    });

    //Gallery Section

    $(".gallery .gallery-wrapper").magnificPopup({
        delegate: "a",
        type: "image",
        mainClass: "mfp-with-zoom mfp-img-mobile",
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300
        }
    });



    // $(".gallery-section .section-wrapper .wrap-up .gallery").magnificPopup({
    //     delegate: "a",
    //     type: "image",
    //     mainClass: "mfp-with-zoom mfp-img-mobile",
    //     gallery: {
    //         enabled: true
    //     },
    //     zoom: {
    //         enabled: true,
    //         duration: 300
    //     }
    // });


    // testimonial slider
    $(".testimonial .testimonial-wrapper").slick({
        prevArrow: "<span class='slick-arrow left'><i class='icon icon-arrow-left'></i></slick>",
        nextArrow: "<span class='slick-arrow right'><i class='icon icon-arrow-right'></i></slick>",
        arrows: true,
        autoplay: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        pauseOnHover: false,
        autoplaySpeed: 3000,
        speed: 1000,
        responsive: [{
            breakpoint: 768,
            settings: {
                arrows: false,
                slidesToShow: 1,
                dots: true,
            }
        }]
    });

    $(window).resize(function() {
        $(".testimonial .testimonial-wrapper").slick("resize");
    });


    
    wow = new WOW(
        {
        boxClass:     'wow',      // default
        animateClass: 'animated', // default
        offset:       0,          // default
        mobile:       true,       // default
        live:         true        // default
      }
      )
      wow.init();
});

// $(document).ready(function($) {

//     var $container = $(".gallery-wrapper");

//     $container.isotope({

//         filter: "*",

//         animationOptions: {

//             duration: 750,

//             easing: "linear",

//             queue: false

//         }

//     });



// $(".galleryFilter a").click(function() {

//     $(".galleryFilter .current").removeClass("current");

//     $(this).addClass("current");



//     var selector = $(this).attr("data-filter");

//     $container.isotope({

//         filter: selector,

//         animationOptions: {

//             duration: 750,

//             easing: "linear",

//             queue: false

//         }

//     });

//     return false;

// });
// });