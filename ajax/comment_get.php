<?php

// function that ges all comments from the user input in comment field

error_reporting(E_ALL);

include_once '../core/init.php';

if(isset($_GET['id'])){
    echo comment_count($_GET['id'], $conn);
}