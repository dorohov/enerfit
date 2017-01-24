$("[data-cat-navbar]").click(function() {
    var toggle_el = $(this).data("cat-navbar");
    $(toggle_el).toggleClass("open-navbar");
    $(".navbar-site").toggleClass("navbar-site-right-open");
});

