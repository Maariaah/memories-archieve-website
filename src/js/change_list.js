// toggle between single/post and list of posts preview
$(document).ready(function () {
    $('.write > p').on("click", function () {
        window.location.replace("submit_memo.php");
    });

    let child = $("div.minus > p > i");

    $('.minus > p').hover(function () {
            setTimeout(function () {
                child.removeClass("fa-minus");
                child.addClass("fa-plus");

            }, 300)
        },
        function () {
            child.addClass("fa-minus");
            child.removeClass("fa-plus");
        });

    $(".minus").one("click", add);

    function add() {

        $(this).one("click", subtract);
        let path = (window.location.pathname).slice((window.location.pathname).lastIndexOf("pages"));
        if (path === "pages/single_memo_list.php") {
            window.location = "memories_list.php";
        }

    }

    function subtract() {
        let path = (window.location.pathname).slice((window.location.pathname).lastIndexOf("pages"));
        if (path === "pages/memories_list.php") {
            window.location = "single_memo_list.php";
        }
        $(this).one("click", add);

    }

});