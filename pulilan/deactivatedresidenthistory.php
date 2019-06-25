<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
require('pulilan_db_connect.php');
?>
<?php include('../pulilan/brgynav.php'); ?>

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Deactivated Resident Account</h1>
                </div>
                 <!-- end  page header -->
            </div>
           
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input type="text" class="form-control" placeholder="Search..." name="search" id="search">
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
                        

            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                       <div class="table-responsive">          
                    <table class="table">
                      <thead class="label-info">
                        <tr>
                            <th>Id</th>
                            <th>Brgy location</th>
                            <th>Fullname</th>
                            <th>Gender</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Brgy id no.</th>
                            <th>Activate</th>
                        </tr>
                      </thead>
                      <tbody>
                    <!--End Advanced Tables -->

            <!--start of query-->
                <?php
                 if(isset($_SESSION['lol'])&&!empty($_SESSION['lol'])){
                    $lol = $_SESSION['lol'];
                }
                global $lol;
               $sql = mysqli_query($connection, "SELECT * from mainuser_acc where brgy_location = '$lol' && accounttype = 'resident' && activate = 1 limit 0, 10");
                if($sql){
                while($result = mysqli_fetch_assoc($sql))

         { 

             ?>
              <tr>
              <td style="color: red;"><?php echo $result['user_id'];?></td>
              <td><?php echo $result['brgy_location'];?></td>
              <td><?php echo $result['name'];?></td>
              <td><?php echo $result['gender'];?></td>
              <td><?php echo $result['username'];?></td>
              <td><?php echo $result['password'];?></td>
              <td><?php echo $result['brgy_id_num'];?></td>
              <td>
                <a class="btn btn-outline btn-info fa fa-check-square-o" href="activateresident.php?user_id=<?php echo $result['user_id'];?>"></a>
              </td>

             
            <tr>
        <?php
}
}
    ?>
    </table><!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>
</tr>