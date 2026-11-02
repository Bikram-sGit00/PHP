<?php

include("database.php");

// $sql = "select * from details where name ='Bikram'"; // both works perfectly
$sql = "SELECT * FROM details WHERE name ='Bikram'";
// $sql = "SELECT * FROM details WHERE name ='bikram'"; can also be this, will give same result.


// To avoid that 
// SELECT * FROM details
// WHERE BINARY name = 'Bikram';

$result = mysqli_query($con, $sql); // fetch records from the database and store it in $result variable but as object

if(mysqli_num_rows($result) > 0){ // (mysqli_num_rows(), this functions returns how many rows are there in the result set
    $row = mysqli_fetch_assoc($result);
    echo $row["email"];
}else{
    echo "no such user found";
}


mysqli_close($con);


?>



<?php
include("database.php");

$sql = "SELECT * FROM details";
$result = mysqli_query($con, $sql);

// work of mysqli_fetch_assoc() function is as follows:

// 1. Fetches one row from the result set.

// 2. Converts that row into an associative array.

// 3. Uses column names as array keys.

// 4. Moves the internal result pointer to the next row.


// so we get -> 

// $row = [
//     "id" => 1,
//     "name" => "Bikram",
//     "email" => "bikram@gmail.com"
// ];

// & then we can access the values like $row["name"], $row["email"] etc.    


if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo $row["email"] . "<br>";
    };
}

mysqli_close($con);


?>






