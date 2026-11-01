<?php

// hashing is a one way encryption, we can not decrypt it back to original value, so we can use it for storing passwords in database

$password = "biriyani123";

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

echo $hashed_password; // it will give different hashed value every time we run the code, so we can not compare it with the original password, so we need to use password_verify() function and compare with user entered password and hashed password stored in database



if(password_verify("pizza123", $hashed_password)){ // user entered password is "pizza123", which is wrong so return false;
    echo "<br >Password is correct";
}else{
    echo "<br> Password is incorrect";
}

?>