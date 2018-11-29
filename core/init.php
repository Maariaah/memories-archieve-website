<?php

session_start();
$_SESSION['user_id'] = (int)$_SERVER['REMOTE_ADDR'];


include '../data/dbh.php';
include '../data/like_comment_queries.php';
include '../data/all_memories.php';
include '../data/single_memo.php';
include '../ajax/search.php';
include '../data/filters_get.php';
include '../pages/comment_display.php';

