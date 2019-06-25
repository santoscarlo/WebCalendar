<?php
error_reporting(E_ALL ^ E_NOTICE);
include "pulilan_db_connect.php";
if(isset($_GET['user_id'])){
$user_id = $_GET['user_id'];
}
global $user_id;
if (!isset($_SESSION['username'])) {
  
}
  if(isset($_GET['brgy_location'])){
              $brgy_location = $_GET['brgy_location'];
            }
  if(isset($_GET['name'])){
              $name = $_GET['name'];
            }
  if(isset($_GET['username'])){
              $username = $_GET['username'];
            }
  if(isset($_GET['password'])){
              $password = $_GET['password'];
            }
  if(isset($_GET['nationality'])){
              $nationality =$_GET['nationality'];
            }
  if(isset($_GET['brgy_id_num'])){
              $brgy_id_num =$_GET['brgy_id_num'];
            }
  if(isset($_GET['present'])){
              $present =$_GET['present'];
            }
             if(isset($_GET['gender'])){
              $gender =$_GET['gender'];
            }
  global $brgy_location, $name, $gender, $username, $password, $nationality, $brgy_id_num, $present;
  if(isset($_POST["submit"])){
   


      $brgy_location =$_POST['brgy_location'];
      $name =$_POST['name'];
      $gender =$_POST['gender'];
      $username =$_POST['username'];
      $nationality =$_POST['nationality'];
      $brgy_id_num =$_POST['brgy_id_num'];
      $accounttype ="brgy_official";

              if(($check = mysqli_num_rows(mysqli_query($connection, "SELECT * from mainuser_acc where username = '$username'"))) > 0){
           

                      header("location: updateresidentregistration.php?brgy_location=".$brgy_location."&&name=".$name."&&username=".$username."&&password=".$password."&&nationality=".$nationality."&&gender=".$gender."&&brgy_id_num=".$brgy_id_num."&&present=1");

              }
              else{

$update = "UPDATE brgydetails_tbl SET brgydetails_id='$brgydetails_id',name='$name',gender='$gender',position='$position',email='email',contact='$contact',brgy_location='brgy_location' WHERE brgydetails_id='$brgydetails_id'";
$update_query = mysqli_query($connection, $update);
if(!$update){
  
   echo "mysli_error";

}
else{

              echo'<script>';
              echo'alert("successfully updated!");';
              echo'window.location.href="brgy_resident_account_table.php";';
              echo'</script>';
  //header('location: brgylist_table.php');
}
}

}


?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
        <div class="changep">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading text-center">
                        <a href="nlanding.php">
                          <img src="../pulilan/img/plogo.png" alt=""/>
                        </a>
                        <h1 class="panel-title fa fa-user" style="text-shadow: 1px 1px 2px red, 0 0 25px orange, 0 0 5px yellow;"> Update Barangay Information</h1>
                    </div>
                    <div class="panel-body">

                      <?php

                      $get = mysqli_query($connection, "SELECT * from brgydetails_tbl where brgydetails_id = '$brgydetails_id'");
                      $h = mysqli_fetch_array($get);


                      ?>

                      <form action="" method="POST">

                        <div class="form-group">
                          <input placeholder="brgy. location" type="text" class="form-control" name="brgy_location" required value="<?php echo $h['brgy_location'], $brgy_location; ?>">
                        </div>
                        
                        <div class="form-group">
                          <input placeholder="name" type="name" class="form-control" name="name" required value="<?php echo $h['name'], $name; ?>"s>
                        </div>

                        <div class="form-group">
                          <input placeholder="gender" type="text" class="form-control" name="gender" autofocus required value="<?php echo $h['gender'], $gender; ?>">
                        </div>

                        <div class="form-group">
                       <?php

                                      if($present !=""){

                                ?>
                                <P style="color: red">*Please input new username</P>
                                <?php
                                  }

                                ?>
                              <input placeholder="Username" type="text" class="form-control" name="username" required value="<?php echo $h['username'], $username; ?>" <?php

                                      if($present !=""){

                                ?>

                              style="border: 1px solid red;"
                                <?php
                                  }

                                ?>
                              >
                        </div>

                        <div class="form-group">
                          <input placeholder="nationality" type="text" class="form-control" name="nationality" required value="<?php echo $h['nationality'], $nationality; ?>">
                        </div>

                        <div class="form-group">
                          <input placeholder="Barangay Id Number" type="text" class="form-control" name="brgy_id_num" required value="<?php echo $h['brgy_id_num'], $brgy_id_num; ?>">
                        </div>
                        
                        <div class="form-group text-center">
                          <input type="submit"  class="btn btn-primary" value="Submit" name="submit">
                        </div>
                        <!--login link -->
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>