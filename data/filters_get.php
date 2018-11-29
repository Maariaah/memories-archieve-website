<?php

include 'dbh.php';

//function for filtering a result

function filter($conn)
{
        $filters[] = array();

        if (isset($_POST["najnovije"])) {
           $filter_query = mysqli_query($conn, "select * from all_memories order by date DESC");
        } else if (isset($_POST["najpopularnije"])) {
            $filter_query = mysqli_query($conn, "select * from all_memories order by likes DESC");
        }
        else if (isset($_POST["najneomiljenije"])){
            $filter_query = mysqli_query($conn, "select * from all_memories order by dislikes DESC");
        }


        if (mysqli_num_rows($filter_query) > 0) {
            while ($row = mysqli_fetch_assoc($filter_query)) {
                $filters[] = $row;
            }

        }

    return $filters;
}