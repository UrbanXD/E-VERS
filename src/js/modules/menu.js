$(document).ready(function() {
    $(window).scroll(function () {
        if (this.scrollY > 150) {
            $('#menu-field').addClass("fixed");
            $('#menu-title').removeClass("invisible").addClass("flex");
            $('#l1, #l2, #l3').removeClass("float-left").addClass("float-right");
        } else {
            $('#menu-field').removeClass("fixed");
            $('#menu-title').removeClass("flex").addClass("invisible");
            $('#l1, #l2, #l3').removeClass("float-right").addClass("float-left");
        }
    });
});