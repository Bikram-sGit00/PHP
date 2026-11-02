<?php

include("database.php");

// $sql = "select * from details where name ='Bikram'"; // both works perfectly
$sql = "SELECT * FROM details WHERE name ='Bikram'";


$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    echo $row["phone"];
}


mysqli_close($con);


?>