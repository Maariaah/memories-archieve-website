//toggle for a homepage icons
$(document).ready(function () {
    $(".icon").each(function (i, e) {
        let child = $(this).find("span:nth-child(2)");
        $(this).hover(function () {

            child.toggleClass("visible");
        });
    });

});