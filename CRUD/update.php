<?php
require('connect.php');
if (isset($_POST['add_btn'])){
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $address = $_POST['address'];
   $book = $_POST['book'];
   $author = $_POST['author'];
   $borrow_date = $_POST['borrow_date'];
   $return_date = $_POST['return_date'];

   if($fname=="" || empty($fname)){
    header('location:home.php?msg_failed=Input feild empty.');
   } 
   else{
      $query = "INSERT INTO `student` (`id`, `firstname`, `lastname`, `email`, 
               `address`, `book`, `author`, `borrow_date`, `return_date`) 
               VALUES (NULL, '$fname', '$lname', '$email',
               '$address', '$book', '$author', '$borrow_date', '$return_date');";
      $res=$conn->query($query);
      if(!$res){
         echo "something went wrong";
      }
      else{
         header('location:home.php?msg_success=Data Insertion Successfull.');
      }
      
   }
}
?>