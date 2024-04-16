<?php
    include 'header.php';
    $db =new database();

    if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $roll = $_POST['roll'];
      $course = $_POST['course'];

      if
    }
    ?>
    <div class="card-body">
    <form action="" method="POST">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Roll:</label>
    <input type="text" class="form-control" id="roll" placeholder="Enter roll" name="pswd">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Course:</label>
    <input type="text" class="form-control" id="course" placeholder="Enter course" name="pswd">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  <a class="btn btn-primary" href="index.php">Go Back</a>
</form>
    </div>
    <?php
    include 'footer.php';
    ?>