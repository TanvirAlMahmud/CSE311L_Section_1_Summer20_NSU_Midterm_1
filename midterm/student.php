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

$sql = "CREATE TABLE Student(
    Snum decimal(9,0) NOT NULL,
    Sname varchar(30) NOT NULL,
    Major varchar(25),
    Level varchar(2),
    Age decimal(3,0) 
)";


if(mysqli_query($connection, $sql)){
    echo "Table created";
}else{
    echo "Oops! failed to create...\n" .mysqli_error($connection);
}
mysqli_close($connection);
?>
