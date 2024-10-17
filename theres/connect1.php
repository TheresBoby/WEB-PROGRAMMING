<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="test";
$conn =mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    echo "Connected to ". $dbname ." establishdd";
}
else{
    die("connection failed" .mysqli_connect_error());
}
?>