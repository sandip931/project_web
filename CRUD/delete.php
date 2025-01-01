
<?php
require('connect.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $del = "DELETE FROM student WHERE `student`.`id` = $id";
    $query = $conn->query($del);
    if(!$del){
        header('location:home.php?msg_failed=Could not delete');
    }else{
        header('location:home.php?msg_success=deleted successfully');
        
    }
    
}
?>