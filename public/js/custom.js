$(document).ready(function () {

    // Close Navbar if click outside it
    $(document).click(function (event) {
        var clickover = $(event.target);
        var _opened = $(".navbar-collapse").hasClass("collapse in");
        if (_opened === true && !clickover.hasClass("navbar-toggle")) {
            $("button.navbar-toggle").click();
        }
    });

    // Navbar Affix
    var affixElement = '#navbar_corner';
    var logoContainer = $('.logo_container');

    $(affixElement).affix({
        offset: {
            // Distance of between element and top page
            top: function () {
                return (this.top = $(affixElement).offset().top)
            }
            //,
            // when start #footer
            // bottom: function () {
            //   return (this.bottom = $('#footer').outerHeight(true))
            // }
        }
    });

    if($(affixElement).hasClass('affix')) {
        logoContainer.addClass( 'logo_container_affixed' );
    }

    $(affixElement).on( 'affix-top.bs.affix', function () {
        logoContainer.removeClass( 'logo_container_affixed' );
    } );

    $(affixElement).on( 'affix.bs.affix', function () {
        logoContainer.addClass( 'logo_container_affixed' );
    } );


    // ScrollTo
    if ($(".president_msg").length) {
        if ($(window).width() > 767) {
            var fixHeight = $(".navbar_corner").height();
        } else {
            fixHeight = 0;
        }

        $(".btn_scroll").click(function() {
            console.log(fixHeight);
            $('html, body').animate({
                scrollTop: $(".president_msg").offset().top - fixHeight
            }, 800);
        });
    }

    // Multi Carousel
    // Instantiate the Bootstrap carousel
    $('.multi-item-carousel').carousel({
//            interval: false
    });

    // for every slide in carousel, copy the next slide's item in the slide.
    // Do the same for the next, next item.
    $('.multi-item-carousel .item').each(function(){
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

//            if (next.next().length>0) {
//                next.next().children(':first-child').clone().appendTo($(this));
//            } else {
//                $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
//            }
    });


    $('.multi-item-carousel .carousel-inner').height($('.carousel-inner .item_wrapper').height());
    $( window ).resize(function() {
        $('.multi-item-carousel .carousel-inner').height($('.carousel-inner .item_wrapper').height());
    });
});
