<?php include('header.php') ?>
<?php require('connect.php')?>
<style>
    .center{
        display:flex;
        align-items:center;
        justify-content:center;
    }
    .formback{
        background:wheat;
        width:400px;
        padding:50px;
        border-radius:19px;
    }
</style>

<?php
  if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM student WHERE `id` = $id";
    $res = $conn->query($sql);
    if(!$res){
      echo "operation failed";
    } else {
      $row = $res->fetch_assoc(); 
  }
}


/*
UPDATE `student` SET `firstname` = 'asdf23', `lastname` = 'asdfac', `email` = 'sadf@1145', `address` = 'sdf32', `book` = 'sdfas1', `author` = 'df1', `borrow_date` = '2024-12-27', `return_date` = '2024-12-24' WHERE `student`.`id` = 8;
*/
// -----------------

if(isset($_POST['update'])){


  if(isset($_GET['new_id'])){
    $id=$_GET['new_id'];
  }
    
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $book=$_POST['book'];
    $author=$_POST['author'];
    $borrow_date=$_POST['borrow_date'];
    $return_date=$_POST['return_date'];
    $update_query="UPDATE `student` SET `firstname` = '$fname', `lastname` = '$lname', `email` = '$email', `address` = '$address', `book` = '$book', `author` = '$author', `borrow_date` = '$borrow_date', `return_date` = '$return_date' WHERE `student`.`id` = '$id';";
    
    $upd_res=$conn->query($update_query);

    if(!$upd_res){
      echo "edit failed";
    }
    else{
      header('location:home.php?msg_success=Data edited successfully');
    }
}

?>
<div class="center">
    <div class="formback">
        <h4 align="center">Edit Data</h4>
<form action="edit.php?new_id=<?php echo $id; ?>" method="post">
  <div class="form-group">
    <label>First Name</label>
    <input type="text" name="fname" class="form-control" placeholder="first name" value="<?php echo $row['firstname']; ?>">
  </div>
  <div class="form-group">
    <label>Last Name</label>
    <input type="text" name="lname" class="form-control" placeholder="last name" value="<?php echo $row['lastname']; ?>">
  </div>

  <div class="form-group">
    <label>email</label>
    <input type="email" name="email" class="form-control" placeholder="email" value="<?php echo $row['email']; ?>">
  </div>

  <div class="form-group">
    <label>address</label>
    <input type="text" name="address" class="form-control" placeholder="address" value="<?php echo $row['address']; ?>">
  </div>

  <div class="form-group">
    <label>Book Name</label>
    <input type="text" name="book" class="form-control" placeholder="book" value="<?php echo $row['book']; ?>">
  </div>

  <div class="form-group">
    <label>author</label>
    <input type="text" name="author" class="form-control" placeholder="author" value="<?php echo $row['author']; ?>">
  </div>

  <div class="form-group">
    <label>borrowed date</label>
    <input type="date" name="borrow_date" class="form-control" value="<?php echo $row['borrow_date']; ?>">
  </div>

  <div class="form-group">
    <label>return date</label>
    <input type="date" name="return_date" class="form-control" value="<?php echo $row['return_date']; ?>">
  </div>

  <input type="submit" class="btn btn-primary" name="update" value="Update"></button>
</form>
</div>
</div>

<?php include('footer.php') ?>