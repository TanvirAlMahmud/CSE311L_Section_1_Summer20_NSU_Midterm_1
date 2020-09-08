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

$sql = "INSERT INTO Provider VALUES 
(1,'Acme Widget Suppliers,1 Grub St., Potemkin Village','IL 61801'),
(2,'Big Red Tool and Die,4 My Way, Bermuda Shorts',' OR 90305'),
(3,'Perfunctory Parts,99999 Short Pier, Terra Del Fuego',' TX 41299'),
(4,'Alien Aircaft Inc.,2 Groom Lake, Rachel',' NV 51902')
";


if(mysqli_query($connection, $sql)){
    echo "inserted infos";
}else{
    echo "Oops! failed to insert...\n" .mysqli_error($connection);
}
mysqli_close($connection);
?>
