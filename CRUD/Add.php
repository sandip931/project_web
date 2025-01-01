<form action="update.php" method="post">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Add New Record
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <input name="fname" type="text" placeholder="first name" class="pad">
          <input name="lname" type="text" placeholder="last name" class="pad">
          <input name="email" type="email" placeholder="email" class="pad">
          <input name="address" type="text" placeholder="address" class="pad">
          <input name="book" type="text" placeholder="book name" class="pad">
          <input name="author" type="text" placeholder="author name" class="pad">
          <br><br><b>borrowed date</b> & <b>return date:</b> <br>
          <input name="borrow_date" type="date" placeholder="borrowed date" class="pad">
          <input name="return_date" type="date" placeholder="return date" class="pad">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="add_btn" value="Add record"></button>
      </div>
    </div>
  </div>
</div>
</form>
