<?php
    include 'header.php';
    $db =new database();

    if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $roll = $_POST['roll'];
      $course = $_POST['course'];

      if($name ==""||$roll ==""||$course ==""){
        $error = "<div class='alert-danger'>Field must not be empty</div>";
      }else{
        $query ="INSERT INTO tbl_users(name,roll,course)values('$name','$roll','$course')";
        $create = $db->insert($query);
      }
    }
    ?>
    <div class="card-body">
      <?php
      if(isset($error)){
        echo $error;
      }
    ?>
    <form action="" method="POST">
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
  </div>
  <div class="mb-3">
    <label for="roll" class="form-label">Roll:</label>
    <input type="text" class="form-control" id="roll" placeholder="Enter roll" name="roll">
  </div>
  <div class="mb-3">
    <label for="course" class="form-label">Course:</label>
    <input type="text" class="form-control" id="course" placeholder="Enter course" name="course">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  <a class="btn btn-primary" href="index.php">Go Back</a>
</form>
    </div>
    <?php
    include 'footer.php';
    ?>