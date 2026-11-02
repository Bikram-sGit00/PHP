<?php

// Establishing connection to the database

$server = "localhost";
$username = "root";
$password = "";


try{
    $con = mysqli_connect($server, $username, $password, "reg_from");
} catch (mysqli_sql_exception ) {
    echo "Connection failed: " . mysqli_connect_error();
}


?>