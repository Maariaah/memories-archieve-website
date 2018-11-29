<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submit</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="../dist/.css/main.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
      integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


<body>
<div class="container-fluid">

    <?php include_once "../components/header.php" ?>

    <div class="row submission_form">
        <div class="col-sm-12 col-md-6 form-contaner">
            <form action="../data/submission.php" method="post">
                <div class="row">
                    <div class="submit_heading">
                    <p class="col-sm-6 ">Na pravom si mestu!</p>
                    <span class="col-sm-12">Želiš naglas da kažeš ono što ne možeš da zaboraviš?</span>
                    </div>
                </div>
                    <div class="form row">
                    <div class="form-group col-sm-6">
                        <label for="name">Ime:</label>
                        <input class="form-control" type="text" name="username" id="name" autofocus>
                        <small id="emailHelp" class="form-text text-muted">*Ne mora biti validno ime</small>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="age">Godine:</label>
                        <input class="form-control" type="number" name="age" id="age" autofocus>
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="msg">Vaše sećanje:</label>
                        <textarea class="form-control" cols="20" rows="10" name="message" id="msg" autofocus></textarea>
                    </div>
                    <div class="col-sm-12">
                        <button class="submit-form-btn full-width-btn" name="submit" type="submit">POSTAVI</button>
<!--                        <small class="form-text text-muted note">*Možete ostaviti samo jednu ispovest dnevno</small>-->
                    </div>
                </div>

            </form>
        </div>

    </div>

    <script src="../jQuery.js"></script>
    <script src="../dist/js/js_main.js"></script>
</div>
</body>
</html>