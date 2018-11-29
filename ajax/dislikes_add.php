<?php

include_once '../core/init.php';

if(isset($_POST['article_id'], $_SESSION['user_id']) && memo_exists($_POST['article_id'], $conn)){

    $article_id = $_POST['article_id'];

    if ((previously_disliked($article_id, $conn) === false)){
        add_dislike($article_id, $conn);
    }
    else {

        remove_dislike ($_POST['article_id'], $conn);

    }

}