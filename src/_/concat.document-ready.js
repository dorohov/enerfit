$('[data-toggle="tooltip"]').tooltip();
$(document.body).on("click.fecss.go-to-top",".go-to-top",function(o){o.preventDefault(),$("html, body").animate({scrollTop:0},777)});
$(window).on("load",function(e){$(".page-loader").removeClass("active")}),$(document.body).on("click.fecss.page-loader.close-loader",".page-loader .close-loader",{},function(e){e.preventDefault(),console.log("body trigger:click.fecss.page-loader.close-loader"),$(".page-loader").removeClass("active")});
$("img").addClass("img-responsive");var url=window.location.href;$('.navbar-nav a[href="'+url+'"]').closest("li").addClass("active").closest("li.dropdown").addClass("active"),$('._fs__navbar a[href="'+url+'"]').parent().addClass("active"),$("._czr__index-slider .item").eq(0).addClass("active"),$("._czr__cip__carousel .item").eq(0).addClass("active"),$("._czr__ih-carousel .item").eq(0).addClass("active"),$("._czr__gp__owl").owlCarousel({margin:45,nav:!0,navText:[],responsive:{768:{items:3},1e3:{items:4},1025:{items:7},1399:{items:8}}});
$(function(){function e(){var e=$('.navbar-collapse form[role="search"].active');e.find("input").val(""),e.removeClass("active")}$('body, .navbar-collapse form[role="search"] button[type="reset"]').on("click keyup",function(a){console.log(a.currentTarget),(27==a.which&&$('.navbar-collapse form[role="search"]').hasClass("active")||"reset"==$(a.currentTarget).attr("type"))&&e()}),$(document).on("click",'.navbar-collapse form[role="search"]:not(.active) button[type="submit"]',function(e){e.preventDefault();var a=$(this).closest("form"),t=a.find("input");a.addClass("active"),t.focus()})});
$("[data-cat-navbar]").click(function(){var a=$(this).data("cat-navbar");$(a).toggleClass("open-navbar")});