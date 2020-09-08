<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mid_term_su";
//connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

if(!$connection){
    die("Failed!..." .mysqli_connect_error);
}

$sql = "CREATE TABLE Stock(
   Sid int(9),
   Pid int(9),
   Cost float(10)
)";


if(mysqli_query($connection, $sql)){
    echo "Table created";
}else{
    echo "Oops! failed to create...\n" .mysqli_error($connection);
}
mysqli_close($connection);
?>
