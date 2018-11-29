<?php

//post detail page

include_once '../core/init.php';


?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <title>Detail</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
    <link rel="stylesheet" href="../dist/.css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
          crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">

    <?php include_once "../components/header.php" ?>

    <div class="row memo-detail">

        <?php

        (isset($_GET['id'])) ? $id = intval($_GET['id']) : false;

        if (isset($id)) {

        $result = mysqli_query($conn, "select * from all_memories where id=$id");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $memories[] = $row;
            }

            foreach ($memories as $memory) {
                $id = intval($_GET['id']);
                include "../components/main_content.php";
            }
        }


        ?>

    </div>
    <div class='row'>
        <div class="col-xs-12" id="comment_panel">
            <?php

            $comments = getComments($conn);

            foreach ($comments as $comment) {

                include "../components/comments.php";

            }

            ?>

        </div>

        <div class='col-md-12'>
            <form id="comment_form" action='../data/comment_submission.php?id=<?php echo $id ?>' method='post'>
                <div class='form-group'>
                    <label for='comment'>Komentar:</label>
                    <textarea class='form-control' cols='30' rows='10' name='comment' id='comment' autofocus></textarea>
                </div>
                <button class="submit-form-btn" id='comment_add' name='submit_comment' type='submit'>POSTAVI
                </button>
            </form>
        </div>
    </div>
<?php
}
?>
    <script src="../jQuery.js"></script>
    <script src="../dist/js/js_main.js"></script>
</body>
</html>
