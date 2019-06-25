<?php include('../pulilan/brgynav.php');
session_start();
 ?>


            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Barangay  Information Official</h1>
                </div>
            </div><!-- end  page header -->

    <div class="panel panel-default col col-lg-12 col-md-12 center" align="center">
        
        <div class="panel panel-head">
            <b><p>Resident Activated List</p></b>
        </div>
        <div class="panel panel-body panel-info">
             <div class="panel panel-default">
                       <div class="table-responsive">          
                    <table class="table">
                      <thead class="label-info">
                        <tr>
                            <th>Fullname</th>
                            <th>Position</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Gender</th>
                            <th>Contact</th>
                            <th>Brgy Location</th>
                            
                        </tr>
                      </thead>
                      <tbody id="livesearch">
                    <!--End Advanced Tables -->

            <!--start of query-->
                <?php
                $user_id = $_GET['user_id'];
                if(isset($_SESSION['lol'])&&!empty($_SESSION['lol'])){
                    $lol = $_SESSION['lol'];
                }
                global $lol;
                
                $sql = mysqli_query($connection, "SELECT * from mainuser_acc WHERE user_id = '".$_GET['user_id']."' && brgy_location = '$lol' ");
  
                if($sql){
                while($result = mysqli_fetch_assoc($sql))

         { 

             ?>
              <tr>
              <td><?php echo $result['name'];?></td>
              <td><?php echo $result['position'];?></td>
              <td><?php echo $result['email'];?></td>
              <td><?php echo $result['username'];?></td>
              <td><?php echo $result['password'];?></td>
              <td><?php echo $result['gender'];?></td>
              <td><?php echo $result['contact'];?></td>
              <td><?php echo $result['brgy_location'];?></td>
             s</a></td>
                
                
            </tr>
        <?php
}
}
    ?>
</tbody>
    </table><!-- end wrapper -->
        </div>

    </div>

<?php include('../pulilan/adminfooter.php'); ?>