<?php

error_reporting(E_ALL);

function getComments($conn)
{
    $comment = array();
    if (isset($_GET['id'])) {


        $id = intval($_GET['id']);
        $result = mysqli_query($conn, "select * from comment where memo_id=$id");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $comment[] = array(
                    'comment_id' => $row['id'],
                    'content' => $row['subject'],
                    'user_name' => $row['name'],
                    'time' => $row['time'],
                    //'likes' => $row['likes'],
                );
            }
        }
    }

    return $comment;
}