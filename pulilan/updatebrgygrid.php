<?php include('../pulilan/adminnav.php');
include "pulilan_db_connect.php";

if(isset($_GET['user_id']))
{

  $user_id = $_GET['user_id'];
}

global $brgydetails_id;
if(isset($_SESSION['position']))
{

}
    if(isset($_GET['name'])){
        $fullname = $_GET['name'];
    }
     if(isset($_GET['position'])){
        $fullname = $_GET['position'];
    }
     if(isset($_GET['email'])){
        $fullname = $_GET['email'];
    }
     if(isset($_GET['gender'])){
        $fullname = $_GET['gender'];
    }
     if(isset($_GET['contact'])){
        $fullname = $_GET['contact'];
    }
     if(isset($_GET['brgy_location'])){
        $fullname = $_GET['brgy_location'];
    }
global $fullname, $position, $email, $gender, $contact, $brgy_location, $present;
if(isset($_POST['submit'])){

    $fullname = $_POST['name'];
    $position = $_POST['position'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $brgy_location = $_POST['brgy_location'];
    $type = 'officials';
    

      $connection = mysqli_connect("localhost", "root", "", "pulilan");
      
      
        $update = mysqli_query($connection, "UPDATE brgydetails_tbl SET name='$name', position='$position', email='$email', gender='$gender', contact='$contact', brgy_location='$brgy_location' where brgydetails_id='$brgydetails_id' ");
      if($update){
 echo'<script>';
              echo'alert("successfully updated!");';
              echo'window.location.href="updatebrgygrid.php";';
              echo'</script>';

        
      }
      else{
          echo ' mysql_error';

      }

      }







 ?>
            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Update Barangay Information</h1>
                </div>
                <!--End Page Header -->
            </div>


<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui.js"></script>

  <div class="col col-lg-12 col-md-12 panel panel-default">
          <?php

          $get = mysqli_query($connection, "SELECT * FROM mainuser_acc WHERE user_id = '$user_id'");
          $h = mysqli_fetch_array($get);


          ?>


                  <form method="POST">        
                  <fieldset>
                    <legend><b>Barangay Official's Information</b></legend>

                      <div class="form-group col-md-6">
                        <input id="fullname" type="input" name="name" class="form-control"  placeholder="Enter Full Name" value="<?php echo $h['name'], $name; ?>" required>
                      </div>

                      <div class="form-group col-md-6">
                       <input  id="" type="input" name="position" class="form-control pull-right"  placeholder="Enter Position" value="<?php echo $h['position'], $position;?>" required>   
                      </div>

                      <div class="form-group col-md-6">
                       <input  id="email" type="input" name="email" class="form-control pull-right"  placeholder="Enter Email" value="<?php echo $h['email'], $email;?>" required>   
                      </div>

                      <div class="form-group col-md-6">
                       <input  id="gender" type="input" name="gender" class="form-control pull-right"  placeholder="Enter Gender" value="<?php echo $h['gender'], $gender;?>" required>   
                      </div>

                      <div class="form-group col-md-6">
                       <input  id="" type="input" name="contact" class="form-control pull-right"  placeholder="Enter Contact Number" value="<?php echo $h['contact'], $contact;?>" required>   
                      </div>

                       <div class="form-group col-md-6">
                       <input  id="" type="input" name="brgy_location" class="form-control pull-right"  placeholder="Enter Contact Number" value="<?php echo $h['brgy_location'], $brgy_location;?>" required>   
                      </div>
                      <div class="form-group" align="center">
                        <button type="submit" name="submit" class="btn btn-primary">Update Information</button>
                      </div>

                  </fieldset>
                  </form>

  </div>
        
<?php include('../pulilan/adminfooter.php'); ?>