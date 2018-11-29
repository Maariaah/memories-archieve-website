<?php

//connection to a database

$server = 'localhost';
$username = 'root';
$password ="";
$dbh = 'memories_query'; //default database name
$conn = mysqli_connect($server, $username, $password, $dbh);
