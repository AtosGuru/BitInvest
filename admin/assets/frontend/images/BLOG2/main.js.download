(function ($) {
    //Strict mood enabled
    "use strict";

    $('.partner-carousel').slick({
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        centerMode: true,
        slidesToShow: 6,
        responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
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

    
    $('.stats-carousel').slick({
        slidesToScroll: 4,
        autoplay: true,
        arrows: false,
        centerMode: true,
        slidesToShow: 6,
        slidesToScroll: 6,
        responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
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

    $('.team-carousel').slick({
        slidesToScroll: 3,
        autoplay: true,
        arrows: false,
        centerMode: true,
        slidesToShow: 3,
        centerPadding: '0',
        responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
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
    
    $('.testimonials').slick({
        slidesToScroll: 3,
        autoplay: true,
        arrows: false,
        centerMode: true,
        slidesToShow: 3,
        centerPadding: '0',
        responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
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
    
    //Navbar Srink
    $(window).on('scroll', function () {
        if ($(document).scrollTop() > 85) {
            $('.navbar').addClass('shrink');
        } else {
            $('.navbar').removeClass('shrink');
        }
    });
    //CountTo
    $('.count').counterUp({
        delay: 10,
        time: 1000
    });

    //Page Smooth Scroll
    smoothScroll.init({
        selector: '[data-scroll]',
        selectorHeader: null,
        speed: 1000,
        easing: 'easeInQuint',
        offset: 0,
        callback: function (anchor, toggle) {}
    });

    //Back to top

    $(window).on('scroll', function () {
        if ($(this).scrollTop() >= 700) {
            $('#backtotop').fadeIn(500);
        } else {
            $('#backtotop').fadeOut(500);
        }
    });

    $('#backtotop').on('click', function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
    });



    // Isotop
    $(window).on('load',function () {
        $('.grid').isotope({
            itemSelector: '.grid-item',
            layoutMode: 'fitRows',
            animationOptions: {
                duration: 2000,
                easing: 'linear',
                queue: false
            }
        });
    });
    
    $('.portfolio-btn').on('click', 'li', function () {
        var filterValue = $(this).attr('data-filter');
        $('.grid').isotope({
            filter: filterValue
        });
    });

    // Color Preset
    if ($(".rishad_switcher_zone").length > 0)
    {
        if ($(".stopped-color").length > 0) {
            $(".stopped-color").on("click", function () {
                var grcolors = $(this).attr("href");
                $("#grad_triggerColor").attr("href", "assets/css/colors/gradient/" + grcolors + ".css");
            });
        }
        //switcher 
        var switchs = true;
        $(".settingBtn").on("click", function (e)
        {
            e.preventDefault();
            if (switchs)
            {
                $(this).addClass("active");
                $(".rishad_switcher_zone").animate({"right": "0px"}, 400);
                switchs = false;
            }
            else
            {
                $(this).removeClass("active");
                $(".rishad_switcher_zone").animate({"right": "-290px"}, 400);
                switchs = true;
            }
        });
        //gradient
        if ($("#grad_actionColors a").length > 0)
        {
            $("#grad_actionColors a").on("click", function (e)
            {
                e.preventDefault();
                var grcolor = $(this).attr("href");
                $("#grad_actionColors a").removeClass("active");
                $(this).addClass("active");
                $("#grad_triggerColor").attr("href", "assets/css/colors/gradient/" + grcolor + ".css");
                // changeMarker("img/contact/location-" + grcolor + ".png");
            });
        }
        //Normal
        if ($("#actionColors a").length > 0)
        {
            $("#actionColors a").on("click", function (e)
            {
                e.preventDefault();
                var color = $(this).attr("href");
                $("#actionColors a").removeClass("active");
                $(this).addClass("active");
                $("#triggerColor").attr("href", "assets/css/colors/solid/" + color + ".css");
                // changeMarker("img/contact/location-" + color + ".png");
            });
        }
    }
    
})(jQuery);


//Lazy Load Images after page has loaded
window.addEventListener('load', function(){
    var allimages= document.getElementsByTagName('img');
    for (var i=0; i<allimages.length; i++) {
        if (allimages[i].getAttribute('data-src')) {
            allimages[i].setAttribute('src', allimages[i].getAttribute('data-src'));
        }
    }
}, false);