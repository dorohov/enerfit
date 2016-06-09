$("[data-cat-navbar]").click(function() {
    var toggle_el = $(this).data("cat-navbar");
    $(toggle_el).toggleClass("open-navbar");
});
/*
$(".swipe-area").swipe({
    swipeStatus:function(event, phase, direction, distance, duration, fingers)
    {
        if (phase=="move" && direction =="right") {
             $(".container").addClass("open-sidebar");
             return false;
        }
        if (phase=="move" && direction =="left") {
             $(".container").removeClass("open-sidebar");
             return false;
        }
    }
});*/