<?php
error_reporting(E_ALL);

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