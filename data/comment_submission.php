<?php

ob_start();

include_once '../core/init.php';
if (isset($_POST['submit_comment'])) {
    if (isset($_POST['comment']) && $_POST['comment'] != '') {

        $content = $_POST['comment'];
        $user_id = $_SESSION['user_id'];
        $time = date('H:i:s');
        $id = intval($_GET['id']);

//Dodavanje komentara
        mysqli_query($conn, "insert into comment(subject, time, name, memo_id) values ('$content', '$time', '$user_id', '$id')");



//Update broja komentara


        $result = mysqli_query($conn, "SELECT COUNT(comment.memo_id) as ids FROM comment INNER JOIN all_memories ON all_memories.id = comment.memo_id where all_memories.id = $id");

        if ($result == NULL) {
            $result = 0;
        }

        $result = $result->fetch_assoc()['ids'];
        mysqli_query($conn, "update all_memories set comments = $result where id = '$id'");


        header("Location: ../pages/memo_detail.php?id=" . $id);
    }
    else{
        header("Location: ../pages/fill_out_error.php");
    }
}

