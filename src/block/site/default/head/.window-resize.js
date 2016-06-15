var h_window = $(window).height(), 
 	w_window = $(window).width();

var h_header = $('._czr__navbar-site').outerHeight(true),
	h_footer = $('.footer-site').outerHeight(true),
	h_heading = $('._czr__container-fluid').outerHeight(true),
	h_catalog = $('._czr__catalog-page').outerHeight(true),
 	h_resize = h_window - h_header,
 	h_resize_map = h_window - h_header - h_heading - 50,
 	h_resize_xs = h_window,
 	h_navbar_xs = h_window - h_header;
 	//h_resize = h_window + 50;

if (device.mobile() || device.tablet()) {
	$('.navbar').addClass('navbar-fixed-top');	
	$('._czr__navbar-site .navbar-collapse').css("height", h_resize);
	$('._fs__navbar-inner').owlCarousel({
		margin: 45,
	    responsive:{
	        0:{
	            items:1
	        },
	       	450:{
	            items:2
	        },
	        768:{
	            items:3
	        },
	        1000:{
	            items:4
	        }
	    }
	}); 
	$('._czr__cip__list').owlCarousel({
		autoWidth:true,
		margin: 30,
	    responsive:{
	        0:{
	            items:1
	        },
	        768:{
	            items:2
	        },
	        1000:{
	            items:2
	        }
	    }
	}); 
	$("._czr__cip__block ._czr__breadcrumb").appendTo($("._czr__cip__cols-top ._czr__cip__block"));
	$("._czr__cip__block ._czr__cip__heading-block-site").appendTo($("._czr__cip__cols-top ._czr__cip__block"));
} else {	
	$('._czr__navbar-site .navbar-collapse').removeAttr("style");
	$('._czr__navbar-site .dropdown').hover(
		function () {
        	$(this).addClass('open');
      	},
      	function () {
        	$(this).removeClass("open");
      	}
	);
	$('.btn-soc-block').hover(
		function () {
        	$(this).addClass('open');
      	},
      	function () {
        	$(this).removeClass("open");
      	}
	);
}
if (device.mobile()) {
	$("._czr__ih-carousel").removeAttr("data-ride");
	$('._czr__ih-carousel .carousel-inner').owlCarousel({
		margin: 0,
	    items:1	    
	}); 
} else {
	$("._czr__resize").css("min-height", h_resize);
	
}	

$("._czr__catalog-navbar").css("height", h_catalog);

if (w_window > 1399){$("._czr__resize-map #map").css("height", h_resize_map);}
$('._czr__sp__item-block').hover(
	function () {
    	$(this).find('._czr__sp__item-hidden').addClass('in');
  	},
  	function () {
    	$(this).find('._czr__sp__item-hidden').removeClass("in");
  	}
);
$("nav.navbar-fixed-top").autoHidingNavbar();