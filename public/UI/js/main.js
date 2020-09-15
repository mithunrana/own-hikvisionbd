$(document).ready(function () {
    /*main slider owl-carousel*/
    $('.owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        autoplay: true,
        autoplaySpeed: 2500,
        smartSpeed: 2500,
        dots: false,
    });

    /*product slider*/
    $('.product-slider').slick({
        slidesToShow: 3,
        slidesToScrool: 3,
        dots: true,
        autoplay: false,
        arrows: false,
        margin: 10,
        autoplay: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
                    },
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
                    slidesToScroll: 1
                }
                    }
                ]
    });


    /*nav search*/
    $('.nav-search').click(function () {
        $(".nav-search-box").toggleClass("search-box");
    });

    $(document).ready(function () {
        $(".menu-icon").click(function () {
            $(".menu-icon").toggleClass("active");
            $(".mobile-menu").toggleClass("active");
        });
    });
   /* accordion*/
    

});
