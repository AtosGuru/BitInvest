/**
 *
 * ---------------------------------------------------------------------------
 *
 * Template :    MAMA Host
 * Author :      Ideal Brothers
 * Author URI :  
 * Version :     1.0
 *
 * --------------------------------------------------------------------------- 
 *
 */


/* Custom Js (Jquery) */


jQuery(function ($) {'use strict';

    $(document).ready(function () {


        // Our client's carousel setup... (OWL carousel)
        var clientsCarousel =$("#client-carousel")
        clientsCarousel.owlCarousel({
            items: 6,
            autoplay: true,
            loop: true,
            margin: 15,
            nav: true,
            navText: ['<span class="fa fa-angle-double-left"></span>', '<span class="fa fa-angle-double-right"></span>'],
            responsive:{
                0:{
                    items:1,
                },
                767:{
                    items:3,
                },
                991:{
                    items:5,
                },
                1200: {
                    items: 6,
                },
            }
        });
        // Count Down Setup...
        var count = $('.count');
        count.counterUp({
            delay: 20,
            time: 1500
        });

        // Testimonial Carousel Setup...
        var testimonilaCarousel = $(".testi-carousel");
        testimonilaCarousel.owlCarousel({
            autoplay: true,
            autoplayHoverPause: true,
            items : 1,
            loop: true,
            dots: true,
            responsive:{
                0:{
                    items: 1,
                },
                991:{
                    items: 1,
                },
                1200: {
                    items: 1,
                },
            },
            margin: 0
        });

        var dropdownIn = $('.dropdown-in');
        $(document).on('mouseover',dropdownIn,function(){
            $(this).toggleClass('active');
   
        });
        var navbarNavbarDefaultHamburger = $('.navbar .navbar-toggle.hamburger');
        $(document).on('click',navbarNavbarDefaultHamburger,function(){
            $(this).toggleClass('rotate');
        });
        var dropdownInAnchor = $('.dropdown-in a');
        $(document).on('click',dropdownInAnchor,function(e){
            e.stopPropagation();
        });





        // Adjust the slider height...
        var sliderItem =$('#slider .item');
        sliderItem.height($('#slider').height());



        // Footer newsletter input focus animation...
        var footerNewLatterInput = $('#footer .newsletter input');
        footerNewLatterInput.focus(function () {
            $(this).parent().addClass('focus');
        });
        footerNewLatterInput.focusout(function () {
            $(this).parent().removeClass('focus');
        });



        // Back to top button setup..
        var bacToTop = $('.back-to-top');
        $(document).on('click','.back-to-top',function(e){
            e.preventDefault();
            $("html, body").animate({
                scrollTop: 0
            }, 1000);
        });
        




        // Slider Pricing System setup...
        // Adjust These Arrays value with your pricing plans.... Your can add more values or can reduce them...
        var processor = ['1.4GHz', '2.1 GHz', '3.4 GHz', '3.8 GHz', '4.1 GHz', '4.3 GHz'];
        var ram = ['1 GB', '2 GB', '3 GB', '4 GB', '8 GB', '16 GB'];
        var vSwap = ['1 GB', '2 GB', '3 GB', '4 GB', '8 GB', '16 GB'];
        var storage = ['10 GB', '30 GB', '50 GB', '100 GB', '200 GB', '500 GB'];
        var bandWidth = ['20 GB', '50 GB', '100 GB', '500 GB', '1000 GB', '5000 GB'];
        var ip = [1,2,3,4,5,6];
        var price = [19.99,29.99,39.99,49.99,59.99,89.99];

        var pricingSlider = $('#pricing-slider');
        pricingSlider.slider({
            range: 'min',
            min: 1,
            max: 6,     // Input your maximum pricing options here..
            value: 2,
            animate: true,
            slide: function( event, ui ) {
                var prossecorValue = $('#pricing-2 .info-item.processor .value');
                prossecorValue.html(processor[ui.value - 1]);
                var ramValue = $('#pricing-2 .info-item.ram .value');
                ramValue.html(ram[ui.value - 1]);
                var vSwapValue = $('#pricing-2 .info-item.vswap .value');
                vSwapValue.html(vSwap[ui.value - 1]);
                var storageValue = $('#pricing-2 .info-item.storage .value');
                storageValue.html(storage[ui.value - 1]);
                var bandWithValue = $('#pricing-2 .info-item.bandw .value');
                bandWithValue.html(bandWidth[ui.value - 1]);
                var ipValue = $('#pricing-2 .info-item.ip .value');
                ipValue.html(ip[ui.value - 1]);
                var priceValue = $('#pricing-2 .order-button .price');
                priceValue.html('$' + price[ui.value - 1]);
            }
        });



        // Rotated text in footer...
        var footerContactTopText = $('#footer .contact-top .item h5');
        footerContactTopText.arctext({
            radius: 65,
        });
        

            //slider animation
            function doAnimations(elems) {
                var animEndEv = 'webkitAnimationEnd animationend';
                elems.each(function () {
                    var $this = $(this),
                        $animationType = $this.data('animation');
                    $this.addClass($animationType).one(animEndEv, function () {
                        $this.removeClass($animationType);
                    });
                });
            }
            var $myCarousel = $('#header-carousel'),
                $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

            $myCarousel.carousel();
            doAnimations($firstAnimatingElems);
            $myCarousel.carousel('pause');

            $myCarousel.on('slide.bs.carousel', function (e) {
                var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
                doAnimations($animatingElems);
            });



        // // Color swithcer...
        // var cOne = $('.cs .c1 button');
        // cOne.click(c1);
        // var cTwo = $('.cs .c2 button');
        // cTwo.click(c2);
        // var cThree = $('.cs .c3 button');
        // cThree.click(c3);
        // var cFour = $('.cs .c4 button');
        // cFour.click(c4);
        // var cFive = $('.cs .c5 button');
        // cFive.click(c5);
        // var cSix = $('.cs .c6 button');
        // cSix.click(c6);
        // var cSeven = $('.cs .c7 button');
        // cSeven.click(c7);
        // var cEight = $('.cs .c8 button');
        // cEight.click(c8);
        // var cNine = $('.cs .c9 button');
        // cNine.click(c9);
        // var cTen = $('.cs .c10 button');
        // cTen.click(c10);
        // var cEleven = $('.cs .c11 button');
        // cEleven.click(c11);
        // var cTwoelve = $('.cs .c12 button');
        // cTwoelve.click(c12);


        // function c1() {
        //     $('body').attr('class', 'color-1');
        // }
        // function c2() {
        //     $('body').attr('class', 'color-2');
        // }
        // function c3() {
        //     $('body').attr('class', 'color-3');
        // }
        // function c4() {
        //     $('body').attr('class', 'color-4');
        // }
        // function c5() {
        //     $('body').attr('class', 'color-5');
        // }
        // function c6() {
        //     $('body').attr('class', 'color-6');
        // }
        // function c7() {
        //     $('body').attr('class', 'color-7');
        // }
        // function c8() {
        //     $('body').attr('class', 'color-8');
        // }
        // function c9() {
        //     $('body').attr('class', 'color-9');
        // }
        // function c10() {
        //     $('body').attr('class', 'color-10');
        // }
        // function c11() {
        //     $('body').attr('class', 'color-11');
        // }
        // function c12() {
        //     $('body').attr('class', 'color-12');
        // }


        var count = $('.cs-main').outerWidth();
        $('.cs').css('left',-count);
        
        $(document).on('click','.cs .icon',function(){
             $('.cs').toggleClass('on');
        });



    });
        $(window).scroll(function() {
            var bacToTop = $('.back-to-top');
            if ($(this).scrollTop() > 2100) {
                bacToTop.fadeIn();
            } else {
                bacToTop.fadeOut();
            }
        });

});

/////////////////////////////////////////////////////////////////////////////////////////////////////////////
