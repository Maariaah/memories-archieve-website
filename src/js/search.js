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

    //     else{
    //     hide()
    // }

    });

    $(document).on("click",function(e) {
        if( $(e.target).attr("class") != 'fas fa-search'){
            if($(e.target).attr("id") != "search_bar"){
                hide();
            }

        }

    });

//     $('body').on('click', function (e) {
//
//         //e.preventDefault();
//         //hide();
//
//
//     });
// //
//     $('.search').bind("keydown", function () {
//         console.log('radii')
//     if(){
//         console.log(bar.val());
//         $('#close').css("display", "none");
//     }
// });


    function hide(){
        bar.css('width', 0);

        setTimeout(function () {

            field.css('display','none');
            search_width.removeClass("search_div");
            div.css("display", "block");
            bar.value = '';
        }, 200);
    }

    // let search_bar = $('#go');
    //
    // search_bar.on("click", function (e) {
    //     e.preventDefault();
    //     let data = $(this).serialize();
    //
    //     $.ajax({
    //         url: './ajax/search.php',
    //         type: 'post',
    //         async: true,
    //         data: data,
    //         success: function (response) {
    //             let search_content = $('#main_content');
    //             //search_content.html(response);
    //             console.log(search_content)
    //             if (search_bar.val() == "") {
    //                 response = "";
    //             }
    //
    //
    //         },
    //         error: function (jqXHR, textStatus, errorThrown) {
    //             console.log(textStatus, errorThrown);
    //         }
    //
    //     });
    // });
});