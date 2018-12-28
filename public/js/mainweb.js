(function ($) {
"use strict";
$(window).load(function() {
	$(".preloader").fadeOut("slow");;
});

/*--
	Mobile Menu
------------------------*/
$('.mobile-menu nav').meanmenu({
	meanScreenWidth: "990",
	meanMenuContainer: ".mobile-menu",
});
/*--
	Magnific Popup
------------------------*/
$('.sin-photo a').magnificPopup({
	type: 'image',
	mainClass: 'mfp-fade',
	removalDelay: 160,
	preloader: false,
	gallery: {
		enabled: true,
		navigateByImgClick: true,
	},
	zoom: {
		enabled: true,
	}
});
/*--
	Owl Carousel
------------------------*/
$('.category-search-slider').owlCarousel({
    loop: true,
    dots: false,
    nav: true,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    margin: 30,
    responsive: {
        1200:{
            items:4
        },
        970:{
            items:3
        },
        768:{
            items:2
        },
        0:{
            items:1
        },
    }
})
$('.location-search-slider').owlCarousel({
    loop: true,
    dots: false,
    nav: true,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    margin: 7,
    responsive: {
        1200:{
            items:4
        },
        970:{
            items:3
        },
        768:{
            items:2,
        },
        0:{
            items:1,
        },
    }
})
$('.recently-added-slider').owlCarousel({
    loop: true,
    dots: false,
    nav: true,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    margin: 30,
    responsive: {
        1200:{
            items:3
        },
        970:{
            items:3
        },
        768:{
            items:2,
        },
        0:{
            items:1,
        },
    }
})
$('.our-offer-slider').owlCarousel({
    items:1,
    loop: true,
    dots: false,
    nav: true,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    margin: 30,
})
/*--
	Tooltip
------------------------*/
$('.business-social a').tooltip()
/*--
	Scroll Up
------------------------*/
$.scrollUp({
	easingType: 'linear',
	scrollSpeed: 900,
	animation: 'fade',
	scrollText: '<i class="zmdi zmdi-chevron-up"></i>',
});

})(jQuery);	