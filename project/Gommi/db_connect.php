<?php
$dbserver="localhost";
$dbuser="root";
$password="";
$dbname="gomi";

$conn=mysqli_connect($dbserver,$dbuser,$password,$dbname);

if($conn){
    // echo "Connected Successfully \r\n";
}
else{
    echo "\r\nDid not connect" .mysqli_connect_error();
}

?>
