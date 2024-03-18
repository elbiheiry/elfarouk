/*Nav Bar
==============================*/
$(document).ready(function () {
    "use strict";
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('header').addClass("move");
        } else {
            $('header').removeClass("move");   
        }  
    });
});

/* Toggle Icon
==============================*/
$(document).ready(function() {
    "use strict";
    $('header .icon-bar').click(function() {
        $("aside").addClass("move");
    });
    $('aside .icon-btn').click(function() {
        $('aside').removeClass('move');
    });
});


/*Parallax
==========================*/
$(document).ready(function() {
    "use strict";
    var scene = document.getElementById('move-img');
    if (scene) {
        var parallax = new Parallax(scene);
    }
});

/*Smooth Scroll
================================*/
$(document).ready(function () {
    "use strict";
    function goToByScroll(id) {
        $('html , body').animate({
            scrollTop: $(id).offset().top
        }, 'slow');
    }
    $('.scroll-link').click(function () {
        goToByScroll($(this).attr('href'));
        return false;
    });
});

/* Products 
========================*/
$(document).ready(function () {
    "use strict";
    $(".products").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        rtl: true ,
        smartSpeed: 3000,
        autoplayHoverPause: true,
        margin: 0,
        navText: ['<i class="fas fa-long-arrow-alt-left"></i>', '<i class="fas fa-long-arrow-alt-right"></i>'],
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 1
            },
            991: {
                items: 1
            },
            1400: {
                items: 1
            }
            
        }
    });
});

/* Gallery
=================================*/
$(document).ready(function () {
    "use strict";
    $('[data-fancybox="gallery"]').fancybox({
        keyboard: true,
        protect: true,
        arrows: true,
        infobar: true,
        buttons : [ 
            'slideShow',
            'share',
            'zoom',
            'fullScreen', 
            'thumbs' ,
            'close' 
        ],
        thumbs : {
            autoStart : true
        }
    });
    $('[data-fancybox]').fancybox({
        youtube : {
            controls : 0,
            showinfo : 0
        }
    });
});
    
/*Loading
==========================*/
$(window).on("load", function () {
    "use strict";
    $(".loader-cont").fadeOut(function () {
        $(this).parent().fadeOut();
        $("body").css({"overflow-y" : "visible"});
    });
});