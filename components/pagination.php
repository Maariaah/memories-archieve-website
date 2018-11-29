<?php
/**
 * Created by PhpStorm.
 * User: Vestica
 * Date: 9/8/2018
 * Time: 12:11 AM
 */
echo " <nav class='col-xs-12 pagination_container'>
            <ul>";

if (isset($page)){
    $prev = (int)$page - 1;
    $next = (int)$page + 1;

    if ($page != 1) {
        echo "<li class='arrows-small'><a  href='../pages/memories_list.php?page=" . $prev . "'><i class=\"fas fa-angle-left\"></i></a></li>";
    }

    for ($i = 1; $i < $count +1; $i++) {
        $active = '';
        if(isset($_GET['page']) && $i == $_GET['page'])
        {
            $active = "active";
        }
        echo "<li ><a data-id='" .$i. "'  class='pagination_num" .$active. "' name='pagination' href='../pages/memories_list.php?page=" . $i. "'>" . $i . "</a></li>";

    }

    if ($page != $count) {
        echo "<li class='arrows-small'><a  href='../pages/memories_list.php?page=" . $next . " '> <i class=\"fas fa-angle-right\"></i> </a></li>";
    }
}

echo "  </ul>
        </nav>";
