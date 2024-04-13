<?php
    include 'header.php';
    ?>
    <div class="card-body">
    <form action="/action_page.php">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Name:</label>
    <input type="text" value="Gulshan" class="form-control" id="name" placeholder="Enter Name" name="Name">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Roll:</label>
    <input type="text" value="123456" class="form-control" id="roll" placeholder="Enter roll" name="Roll">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Course:</label>
    <input type="text" value="B.tech"class="form-control" id="course" placeholder="Enter course" name="Course">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
  <button type="submit" class="btn btn-primary">Delete</button>
  <a class="btn btn-primary" href="index.php">Go Back</a>
</form>
</div>
    <?php
    include 'footer.php';
    ?>