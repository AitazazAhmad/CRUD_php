<?php include('header.php') ?>
<?php include('dbcon.php') ?>
<div class="box1">
            <h2>All Employees</h2>
        <button  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD Employees</button>
        </div>
    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <tbody>
                <?php 
                 
               $query = "select * from employees";
               $result = mysqli_query($connection , $query);
              if(!$result)
              {
                die("Query failed".mysqli_error());
              }
              else
              {
                while($row = mysqli_fetch_assoc($result))
                {
                    ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['first_name'];?></td>
                        <td><?php echo $row['last_name'];?></td>
                        <td><?php echo $row['age'];?></td>
                        <td><a href="update_page_1.php?id=<?php echo $row['id'];?>" class="btn btn-success">Update</a></td>
                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
                        
                    <?php 
                    
                }
            }
            ?>

            </tbody>
        </thead>
    </table>
    <?php
  if(isset($_GET['message']))
  {
    echo "<h6>" .$_GET['message']. "</h6>";
  }
    ?>
    <?php
  if(isset($_GET['insert_msg']))
  {
    echo "<h6>" .$_GET['message']. "</h6>";
  }
    ?>
    <form action="insert_data.php" method = "post">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ADD Employees</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       </div>
        <div class="form-group">
          <label for="f_name">First Name</label>
          <input type="text" name="f_name" class="form-control">
        </div>
        <div class="form-group">
          <label for="f_name">Last Name</label>
          <input type="text" name="l_name" class="form-control">
        </div>
        <div class="form-group">
          <label for="f_name">Age</label>
          <input type="text" name="age" class="form-control">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-success" name="add_students" value="ADD">
        </div>
    </div>
</div>
</div>
</form>
    <?php include('footer.php') ?>

   