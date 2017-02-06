$('img').addClass('img-responsive');
var url = window.location.href;
$('.navbar-nav a[href="'+url+'"]').closest('li').addClass('active').closest('li.dropdown').addClass('active');
$('._fs__navbar a[href="'+url+'"]').parent().addClass('active'); 
$('._czr__index-slider .item').eq(0).addClass('active'); 
$('._czr__cip__carousel .item').eq(0).addClass('active'); 
$('._czr__ih-carousel .item').eq(0).addClass('active'); 

$('._czr__gp__owl').owlCarousel({
	margin: 45,
	nav: true,
	navText: [],
	responsive:{
		768:{
			items:3
		},
		1000:{
			items:4
		},
		1025:{
			items:7
		},
		1399:{
			items:8
		}
	}
});


$(document.body).on('azbn.recalc-height', null, {}, function(){
	
	var body = $(this);
	
	var h_catalog = '100%';//body.find('._czr__catalog-page').outerHeight(true);
	body.find('._czr__catalog-navbar').css('height', h_catalog);
	
});

$(document.body).trigger('azbn.recalc-height');