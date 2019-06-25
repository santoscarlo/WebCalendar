<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
require('pulilan_db_connect.php');


?>
<?php include('../pulilan/brgynav.php');?>

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Resident Account Table</h1>
                </div>
                 <!-- end  page header -->
            </div>
            
            <script>
            function showResult(str) {
            if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
            } else {  // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
            document.getElementById("livesearch").innerHTML=this.responseText;
            }
            }
            xmlhttp.open("GET","livesearch/livesearch_brgy_resident.php?r="+str,true);
            xmlhttp.send();
            }
            </script>

           
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

            <div class="row">
                <div class="col-lg-12">
                    <?php
                    if(isset($_GET['rui'])){
    $rui = $_GET['rui'];

$con = mysqli_connect("localhost", "root", "", "pulilan");
$q = mysqli_query($con, "UPDATE mainuser_acc set edit_status = 'request', edit_notif = 'UNSEEN' where user_id = '$rui'");
?>

<div class="alert alert-success"><div class="close" data-dismiss="alert">&times</div>Successfuly Requested Update</div>

<?php
}

?>
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                       <div class="table-responsive">          
                    <table class="table">
                      <thead class="label-info">
                        <tr>
                            <th>Id</th>
                            <th>Brgy location</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Username</th>
                            <th>Edit</th>
                            <th class="danger">Delete</th>
                            <th>Action</th>
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
                
                $sql = mysqli_query($connection, "SELECT * from mainuser_acc where brgy_location = '$lol' && type = 'resident' && visibility = '0' && activate = '0' limit 0, 10");
  
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
              <td>
                <a class="btn btn-outline btn-info fa fa-pencil-square-o" href="updateresidentregistration.php?user_id=<?php echo $result['user_id'];?>" <?php
                if($result['edit_status'] == "disabled" || $result['edit_status'] == "request"){
                    ?>
                    disabled
                    <?php
                }
                ?>></a>
              </td>

              <td>
               <a type="button" href="delete_resacc.php?user_id=<?php echo $result['user_id']; ?>" class="btn btn-outline btn-danger fa fa-times"   <?php if($result['edit_status'] == "disabled" || $result['edit_status'] == "request"){
                    ?>
                    disabled
                    <?php
                }
                ?>></a>
             </td>
             <td><a class="btn btn-outline btn-info fa fa-pencil-square-o" href="brgy_resident_account_table.php?rui=<?php echo $result['user_id']; ?>" <?php
             if($result['edit_status'] == "approve"){
                    ?>
                    disabled
                    <?php
                }

             ?>>Request Update</a></td>
            </tr>
        <?php
}
}
    ?>
</tbody>
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

