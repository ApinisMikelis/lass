jQuery(document).ready(function () {
    jQuery(".search-toggle").bind("click", function () {
        jQuery("#search-bar").toggleClass("active");
        jQuery(".search-toggle").toggleClass("active");
    });

    // BACK TO TOP BUTTON
    var btn = jQuery("#back-to-top-btn");

    jQuery(window).scroll(function () {
        if (jQuery(window).scrollTop() > 300) {
            btn.addClass("show");
        } else {
            btn.removeClass("show");
        }
    });

    jQuery(btn).bind("click", function (e) {
        e.preventDefault();
        jQuery("html, body").animate({ scrollTop: 0 }, "300");
    });
});
