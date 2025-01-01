<?php


$server ="localhost";
$user = "root";
$pass = "";

$conn = new mysqli($server,$user, $pass);
$query=mysqli_query($conn,"CREATE DATABASE school");

// for table : 
$sql=" CREATE TABLE `school`.`student` (`id` INT(11) NOT NULL AUTO_INCREMENT , `firstname` TEXT NOT NULL , `lastname` TEXT NOT NULL , `email` VARCHAR(100) NOT NULL , `address` VARCHAR(100) NOT NULL , `book` VARCHAR(100) NOT NULL , `author` VARCHAR(100) NOT NULL , `borrow_date` DATE NOT NULL , `return_date` DATE NOT NULL , PRIMARY KEY (`id`)) ";
// ///////////////

if($conn->query($sql)===TRUE){
    echo "Database created successfully";
}
else{
    echo "Error creating database : ".$conn->error;
}

if($conn->connect_error){
    die('not connected : Error code : ');
}


?>