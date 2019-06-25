<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
require('pulilan_db_connect.php');
?>
<?php include('../pulilan/brgynav.php'); ?>

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Resident Account Table</h1>
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
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Username</th>
                            <th>Nationality</th>
                            <th>Brgy id no.</th>
                            <th>accounttype</th>
                            <th>Recover</th>
                            <th class="danger">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                    <!--End Advanced Tables -->

            <!--start of query-->
                <?php
                $show_record="SELECT * FROM mainuser_acc WHERE type='resident'AND visibility=1";
                $show_record_query = mysqli_query($connection, $show_record);
  
                if($show_record_query){
                while($result = mysqli_fetch_assoc($show_record_query))

         { 

             ?>
              <tr>
              <td style="color: red;"><?php echo $result['user_id'];?></td>
              <td><?php echo $result['brgy_location'];?></td>
              <td><?php echo $result['name'];?></td>
              <td><?php echo $result['gender'];?></td>
              <td><?php echo $result['username'];?></td>
              <td><?php echo $result['nationality'];?></td>
              <td><?php echo $result['brgy_id_num'];?></td>
              <td><?php echo $result['accounttype'];?></td>
              <td>
                <a class="btn btn-outline btn-info fa fa-check-square-o" href="recover_resacc.php?user_id=<?php echo $result['user_id'];?>"></a>
              </td>

              <td>
               <a type="button" href="delete_acc.php?user_id=<?php echo $result['user_id']; ?>" class="btn btn-outline btn-danger fa fa-times"></a>
             </td>
            <tr>
        <?php
}
}
    ?>
    </table>

<?php include('../pulilan/adminfooter.php'); ?>