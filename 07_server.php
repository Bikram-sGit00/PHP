<!-- $_SERVER -> In PHP, $_SERVER is a super global associative array that contains information about headers, paths, and script locations created by the web server. -->


<?php

foreach($_SERVER as $key => $value){  // will show all the server variables in the form of key and value pairs
    echo "$key: $value<br>";
}

?>

<!-- 1.Use of PHP_SELF : it holds the filename of the currently executing script, so we can rename our file anytime and action location will be automatically updated -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action = "07_server.php" method="POST"> , so instead of this, we can write like below -->
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="submit" value="Submit">
    </form>
</body>
</html>