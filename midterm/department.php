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

$sql = "CREATE TABLE Department(
 fid int(10),
 fname varchar(30),
 deptid int(2)
)";


if(mysqli_query($connection, $sql)){
    echo "Table created";
}else{
    echo "Oops! failed to create...\n" .mysqli_error($connection);
}
mysqli_close($connection);
?>
