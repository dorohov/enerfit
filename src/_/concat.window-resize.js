$(function(){var s={xs:{min:0,max:768},sm:{min:767,max:992},md:{min:991,max:1200},lg:{min:1199,max:1e4}},w={xs:{min:0,max:361},sm:{min:360,max:769},md:{min:768,max:961},lg:{min:960,max:1e4}},i="window-width",d="window-height",h=$(window).outerWidth(!0),m=$(window).outerHeight(!0),a=$("html body").eq(0);h<s.xs.max&&(a.hasClass("window-width-sm")&&a.removeClass("window-width-sm"),a.hasClass("window-width-md")&&a.removeClass("window-width-md"),a.hasClass("window-width-lg")&&a.removeClass("window-width-lg"),i="window-width-xs"),h>s.sm.min&&h<s.sm.max&&(a.hasClass("window-width-xs")&&a.removeClass("window-width-xs"),a.hasClass("window-width-md")&&a.removeClass("window-width-md"),a.hasClass("window-width-lg")&&a.removeClass("window-width-lg"),i="window-width-sm"),h>s.md.min&&h<s.md.max&&(a.hasClass("window-width-xs")&&a.removeClass("window-width-xs"),a.hasClass("window-width-sm")&&a.removeClass("window-width-sm"),a.hasClass("window-width-lg")&&a.removeClass("window-width-lg"),i="window-width-md"),h>s.lg.min&&(a.hasClass("window-width-xs")&&a.removeClass("window-width-xs"),a.hasClass("window-width-sm")&&a.removeClass("window-width-sm"),a.hasClass("window-width-md")&&a.removeClass("window-width-md"),i="window-width-lg"),m<w.xs.max&&(a.hasClass("window-height-sm")&&a.removeClass("window-height-sm"),a.hasClass("window-height-md")&&a.removeClass("window-height-md"),a.hasClass("window-height-lg")&&a.removeClass("window-height-lg"),d="window-height-xs"),m>w.sm.min&&m<w.sm.max&&(a.hasClass("window-height-xs")&&a.removeClass("window-height-xs"),a.hasClass("window-height-md")&&a.removeClass("window-height-md"),a.hasClass("window-height-lg")&&a.removeClass("window-height-lg"),d="window-height-sm"),m>w.md.min&&m<w.md.max&&(a.hasClass("window-height-xs")&&a.removeClass("window-height-xs"),a.hasClass("window-height-sm")&&a.removeClass("window-height-sm"),a.hasClass("window-height-lg")&&a.removeClass("window-height-lg"),d="window-height-md"),m>w.lg.min&&(a.hasClass("window-height-xs")&&a.removeClass("window-height-xs"),a.hasClass("window-height-sm")&&a.removeClass("window-height-sm"),a.hasClass("window-height-md")&&a.removeClass("window-height-md"),d="window-height-lg"),$("html body").eq(0).addClass(i).addClass(d)});

$(function(){$(".scroll-container").trigger("init"),console.log("window-resize .scroll-container init")});
var h_window=$(window).height(),w_window=$(window).width(),h_header=$("._czr__navbar-site").outerHeight(!0),h_footer=$(".footer-site").outerHeight(!0),h_heading=$("._czr__container-fluid").outerHeight(!0),h_catalog=$("._czr__catalog-page").outerHeight(!0),h_resize=h_window-h_header,h_resize_map=h_window-h_header-h_heading-50,h_resize_xs=h_window,h_navbar_xs=h_window-h_header;device.mobile()||device.tablet()?($(".navbar").addClass("navbar-fixed-top"),$("._czr__navbar-site .navbar-collapse").css("height",h_resize),$("._fs__navbar-inner").owlCarousel({margin:45,responsive:{0:{items:1},450:{items:2},768:{items:3},1e3:{items:4}}}),$("._czr__cip__list").owlCarousel({margin:30,responsive:{0:{items:1},500:{items:2},1e3:{items:3,autoWidth:!1}}}),$("._czr__cip__carousel").removeAttr("data-ride").removeClass("carousel").removeClass("slide"),$("._czr__cip__carousel-indicators").css("display","none"),$("._czr__cip__carousel ._czr__cip__carousel-inner").owlCarousel({dots:!0,loop:!0,items:1,autoplay:!0,autoplayTimeout:1e4,autoplayHoverPause:!0}),$("._czr__ih-carousel").removeAttr("data-ride").removeClass("carousel"),$("._czr__ih-carousel-indicators").css("display","none"),$("._czr__ih-carousel .carousel-inner").owlCarousel({margin:0,dots:!0,loop:!0,items:1,autoplay:!0,autoplayTimeout:1e4,autoplayHoverPause:!0}),$("._czr__index-slider").removeAttr("data-ride").removeClass("carousel"),$("._czr__isl-control").css("display","none"),$("._czr__index-slider .carousel-inner").owlCarousel({margin:0,loop:!0,items:1,nav:!0,navText:[],autoplay:!0,autoplayTimeout:1e4,autoplayHoverPause:!0}),$("._czr__cip__block ._czr__breadcrumb").appendTo($("._czr__cip__cols-top ._czr__cip__block")),$("._czr__cip__block ._czr__cip__heading-block-site").appendTo($("._czr__cip__cols-top ._czr__cip__block"))):($("._czr__navbar-site .navbar-collapse").removeAttr("style"),$("._czr__navbar-site .dropdown").hover(function(){$(this).addClass("open")},function(){$(this).removeClass("open")}),$(".btn-soc-block").hover(function(){$(this).addClass("open")},function(){$(this).removeClass("open")})),device.mobile()||$("._czr__resize").css("min-height",h_resize),$("._czr__catalog-navbar").css("height",h_catalog),w_window>1399&&$("._czr__resize-map #map").css("height",h_resize_map),$("._czr__sp__item-block").hover(function(){$(this).find("._czr__sp__item-hidden").addClass("in")},function(){$(this).find("._czr__sp__item-hidden").removeClass("in")}),$("nav.navbar-fixed-top").autoHidingNavbar();