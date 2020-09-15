<!--jquery.min.js-->
<script src="{{asset('')}}UI/js/jquery-3.4.1.min.js"></script>
<!--popper.min.js-->
<script src="{{asset('')}}UI/js/popper.min.js"></script>
<!--bootstrap.min.js-->
<script src="{{asset('')}}UI/js/bootstrap.min.js"></script>
<!--main.js-->
<script src="{{asset('')}}UI/js/main.js"></script>
<!--slick.js-->
<script src="{{asset('')}}UI/js/slick.js"></script>
<!--owl.carousel.js-->
<script src="{{asset('')}}UI/js/owl.carousel.js"></script>
<!--wow.js-->
<!--<script src="{{asset('')}}UI/js/wow.min.js"></script>-->
<!--waypoints.min.js-->
<script src="{{asset('')}}UI/js/jquery.waypoints.min.js"></script>
<!--counterup.min.js-->
<script src="{{asset('')}}UI/js/jquery.counterup.min.js"></script>
<!--uikit-icons.js-->
<script src="{{asset('')}}UI/js/uikit-icons.js"></script>
<!--uikit.min.js-->
<script src="{{asset('')}}UI/js/uikit.min.js"></script>
<script src="{{asset('')}}UI/js/thestickysidebar.js"></script>
<script>
    $(document).ready(function() {

        /*nav search*/
        $('.web-search').click(function() {
            $(".search-item").toggleClass("search-box");
        });

        /*Show category*/
        $('.cat-btn').click(function() {
            $(".product-category").toggleClass('cat-show');
        });

    });
</script>

<script>
    //////////Product slider
    $(document).ready(function() {
        $('.products-slider').slick({
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            arrows: true,
            nextArrow: $('.nxt'),
            prevArrow: $('.prv'),
            dots: true,
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
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });

</script>
<script>
    //////////Discover slider
    $(document).ready(function() {
        $('.discover-slider').slick({
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            arrows: true,
            nextArrow: $('.nxt-disc'),
            prevArrow: $('.prv-disc'),
            dots: true,
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
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });

</script>
<script>
    //////////Solution slider
    $(document).ready(function() {
        $('.solution-slider').slick({
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            arrows: true,
            nextArrow: $('.nxt-slsn'),
            prevArrow: $('.prv-slsn'),
            dots: true,
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
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });

</script>
<script>
    //////////news slider
    $(document).ready(function() {
        $('.news-slider').slick({
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: true,
            vertical: true,
            nextArrow: $('.nxt-news'),
            prevArrow: $('.prv-news'),
            dots: true,
        });
    });

</script>
<script>
    //////////news slider
    $(document).ready(function() {
        $('.events-slider').slick({
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: true,
            vertical: true,
            nextArrow: $('.nxt-events'),
            prevArrow: $('.prv-events'),
            dots: true,
        });
    });
</script>


<script>
    $(document).ready(function(){
        $('.left-bar').theiaStickySidebar();
    });
</script>


<script>
    $(document).ready(function() {
        /*mobile-menu-click*/
        $('.mmenu-btn').click(function() {
            $(this).toggleClass("menu-link-active");
        });
    });
</script>

<script>
    $(document).ready(function() {
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function() {
            $(this).prev(".menu-link").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });

        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function() {
            $(this).prev(".menu-link").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function() {
            $(this).prev(".menu-link").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });

        /*mobile-menu-click*/
        $('.mmenu-btn').click(function() {
            $(this).toggleClass("menu-link-active");
        });
    });
</script>


<script>
    $(document).ready(function() {
        $(".collapse.show").each(function() {
            $(this).prev(".cat-item").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        $(".collapse").on('show.bs.collapse', function() {
            $(this).prev(".cat-item").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function() {
            $(this).prev(".cat-item").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });
</script>


<script>
    $(document).ready(function() {
        $(".collapse.show").each(function() {
            $(this).prev(".menu-link").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        $(".collapse").on('show.bs.collapse', function() {
            $(this).prev(".menu-link").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function() {
            $(this).prev(".menu-link").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
        $('.mmenu-btn').click(function() {
            $(this).toggleClass("menu-link-active");
        });
    });
</script>