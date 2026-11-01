<?php

session_start(); // Declaring or using, in both cases, SGB(Session Global Variable) we need to start the session before any html

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <h1> This is the main page of the website 🚀✨</h1>
</body>
</html>



<?php

echo "Welcome {$_SESSION["username"]} Your Passkey is : {$_SESSION["password"]} ";

?>