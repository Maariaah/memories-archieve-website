<?php
error_reporting(E_ALL);

include_once '../core/init.php';

if(isset($_POST['article_id'], $_SESSION['user_id']) && memo_exists($_POST['article_id'], $conn)){
   echo like_count($_POST['article_id'], $conn);

}