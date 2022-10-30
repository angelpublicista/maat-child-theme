jQuery(function ($) {
	$('.maat-recursos-recientes').slick({
        slidesToShow: 3,
        centerMode: true,
        centerPadding: "70px",
        prevArrow: '<button class="maat-btn-prev"><i class="ri-arrow-left-s-line"></i></button>',
        nextArrow: '<button class="maat-btn-next"><i class="ri-arrow-right-s-line"></i></button>',
        autoplay: true,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                slidesToShow: 2,
                slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: false
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    })
});