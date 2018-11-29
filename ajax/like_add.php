<?php

//checking if comment is previously liked and adding 1 if not

include_once '../core/init.php';

if(isset($_POST['article_id'], $_SESSION['user_id']) && memo_exists($_POST['article_id'], $conn)){

    $article_id = $_POST['article_id'];

    if ((previously_liked($article_id, $conn) === false)){
        add_like($article_id, $conn);

    }
    else {

        remove_like ($_POST['article_id'], $conn);

    }

}