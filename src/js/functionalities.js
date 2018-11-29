
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



