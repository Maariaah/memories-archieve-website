<?php
error_reporting(E_ALL);
include_once '../data/dbh.php';


function getSearch($conn)
{

    if (isset($_POST['go'])) {

        $memo[] = array();

        $search_input = mysqli_real_escape_string($conn, trim($_POST['search_input']));
        $search_query = mysqli_query($conn, "select * from all_memories where content LIKE '%$search_input%'");

        while ($search_result = mysqli_fetch_assoc($search_query)) {
            $memo[] = array(
                'content' => $search_result['content'],
                'id' => $search_result['id'],
                'name' => $search_result['name'],
                'date' => $search_result['date'],
                'age' => $search_result['age'],
                'likes' => $search_result['likes'],
                'dislikes' => $search_result['dislikes'],
                'comments' => $search_result['comments']
            );

        }

        return $memo;
    }

}



