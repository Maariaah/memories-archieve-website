<?php

include '../core/init.php';


$name = '';
$message = '';
$age = '';

if (isset($_POST['submit'])) {

   // if (previouslySubmitted($conn) === false) {

        if (!empty($_POST['username']) || !empty($_POST['age']) || !empty($_POST['message'])) {
            if (!empty($_POST['message'])) {
                $message = mysqli_real_escape_string($conn, $_POST['message']);

            } else {
                header("Location: ../pages/fill_out_error.php");
                exit();
            }

            if (!empty($_POST['age'])) {
                $age = $_POST['age'];

            } else {
                header("Location: ../pages/fill_out_error.php");
                exit();
            }

            if (!empty($_POST['username'])) {
                $name = mysqli_real_escape_string($conn, $_POST['username']);

            } else {
                header("Location: ../pages/fill_out_error.php");
                exit();
            }
            $time = time();
            $date = date('m.d.Y h:i:s', $time);

            $sql = "INSERT INTO all_memories (content, name, age, date, user_id) values ('$message', '$name', '$age','$date', ".$_SESSION['user_id'].");";
            $result = mysqli_query($conn, $sql);
            $_POST['name'] = '';
            $_POST['age'] = '';
            $_POST['message'] = '';
            echo $name, $message, $age, $date;
           header("Location: ../pages/sucsess.php");


        } else {
            header("Location: ../pages/fill_out_error.php");
        }
   // }

}





