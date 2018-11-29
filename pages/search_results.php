<?php

//page printing search results

include_once '../core/init.php';
include_once "../ajax/search.php"
?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <title>Memories</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../dist/.css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">

    <?php include_once "../components/header.php" ?>

    <div class='row' id='main_content'>
        <?php
        $memories = getSearch($conn);
        //  echo  json_encode($memories);

        $page = (int)(!isset($_GET['page'])) ? 1 : $_GET['page'];
        $perPage = 7;
        $rows = ($memories != 0 || $memories != null) ? count($memories) : 0;
        $total = $rows / $perPage;
        $count = ceil($total);

        if (isset($_POST['go']) && $_POST['search_input'] != ' ') {

            if (count($memories) <= 1) {

                echo "<p>Nema rezultata</p>";
            } else {
                echo "<div class='sections col-xs-12'>";
                foreach ($memories as $memory) {
                    include "../components/main_content.php";
                }
                echo "</div>";
                include_once "../components/pagination.php";
            }
        }


        ?>

    </div>
    <script src="../jQuery.js"></script>
    <script src="../dist/js/js_main.js"></script>
</body>


</html>
