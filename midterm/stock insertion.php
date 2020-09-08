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

$sql = "INSERT INTO Stock VALUES 
(1,3,0.50),
(1,4,0.50),
(1,8,11.70),
(2,3,0.55),
(2,8,7.95),
(2,1,16.50),
(3,8,12.50),
(3,9,1.00),
(4,5,2.20),
(4,6,1247548.23),
(4,7,1247548.23)
";


if(mysqli_query($connection, $sql)){
    echo "inserted infos";
}else{
    echo "Oops! failed to insert...\n" .mysqli_error($connection);
}
mysqli_close($connection);
?>
