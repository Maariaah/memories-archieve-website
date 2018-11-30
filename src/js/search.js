//search bar functionality
$( document ).ready(function() {
    let bar = $("#search_bar");
    let field = $("#search_form");
    let search_width = $("#width");
    let div = $('#search');

    div.on('click', function (e) {
        e.preventDefault();
        field.toggle();

        if(field.css('width', 0)){
            search_width.addClass("search_div");
            bar.css('right', "100%");
            bar.css('width', 250);
            field.css('display', 'inline');
            div.css("display", "none");
        }
    });

    $(document).on("click",function(e) {
        if( $(e.target).attr("class") != 'fas fa-search'){
            if($(e.target).attr("id") != "search_bar"){
                hide();
            }
        }
    });

    function hide(){
        bar.css('width', 0);

        setTimeout(function () {

            field.css('display','none');
            search_width.removeClass("search_div");
            div.css("display", "block");
            bar.value = '';
        }, 200);
    }
});