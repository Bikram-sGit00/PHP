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
    <!-- <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST"> -->
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST"> <!--to avoid any cross site scripting attack, we can use htmlspecialchars() function to convert--> 
        <input type="text" name="name" placeholder="Enter your name">             <!--special characters to HTML entities, so that they are not executed as code. -->
        <input type="submit" value="Submit">
    </form>
</body>
</html>



<!-- 2. Use of REQUEST_METHOD: It holds the HTTP method used to access the page, such as GET or POST. -->

<?php

// if(isset($_POST["submit"])){
//     echo " Submitted";
// }  // problem with this is that we can also submit without clicking the submit button

if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo " Submitted";
}


?>