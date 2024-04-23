<?php
    include 'header.php';
    ?>
    <?php
    $db = new Database();
    $sql = "SELECT * FROM tbl_users";
    $read = $db->select($sql);
   

    if(isset($_POST['delete'])){
        $id = $_GET['uid'];
        $sql ="DELETE FROM tbl_users WHERE id = $id";
        $delete_data =$db->delete($sql);
    }

    ?>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['msg'])){
                            echo "<div class='alert alert-success'><strong>Success: </strong>".$_GET['msg']."</div>";
                        }
                        ?>
                    <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <th>Serial</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Course</th>
                            <th>action</th>
                        </tr>
                        <?php
                        if($read){
                            $i=0;
                        while($row = $read->fetch_assoc()) {
                            $i++;
                        ?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['roll'];?></td>
                            <td><?php echo $row['course'];?></td>
                            <td>
                                <a class="btn btn-primary" href="update.php?id=<?php echo $row['id'];?>">Edit</a>
                                
                                <a href="?uid=<?php echo $row['id'];?>"><button class="btn btn-primary" type="submit" name="delete">Delete</button></a>
                            </td>
                        </tr>
                        <?php } }else{ ?>
                            <p>Data not Found!</p>
                            <?php } ?>
                    </table>
                    <a class="btn btn-success" href="create.php">create</a>
                    </div>
<?php
include 'footer.php';
?>         