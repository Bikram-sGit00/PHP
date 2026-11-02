<?php

include("database.php");

// $sql = "select * from details where name ='Bikram'"; // both works perfectly
$sql = "SELECT * FROM details WHERE name ='Bikram'";
// $sql = "SELECT * FROM details WHERE name ='bikram'"; can also be this, will give same result.


// To avoid that 
// SELECT * FROM details
// WHERE BINARY name = 'Bikram';

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0){ // (mysqli_num_rows(), this functions returns how many rows are there in the result set
    $row = mysqli_fetch_assoc($result);
    echo $row["email"];
}else{
    echo "no such user found";
}


mysqli_close($con);


?>