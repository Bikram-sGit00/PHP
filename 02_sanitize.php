<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="02_sanitize.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <br>
        <label for="password">password</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="submit" name= "submit">
    </form>
</body>
</html> 


<?php
    if(isset($_POST["submit"])){
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS); 
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_NUMBER_INT); // input -> bhangbhug15, output -> 15

        echo "name : {$name} & email : {$email} & password : {$password}";
    }
?>