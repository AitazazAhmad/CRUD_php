<?php include('header.php') ?>
<?php include('dbcon.php') ?>
<div class="box1">
            <h2>All Students</h2>
        <button  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">>ADD STUDENTS</button>
        </div>
    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
            </tr>
            <tbody>
                <?php 
                 
               $query = "select * from students";
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
                        </tr>
                        
                    <?php 
                    
                }
            }
            ?>

            </tbody>
        </thead>
    </table>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <?php include('footer.php') ?>

   