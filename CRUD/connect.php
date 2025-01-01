<?php
$server ="localhost";
$user = "root";
$pass = "";
$data_base = "school";

$conn = new mysqli($server,$user, $pass, $data_base);

if($conn->connect_error){
    die('not connected : Error code : ');
}

?>