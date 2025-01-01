<?php include('header.php')?>
<?php require('connect.php')?>

<!-- HEADING -->
<div class="p-3 mb-5 bg-dark text-white">
<h1 class="display-3" align="center"><b>Student Book Details</b></h1>
</div>
<!-- HEADING -->

<?php include('add.php')?>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>fname</th>
      <th>lname</th>
      <th>email</th>
      <th>address</th>
      <th>Book</th>
      <th>author</th>
      <th>borrow_date</th>
      <th>return_date</th>
      <th>update</th>
      <th>delete</th>
    </tr>
  </thead>
<?php

// take database name as library in the mysql database 
$sql = "SELECT * FROM student";

$res = $conn->query($sql);
if(!$res){
  echo "operation failed";
} else { 
 while($row = mysqli_fetch_assoc($res)){
?>
  <tbody>
    <tr>
      <th scope="row"> <?php echo $row['id'];?> </th>
      <td><?php echo $row['firstname'];?></td>
      <td><?php echo $row['lastname'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['address'];?></td>
      <td><?php echo $row['book'];?></td>
      <td><?php echo $row['author'];?></td>
      <td><?php echo $row['borrow_date'];?></td>
      <td><?php echo $row['return_date'];?></td>
      <td>
      <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-success" name="update_btn">edit</button></a>
      </td>
      <td>
      <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-warning" name="delete_btn">delete</button></a>
      </tr>
      </td>
  </tbody>

  <?php
 }
}

?>
</table>

<?php
if (isset($_GET['msg_failed'])){
  $msg=$_GET['msg_failed'];
  $webcode=" 
      <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
      <strong>$msg</strong> 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
      </button>
    </div>
  ";
  echo $webcode;
}

if (isset($_GET['msg_success'])){
  $msg=$_GET['msg_success'];
  $webcode=" 
      <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
      <strong> $msg </strong> 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
      </button>
    </div>
  ";
  echo $webcode;
}

?>


<?php include('footer.php')?>
