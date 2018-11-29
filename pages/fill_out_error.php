<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../dist/.css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <?php include_once "../components/header.php" ?>
</div>
<div class="messages col-xs-12">
<h3>Molimo popunite sva polja</h3>
<a id="#back" href="#" onclick="Back()"><i class="fas fa-arrow-left"></i>Nazad na formu</a>
</div>
<script>
    function Back(){

        parent.history.back()
    }
</script>
<script src="../jQuery.js"></script>
<script src="../dist/js/js_main.js"></script>
</body>
</html>