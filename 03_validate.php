<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="03_validate.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="age">Age</label>
        <input type="text" name="age" id="age">
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
        $afe = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT); // unlike sanitize, validate will return false if the input is not valid, means age will be null or empty;
        echo "age : {$afe}";
    }

    // Other validation filters are:
        // 1. FILTER_VALIDATE_SPECIAL_CHARS
        // 2. FILTER_VALIDATE_EMAIL
        // 3. FILTER_VALIDATE_FLOAT
        // 4. FILTER_VALIDATE_INT
        // 5. FILTER_VALIDATE_NUMBER_INT

?> 