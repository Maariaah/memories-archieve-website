<?php


function single_Memories($conn)
{
    $perPage = 1;
    $page = (int) (!isset($_GET['page'])) ? 1 : $_GET['page'];
    $start = ($page > 1) ? ($page*$perPage)-$perPage : 0;

    $query ="select * from all_memories  LIMIT $start,1";
    $memories[] = array();

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $memories[] = array(
                'id' => $row['id'],
                'content' => $row['content'],
                'likes' => $row['likes'],
                'name' => $row['name'],
                'age' => $row['age'],
                'date' => $row['date'],
                'comments' => $row['comments'],
                'dislikes' => $row['dislikes']

            );
        }
    }

    return $memories;

};

