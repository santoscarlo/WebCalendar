<?php include('../pulilan/brgynav.php');
session_start();
 ?>


            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Barangay Officials List</h1>
                </div>
            </div><!-- end  page header -->

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
            xmlhttp.open("GET","livesearch/livesearch_brgy_official.php?r="+str,true);
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
                        
 <!--                       <script> 
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
                        </script>-->

    <div class="panel panel-default col col-lg-12 col-md-12 center" align="center">

                    <table class="table">
                      <thead class="label-info">
                        <tr>
                            <th>Fullname</th>
                            <th>Position</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Contact</th>
                            <th>Brgy Location</th>
                            <th>Edit</th>
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
                
                $sql = mysqli_query($connection, "SELECT * from brgydetails_tbl where brgy_location = '$lol' && type = 'personnel' ORDER BY position DESC");
  
                if($sql){
                while($result = mysqli_fetch_assoc($sql))

         { 

             ?>
            <tr>
              <td><?php echo $result['fullname'];?></td>
              <td><?php echo $result['position'];?></td>
              <td><?php echo $result['email'];?></td>
              <td><?php echo $result['gender'];?></td>
              <td><?php echo $result['contact'];?></td>
              <td><?php echo $result['brgy_location'];?></td>
              <td><a href="updatebrgyofficials.php?brgydetails_id=<?php echo $result['brgydetails_id'];?>" class="btn btn-info btn-outline">Update Officials</a></td>
            </tr>
        <?php
        }
        }
        ?>
      </tbody>
    </table><!-- end wrapper -->

<?php include('../pulilan/adminfooter.php'); ?>