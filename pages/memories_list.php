<?php

include_once '../core/init.php';


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
<div id="fb-root"></div>

<script>(function(d, s, id) {
        let js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div class="container-fluid">

        <?php
        include_once "../components/header.php" ?>

        <?php

        $page = (int)(!isset($_GET['page'])) ? 1 : $_GET['page'];
        $perPage = 7;
        $count_query = mysqli_query($conn, "select * from all_memories");
        $rows = mysqli_num_rows($count_query);
        $total = $rows / $perPage;
        $count = ceil($total);

            $memories = get_Memories($conn);

        if (count($memories) === 0) {
            echo "<p class='float-right'>Jos uvek nema postavljenih secanja</p>";
        } else {
            echo "<div class='sections col-xs-12'>";
            foreach ($memories as $memory) {
                 include "../components/main_content.php";
            }
            echo "</div>";


                      include_once "../components/pagination.php";
        }
        ?>

</body>
<script src="../jQuery.js"></script>
<script src="../dist/js/js_main.js"></script>
</html>

