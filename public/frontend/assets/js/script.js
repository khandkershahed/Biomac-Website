(function($) {

	"use strict";

	//Hide Loading Box (Preloader)
	function handlePreloader() {
		if($('.loader-wrap').length){
			$('.loader-wrap').delay(500).fadeOut(200);
		}
	}

	if ($(".preloader-close").length) {
        $(".preloader-close").on("click", function(){
            $('.loader-wrap').delay(200).fadeOut(500);
        })
    }

	//Update Header Style and Scroll to Top
	function headerStyle() {
		if($('.main-header').length){
			var windowpos = $(window).scrollTop();
			var siteHeader = $('.main-header');
			var scrollLink = $('.scroll-top');
			if (windowpos >= 110) {
				siteHeader.addClass('fixed-header');
				scrollLink.addClass('open');
			} else {
				siteHeader.removeClass('fixed-header');
				scrollLink.removeClass('open');
			}
		}
	}

	headerStyle();


	//Submenu Dropdown Toggle
	if($('.main-header li.dropdown ul').length){
		$('.main-header .navigation li.dropdown').append('<div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>');

	}

	//Mobile Nav Hide Show
	if($('.mobile-menu').length){

		$('.mobile-menu .menu-box').mCustomScrollbar();

		var mobileMenuContent = $('.main-header .menu-area .main-menu').html();
		$('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent);
		$('.sticky-header .main-menu').append(mobileMenuContent);

		//Dropdown Button
		$('.mobile-menu li.dropdown .dropdown-btn').on('click', function() {
			$(this).toggleClass('open');
			$(this).prev('ul').slideToggle(500);
		});
		//Dropdown Button
		$('.mobile-menu li.dropdown .dropdown-btn').on('click', function() {
			$(this).prev('.megamenu').slideToggle(900);
		});
		//Menu Toggle Btn
		$('.mobile-nav-toggler').on('click', function() {
			$('body').addClass('mobile-menu-visible');
		});

		//Menu Toggle Btn
		$('.mobile-menu .menu-backdrop,.mobile-menu .close-btn').on('click', function() {
			$('body').removeClass('mobile-menu-visible');
		});
	}


	// Scroll to a Specific Div
	if($('.scroll-to-target').length){
		$(".scroll-to-target").on('click', function() {
			var target = $(this).attr('data-target');
		   // animate
		   $('html, body').animate({
			   scrollTop: $(target).offset().top
			 }, 1000);

		});
	}

	// Elements Animation
	if($('.wow').length){
		var wow = new WOW({
		mobile:       false
		});
		wow.init();
	}

	//Contact Form Validation
	if($('#contact-form').length){
		$('#contact-form').validate({
			rules: {
				username: {
					required: true
				},
				email: {
					required: true,
					email: true
				},
				// phone: {
				// 	required: true
				// },
				subject: {
					required: true
				},
				message: {
					required: true
				}
			}
		});
	}

	//Fact Counter + Text Count
	if($('.count-box').length){
		$('.count-box').appear(function(){

			var $t = $(this),
				n = $t.find(".count-text").attr("data-stop"),
				r = parseInt($t.find(".count-text").attr("data-speed"), 10);

			if (!$t.hasClass("counted")) {
				$t.addClass("counted");
				$({
					countNum: $t.find(".count-text").text()
				}).animate({
					countNum: n
				}, {
					duration: r,
					easing: "linear",
					step: function() {
						$t.find(".count-text").text(Math.floor(this.countNum));
					},
					complete: function() {
						$t.find(".count-text").text(this.countNum);
					}
				});
			}

		},{accY: 0});
	}


	//LightBox / Fancybox
	if($('.lightbox-image').length) {
		$('.lightbox-image').fancybox({
			openEffect  : 'fade',
			closeEffect : 'fade',
			helpers : {
				media : {}
			}
		});
	}


	//Tabs Box
	if($('.tabs-box').length){
		$('.tabs-box .tab-buttons .tab-btn').on('click', function(e) {
			e.preventDefault();
			var target = $($(this).attr('data-tab'));

			if ($(target).is(':visible')){
				return false;
			}else{
				target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
				$(this).addClass('active-btn');
				target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
				target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab');
				$(target).fadeIn(100);
				$(target).addClass('active-tab');
			}
		});
	}



	//Accordion Box
	if($('.accordion-box').length){
		$(".accordion-box").on('click', '.acc-btn', function() {

			var outerBox = $(this).parents('.accordion-box');
			var target = $(this).parents('.accordion');

			if($(this).hasClass('active')!==true){
				$(outerBox).find('.accordion .acc-btn').removeClass('active');
			}

			if ($(this).next('.acc-content').is(':visible')){
				return false;
			}else{
				$(this).addClass('active');
				$(outerBox).children('.accordion').removeClass('active-block');
				$(outerBox).find('.accordion').children('.acc-content').slideUp(300);
				target.addClass('active-block');
				$(this).next('.acc-content').slideDown(300);
			}
		});
	}


	// banner-carousel
	if ($('.banner-carousel').length) {
        $('.banner-carousel').owlCarousel({
            loop:true,
			margin:0,
			nav:true,
			animateOut: 'fadeOut',
    		animateIn: 'fadeIn',
    		active: true,
			smartSpeed: 1000,
			autoplay: 6000,
            navText: [ '<span class="flaticon-left-arrow"></span>', '<span class="flaticon-right-arrow"></span>' ],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                800:{
                    items:1
                },
                1024:{
                    items:1
                }
            }
        });
    }


    // single-item-carousel
	if ($('.single-item-carousel').length) {
		$('.single-item-carousel').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			smartSpeed: 500,
			autoplay: 1000,
			navText: [ '<span class="flaticon-left-arrow"></span>', '<span class="flaticon-right-arrow"></span>' ],
			responsive:{
				0:{
					items:1
				},
				480:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:1
				},
				1200:{
					items:1
				}

			}
		});
	}


	// two-item-carousel
	if ($('.two-item-carousel').length) {
		$('.two-item-carousel').owlCarousel({
			loop:true,
			margin:80,
			nav:true,
			smartSpeed: 500,
			autoplay: 1000,
			navText: [ '<span class="icon-16"></span>', '<span class="icon-15"></span>' ],
			responsive:{
				0:{
					items:1
				},
				480:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:2
				},
				1200:{
					items:2
				}

			}
		});
	}


    // three-item-carousel
	if ($('.three-item-carousel').length) {
		$('.three-item-carousel').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			smartSpeed: 500,
			autoplay: 1000,
			navText: [ '<span class="flaticon-left-arrow"></span>', '<span class="flaticon-right-arrow"></span>' ],
			responsive:{
				0:{
					items:1
				},
				480:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:2
				},
				1200:{
					items:3
				}

			}
		});
	}


	// four-item-carousel
	if ($('.four-item-carousel').length) {
		$('.four-item-carousel').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			smartSpeed: 500,
			autoplay: 1000,
			navText: [ '<span class="flaticon-left-arrow"></span>', '<span class="flaticon-right-arrow"></span>' ],
			responsive:{
				0:{
					items:1
				},
				480:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:3
				},
				1200:{
					items:4
				}

			}
		});
	}


	// five-item-carousel
	if ($('.five-item-carousel').length) {
		$('.five-item-carousel').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			smartSpeed: 500,
			autoplay: 1000,
			navText: [ '<span class="fal fa-angle-left"></span>', '<span class="fal fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				480:{
					items:2
				},
				600:{
					items:3
				},
				800:{
					items:4
				},
				1200:{
					items:5
				}

			}
		});
	}


	if($('.timer').length){
	   $(function(){
		    $('[data-countdown]').each(function() {
		   var $this = $(this), finalDate = $(this).data('countdown');
		   $this.countdown(finalDate, function(event) {
		     $this.html(event.strftime('%D days %H:%M:%S'));
		   });
		 });
		});

	   $('.cs-countdown').countdown('').on('update.countdown', function(event) {
		  var $this = $(this).html(event.strftime('<div class="count-col"><span>%D</span><h6>days</h6></div> <div class="count-col"><span>%H</span><h6>Hrs</h6></div> <div class="count-col"><span>%M</span><h6>Mins</h6></div> <div class="count-col"><span>%S</span><h6>Secs</h6></div>'));
		});
	}



	//Add One Page nav
	if($('.scroll-nav').length) {
		$('.scroll-nav').onePageNav();
	}

	//Sortable Masonary with Filters
	function enableMasonry() {
		if($('.sortable-masonry').length){

			var winDow = $(window);
			// Needed variables
			var $container=$('.sortable-masonry .items-container');
			var $filter=$('.filter-btns');

			$container.isotope({
				filter:'*',
				 masonry: {
					columnWidth : '.masonry-item.small-column'
				 },
				animationOptions:{
					duration:500,
					easing:'linear'
				}
			});


			// Isotope Filter
			$filter.find('li').on('click', function(){
				var selector = $(this).attr('data-filter');

				try {
					$container.isotope({
						filter	: selector,
						animationOptions: {
							duration: 500,
							easing	: 'linear',
							queue	: false
						}
					});
				} catch(err) {

				}
				return false;
			});


			winDow.on('resize', function(){
				var selector = $filter.find('li.active').attr('data-filter');

				$container.isotope({
					filter	: selector,
					animationOptions: {
						duration: 500,
						easing	: 'linear',
						queue	: false
					}
				});
			});


			var filterItemA	= $('.filter-btns li');

			filterItemA.on('click', function(){
				var $this = $(this);
				if ( !$this.hasClass('active')) {
					filterItemA.removeClass('active');
					$this.addClass('active');
				}
			});
		}
	}

	enableMasonry();


    // Progress Bar
	if ($('.count-bar').length) {
		$('.count-bar').appear(function(){
			var el = $(this);
			var percent = el.data('percent');
			$(el).css('width',percent).addClass('counted');
		},{accY: -50});

	}


	//Price Range Slider
	if($('.price-range-slider').length){
		$( ".price-range-slider" ).slider({
			range: true,
			min: 10,
			max: 99,
			values: [ 10, 60 ],
			slide: function( event, ui ) {
			$( "input.property-amount" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
			}
		});

		$( "input.property-amount" ).val( $( ".price-range-slider" ).slider( "values", 0 ) + " - $" + $( ".price-range-slider" ).slider( "values", 1 ) );
	}


	if ($('.shop-details .bxslider').length) {
		$('.shop-details .bxslider').bxSlider({
	        nextSelector: '.shop-details #slider-next',
	        prevSelector: '.shop-details #slider-prev',
	        nextText: '<i class="fa fa-angle-right"></i>',
	        prevText: '<i class="fa fa-angle-left"></i>',
	        mode: 'fade',
	        auto: 'true',
	        speed: '700',
	        pagerCustom: '.shop-details .slider-pager .thumb-box'
	    });
	};


	//Search Popup
	if($('#search-popup').length){

		//Show Popup
		$('.search-toggler').on('click', function() {
			$('#search-popup').addClass('popup-visible');
		});
		$(document).keydown(function(e){
	        if(e.keyCode === 27) {
	            $('#search-popup').removeClass('popup-visible');
	        }
	    });
		//Hide Popup
		$('.close-search,.search-popup .overlay-layer').on('click', function() {
			$('#search-popup').removeClass('popup-visible');
		});
	}


	//Product Tabs
	if($('.testing-tab').length){
		$('.testing-tab .testing-tab-btns .p-tab-btn').on('click', function(e) {
			e.preventDefault();
			var target = $($(this).attr('data-tab'));

			if ($(target).hasClass('actve-tab')){
				return false;
			}else{
				$('.testing-tab .testing-tab-btns .p-tab-btn').removeClass('active-btn');
				$(this).addClass('active-btn');
				$('.testing-tab .p-tabs-content .p-tab').removeClass('active-tab');
				$(target).addClass('active-tab');
			}
		});
	}


	//Jquery Spinner / Quantity Spinner
	if($('.quantity-spinner').length){
		$("input.quantity-spinner").TouchSpin({
		  verticalbuttons: true
		});
	}


	//nice select
	$(document).ready(function() {
      $('select:not(.ignore)').niceSelect();
    });

    //nice select
	$(document).ready(function() {
      $('ul.feature:not(.ignore)').niceSelect();
    });


    //  RoundCircle
	function expertizeRoundCircle () {
		var rounderContainer = $('.piechart');
		if (rounderContainer.length) {
			rounderContainer.each(function () {
				var Self = $(this);
				var value = Self.data('value');
				var size = Self.parent().width();
				var color = Self.data('fg-color');

				Self.find('span').each(function () {
					var expertCount = $(this);
					expertCount.appear(function () {
						expertCount.countTo({
							from: 1,
							to: value*100,
							speed: 3000
						});
					});

				});
				Self.appear(function () {
					Self.circleProgress({
						value: value,
						size: 100,
						thickness: 4,
						emptyFill: '#e4e9eb',
						animation: {
							duration: 3000
						},
						fill: {
							color: color
						}
					});
				});
			});
		};
	}

	// Date picker
	function datepicker () {
	    if ($('#datepicker').length) {
	        $('#datepicker').datepicker();
	    };
	}



	// Time picker
	function timepicker () {
	    if ($('input[name="time"]').length) {
	        $('input[name="time"]').ptTimeSelect();
	    }
	}



	/*	=========================================================================
	When document is Scrollig, do
	========================================================================== */

	jQuery(document).on('ready', function () {
		(function ($) {
			// add your functions
			datepicker ();
			timepicker ();
		})(jQuery);
	});



	/* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */

	$(window).on('scroll', function() {
		headerStyle();
	});



	/* ==========================================================================
   When document is loaded, do
   ========================================================================== */

	$(window).on('load', function() {
		handlePreloader();
		enableMasonry();
		expertizeRoundCircle ();
	});



})(window.jQuery);
