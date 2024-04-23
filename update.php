<?php
    include 'header.php';
    $db = new Database();
    $uid= $_GET['id'];

    $query ="SELECT * FROM tbl_users WHERE id = $uid";
    $data = $db->select($query)->fetch_assoc();

    if(isset($_POST['update'])){
      $name = $_POST['name'];
      $roll = $_POST['roll'];
      $course = $_POST['course'];

      if($name ==""||$roll ==""||$course ==""){
        $error = "<div class='alert-danger'>Field must not be empty</div>";
      }else{
        $query ="UPDATE tbl_users
        SET
        name = '$name',
        roll = '$roll',
        course = '$course'
        where id = $uid";
        $update = $db->update($query);
    }
  }

  if(isset($_POST['delete'])){
    $id = $_GET['uid'];
    $sql ="DELETE FROM tbl_users WHERE id = $uid";
    $delete_data =$db->delete($sql);
}

    ?>
    <div class="card-body">
    <form action="" method="POST">
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" value="<?php echo $data['name'];?>" class="form-control" id="name" placeholder="Enter Name" name="name">
  </div>
  <div class="mb-3">
    <label for="roll" class="form-label">Roll:</label>
    <input type="text" value="<?php echo $data['roll'];?>" class="form-control" id="roll" placeholder="Enter roll" name="roll">
  </div>
  <div class="mb-3">
    <label for="course" class="form-label">Course:</label>
    <input type="text" value="<?php echo $data['course'];?>"class="form-control" id="course" placeholder="Enter course" name="course">
  </div>
  <button type="submit" name="update" class="btn btn-primary">Update</button>
  <button type="submit" name="delete" class="btn btn-primary">Delete</button>
  <a class="btn btn-primary" href="index.php">Go Back</a>
</form>
</div>
    <?php
    include 'footer.php';
    ?>