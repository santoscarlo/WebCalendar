<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
require('pulilan_db_connect.php');
?>
<?php include('../pulilan/adminnav.php'); ?>

            
        <!--  page header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Barangay Account Table</h1>
            </div><!-- end  page header -->
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
  xmlhttp.open("GET","livesearch/livesearch.php?r="+str,true);
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
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                       <div class="table-responsive">          
                    <table class="table">
                      <thead class="label-info">
                        <tr>
                            <th>Id</th>
                            <th>Brgy location</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>accounttype</th>
                            <th>Edit</th>
                            <th class="danger">Delete</th>
                        </tr>
                      </thead>
                      <tbody id="livesearch">
                      
                    <!--End Advanced Tables -->
                     <?php
                     $con = mysqli_connect("localhost", "root", "", "pulilan");
                    $sql = mysqli_query($con, "SELECT * from mainuser_acc where type = 'official'  && visibility = '0' ORDER BY user_id ");

                while($result = mysqli_fetch_array($sql))

         { 

             ?>
              <tr>
              <td style="color: red;"><?php echo $result['user_id'];?></td>
              <td><?php echo $result['brgy_location'];?></td>
              <td><?php echo $result['name'];?></td>
              <td><?php echo $result['username'];?></td>
              <td><?php echo $result['password'];?></td>
              <td><?php echo $result['type'];?></td>
              <td>
                <a class="btn btn-outline btn-info fa fa-pencil-square-o" href="updateresidentregistration.php?user_id=<?php echo $result['user_id'];?>"></a>
              </td>

              <td>
               <a type="button" href="delete_acc.php?user_id=<?php echo $result['user_id']; ?>" class="btn btn-outline btn-danger fa fa-times"></a>
             </td>
            <tr>
        <?php
}
?>


            <!--start of query-->
   
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

