<?php
    setcookie("recentSearch", "macbook", time() + (86400 * 30), "/"); // 86400 = 1 day, x30 , means expire after 30 days
//  setcookie("key", "value", expiry time, path) / means default path is the whole website

    setcookie("favFood", "biriyani", time() + (86400 * 2), "/");

    setcookie("favFood", "biriyani", time() - 0, "/"); // to delete


    //Advertisement
    if(isset($_COOKIE["recentSearch"])){
        echo "Buy at lowest price : {$_COOKIE["recentSearch"]}, Live Now!";
    }
?>

    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> This is the main page of the website</h1>
    
</body>
</html>

