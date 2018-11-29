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
        if(path === "pages/single_memo_list.php"){
             window.location = "memories_list.php";
        }


    }
    function subtract() {
        let path = (window.location.pathname).slice((window.location.pathname).lastIndexOf("pages"));
        if(path === "pages/memories_list.php"){
            window.location = "single_memo_list.php";
        }
        $(this).one("click", add);



    }

});


$( document ).ready(function() {


////likes
    $('.like_btn').each(function (i, e) {
        $(this).click(function () {
            like_add($(this).attr('data-like'));

        });
    });

//update likes
    function like_add(article_id) {
        $.post('../ajax/like_add.php', {article_id: article_id}, function (data,status) {

            if (status == 'success') {
                like_get(article_id);

            }
            else {
                alert("GRESKA PRI UCITAVANJU")

            }
        })
    }

    function like_get(article_id) {
        $.post('../../ajax/like_get.php', {article_id: article_id}, function (data) {
            $("#memory_" + article_id +"_likes").text(data);

        });
    }


////dislikes
    $('.dislike_btn').each(function (i, e) {
        $(this).click(function () {
            dislike_add($(this).attr('data-dislike'));

        });
    });

//update dislikes

    function dislike_add(article_id){
       $.post('../../ajax/dislikes_add.php', {article_id: article_id}, function (data, status) {
           if(status == 'success'){
               dislike_get(article_id);

           }
           else{
               alert("GRESKA PRI UCITAVANJU")
           }
       })
    }

    function dislike_get(article_id){

        $.post('../../ajax/dislikes_get.php', {article_id:article_id}, function (data) {
            $("#memory_" + article_id +"_dislikes").text(data);

        })

    }
////comments
    $('.comment').each(function (e ,i) {
        $(this).on('click', function (e) {
            e.preventDefault();
            change_url($(this).attr('data-add'));

        });
    });


    $('#comment_add').on('click', function () {
        let id = $('.comment').attr('data-add');
        comment_get(id);
    });

//redirect to article_id url
    function change_url(article_id) {
        window.location = '../../pages/memo_detail.php?id=' + article_id;

    }

//update comments
    function comment_get(id) {
        $.post('../../ajax/comment_get.php', {id: id}, function (data) {
            $("#memory_" + id +"_comments").text(data);
        });
    }


  //fixed header
    $( window).scroll(function () {
        HeaderFixed();

    });
    let ribbon = $('#header > .wide');
    let header = $('#header > .col-xs-12');

    function HeaderFixed() {
        if ($(window).scrollTop() > 60){
            ribbon.addClass('fixed');
            ribbon.css("background-color", "rgba(0,0,0,0.7)");
            ribbon.css("heigt", "30px");
            header.addClass('fixed');
        }
        else
        {
            ribbon.css("background-color", "rgba(0,0,0,0.3)");
            ribbon.css("heigt", "40px");
            ribbon.removeClass("fixed");
            header.removeClass("fixed");
        }
     }



});




$( document ).ready(function() {
$(".icon").each(function (i,e) {
    let child = $(this).find("span:nth-child(2)");
    $(this).hover(function () {

          child.toggleClass("visible");


    });
});

});
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