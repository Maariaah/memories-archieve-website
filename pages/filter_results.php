<?php

//page that prints filtered results

include_once '../data/filters_get.php';

?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Memories</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../dist/.css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">

    <?php include "../components/header.php" ?>

    <div class='row'>
        <?php
        $memories = filter($conn);

        if (isset($_POST['najnovije']) || isset($_POST['najpopularnije']) || isset($_POST['najneomiljenije']) ) {

            if (count($memories) != 0) {
                echo "<div class='sections col-xs-12'>";
                foreach ($memories as $memory) {
                    include "../components/main_content.php";
                }
            }
            echo "</div>";

        }

             include_once "../components/pagination.php"
        ?>
    </div>
</div>
<script src="../jQuery.js"></script>
<script src="../dist/js/js_main.js"></script>
</body>
</html>