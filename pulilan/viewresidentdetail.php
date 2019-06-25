<?php include('../pulilan/brgynav.php');
session_start();
 ?>


            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Resident Information</h1>
                </div>
            </div><!-- end  page header -->

            <div class="form-group">
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input type="text" class="form-control" placeholder="Search..." onkeyup="showResult(this.value)" name="search" id="search">
                  <span class="input-group-btn">
                      <input class="btn btn-default" type="submit" value="Go" name="_submit">
                  </span>
              </div>
              <div id="here"></div>
            </div>
                        
            <script> 
            $(document).ready(function(e)
            {
            $("#search").keyup(function()
            {
            $("#here").show();
            var x = $(this).val();
            $.ajax(
            {
            type:'GET',
            url:'searchfetch.php',
            data:'q=' +x,
            success:function(data)
            {

            $("#here").html(data);
            }
            });
            });
            });
            </script>

            <div class="panel panel-default col col-lg-12 col-md-12 center" align="center">

                    <table class="table">
                      <thead class="label-info">
                        <tr>
                            <th>Fullname</th>
                            <th>Position</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Brgy Location</th>
                            <th>View</th>
                            <th>Deactivate</th>
                        </tr>
                      </thead>
                      <tbody id="livesearch">
                    <!--End Advanced Tables -->

            <!--start of query-->
                <?php

                if(isset($_SESSION['lol'])&&!empty($_SESSION['lol'])){
                    $lol = $_SESSION['lol'];
                }
                global $lol;
                
                $sql = mysqli_query($connection, "SELECT * from mainuser_acc where brgy_location = '$lol' && type = 'resident' && activate = 0 && visibility = 0  limit 0, 10");
  
                if($sql){
                while($result = mysqli_fetch_assoc($sql))
                { 
                ?>

            <tr>
              <td><?php echo $result['name'];?></td>
              <td><?php echo $result['position'];?></td>
              <td><?php echo $result['username'];?></td>
              <td><?php echo $result['password'];?></td>
              <td><?php echo $result['brgy_location'];?></td>
              <td><a href="viewresident.php?user_id=<?php echo $result['user_id'];?>" class="btn btn-info btn-outline fa fa-eye"></a></td>
              <td><a href="deactivateresident.php?user_id=<?php echo $result['user_id'];?>" class="btn btn-danger btn-outline fa fa-power-off"></a></td>
            </tr>

        <?php
        }
        }
        ?>

      </tbody>
    </table><!-- end wrapper -->
  </div>

<?php include('../pulilan/adminfooter.php'); ?>