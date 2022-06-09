jQuery(function($){  $('.hero-container').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows : false
})});

jQuery(function($){  $('.info-container').slick({
        slidesToShow: 3,
        arrows : false,
        responsive: [{
                breakpoint: 1680,
                settings: {
                  slidesToShow: 2,
                }
              },
              {
                breakpoint: 1100,
                settings: {
                  slidesToShow: 1,
                }
              }
            ]
})});