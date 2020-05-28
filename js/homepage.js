/**
 * homepage only scripts
 *
 */

;(function ($) {

    // init hero slider
    let $hero_slider = $('.hero');
    let $hero_settings = {
        adaptiveHeight: true,
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>'
    };
    $hero_slider.slick($hero_settings);

    // init actus slider
    let $actus_slider = $('.actus');
    let $actus_settings = {
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        mobileFirst: true,
        responsive: [{
            breakpoint: 767,
            settings: 'unslick'
        }]
    };
    if ($(window).width() < 768) {
        $actus_slider.slick($actus_settings);
    }

    // init events slider
    let $events_slider = $('.evenements');
    let $events_settings = {
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
        adaptiveHeight: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        mobileFirst: true,
        responsive: [{
            breakpoint: 767,
            settings: 'unslick'
        }]
    };
    if ($(window).width() < 768) {
        $events_slider.slick($events_settings);
    }

    // "reslick" the sliders on window resize
    $(window).on('resize', function () {
        if ($(window).width() < 768) {
            if (!$actus_slider.hasClass('slick-initialized')) {
                $actus_slider.slick($actus_settings);
            }
            if (!$events_slider.hasClass('slick-initialized')) {
                $events_slider.slick($events_settings);
            }
        } else {
            if ($actus_slider.hasClass('slick-initialized')) {
                $actus_slider.slick('unslick');
            }
            if ($events_slider.hasClass('slick-initialized')) {
                $events_slider.slick('unslick');
            }
        }
    });

    // campus
    let $campus = $('.campus-wrapper');
    $campus.on('mouseenter', '#campus-lille', function () {
        $(this).parent().removeClass('onleft').addClass('onright');
    });
    $campus.on('mouseenter', '#campus-paris', function () {
        $(this).parent().removeClass('onright').addClass('onleft');
    });

    // init profile slider
    let $profile_slider = $('.profile');
    let $profile_settings = {
        autoplay: false,
        arrows: false,
        dots: false,
        appendDots: '#profile-dots'
    };
    $profile_slider.slick($profile_settings);
    $('.profile-dots li').on('mouseover', function() {
        $profile_slider.slick('goTo', $(this).index());
    });


    // init testimonials slider
    let $testi_slider = $('.testimonials');
    let $testi_settings = {
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
        infinite: true,
        adaptiveHeight: true,
        slidesToShow: 1,
        slidesToScroll: 1
    };
        $testi_slider.slick($testi_settings);

})(jQuery);