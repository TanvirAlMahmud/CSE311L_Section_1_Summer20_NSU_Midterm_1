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

$sql = "INSERT INTO Goodies VALUES 
(1,'Left Handed Bacon Stretcher Cover','Red'),
(2,'Smoke Shifter End','Black'),
(3,'Acme Widget Washer','Red'),
(4,'Acme Widget Washer','Silver'),
(5,'I Brake for Crop Circles Sticker','Translucent'),
(6,'Anti-Gravity Turbine Generator','Cyan'),
(7,'Anti-Gravity Turbine Generator','Magenta'),
(8,'Fire Hydrant Cap','Red'),
(9,'Segment Display','Green')
";


if(mysqli_query($connection, $sql)){
    echo "inserted infos";
}else{
    echo "Oops! failed to insert...\n" .mysqli_error($connection);
}
mysqli_close($connection);
?>
