<?php
session_start(); // Declare before writing any html
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body>
    <form action = "login.php" method="post">
        <label>
            Username : <input type="text" name="username" id="username">
        </label>
        <label>
            Password : <input type="password" name="password" id="password">
        </label>
        <input type="submit" value="Login">
    </form>
</body>
</html>

<?php

if(isset($_POST["username"]) && isset($_POST["password"]) && !empty($_POST['username']) && !empty($_POST['password'])){
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];

    header("Location: home.php"); // redirect to home page

}else{
    echo "Fill all";
}

?>