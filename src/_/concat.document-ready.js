$('[data-toggle="tooltip"]').tooltip();
$(document.body).on("click.fecss.go-to-top",".go-to-top",function(o){o.preventDefault(),$("html, body").animate({scrollTop:0},777)});
$(".page-loader .close-loader").on("click",function(e){e.preventDefault(),$(".page-loader").removeClass("active")}),$(document.body).on("click.fecss",".page-loader.active ._czr__preloader-process-container ._czr__preloader-process-level",function(e){e.preventDefault(),$(".page-loader").data("window-can-close-it",!0).data("counter-can-close-it",!0).trigger("fecss.can-close-it")}),$(document.body).on("fecss.can-close-it",".page-loader",function(e){e.preventDefault();var a=$(this);a.data("counter-can-close-it")&&a.data("window-can-close-it")&&setTimeout(function(){a.removeClass("active").addClass("ready")},85)}),$(window).load(function(e){$(".page-loader").data("window-can-close-it",!0).trigger("fecss.can-close-it"),$(".page-loader ._czr__preloader-process-container ._czr__preloader-process-level").data("fast-page-loading",!0)}),$(function(){var e=$(".page-loader.active"),a=$("._czr__preloader-process-container ._czr__preloader-process-level",e).eq(0);if(a.size()){var o=0;a.css({width:o+"%"}).attr("data-pos",o);var r=setInterval(function(){var e=Math.random();if(e>.5&&100>o){o++,$("._azbn__preloader-percent").text(o),a.data("fast-page-loading")&&(o+=9);a.css({width:o+"%"}).attr("data-pos",o)}else o>99&&(clearInterval(r),$(".page-loader").data("counter-can-close-it",!0).trigger("fecss.can-close-it"))},40)}});
$("img").addClass("img-responsive");var url=window.location.href;$('.navbar-nav a[href="'+url+'"]').closest("li").addClass("active").closest("li.dropdown").addClass("active"),$('._fs__navbar a[href="'+url+'"]').parent().addClass("active"),$("._czr__index-slider .item").eq(0).addClass("active"),$("._czr__cip__carousel .item").eq(0).addClass("active"),$("._czr__ih-carousel .item").eq(0).addClass("active"),$("._czr__gp__owl").owlCarousel({margin:45,nav:!0,navText:[],responsive:{768:{items:3},1e3:{items:4},1025:{items:7},1399:{items:8}}}),$(document.body).on("azbn.recalc-height",null,{},function(){var a=$(this),e="100%";a.find("._czr__catalog-navbar").css("height",e)}),$(document.body).trigger("azbn.recalc-height");
$(function(){function e(){var e=$('.navbar-collapse form[role="search"].active');e.find("input").val(""),e.removeClass("active")}$('body, .navbar-collapse form[role="search"] button[type="reset"]').on("click keyup",function(a){console.log(a.currentTarget),(27==a.which&&$('.navbar-collapse form[role="search"]').hasClass("active")||"reset"==$(a.currentTarget).attr("type"))&&e()}),$(document).on("click",'.navbar-collapse form[role="search"]:not(.active) button[type="submit"]',function(e){e.preventDefault();var a=$(this).closest("form"),t=a.find("input");a.addClass("active"),t.focus()})});
$("[data-cat-navbar]").click(function(){var a=$(this).data("cat-navbar");$(a).toggleClass("open-navbar"),$(".navbar-site").toggleClass("navbar-site-right-open")});