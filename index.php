<?php include('header.php') ?>
<?php include('dbcon.php') ?>
        <h2>All Students</h2>
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
                print_r($result);
              }

                ?>
                <tr>
                    <td>3</td>
                    <td>lars</td>
                    <td>paul</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>paul</td>
                    <td>harry</td>
                    <td>26</td>
                </tr>

            </tbody>
        </thead>
    </table>
    <?php include('footer.php') ?>

   