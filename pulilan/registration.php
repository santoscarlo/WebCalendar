<?php


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
  global $brgy_location, $name, $gender, $username, $password, $nationality, $brgy_id_num, $present;
?>
<!DOCTYPE html>
<html>


    <?php

            session_start();
            if(isset($_POST["submit"])){
            if(!empty($_POST['username']) && !empty(['password'])){

              $brgy_location = $_POST['brgy_location'];
              $name = $_POST['name'];
              $gender =$_POST['gender'];
              $username = $_POST['username'];
              $password = $_POST['password'];
              $nationality =$_POST['nationality'];
              $brgy_id_num =$_POST['brgy_id_num'];
              $accounttype ='resident';
              
              $connection = mysqli_connect("localhost", "root", "","pulilan");


              if(($check = mysqli_num_rows(mysqli_query($connection, "SELECT * from mainuser_acc where username = '$username'"))) > 0){
           

                      header("location: registration.php?name=".$brgy_location."&&name=".$name."&&username=".$username."&&password=".$password."&&nationality=".$nationality."&&brgy_id_num=".$brgy_id_num."&&present=1");

              }
              else{

            $cmd = "INSERT INTO mainuser_acc(brgy_location, name, gender, username, password, nationality, brgy_id_num, accounttype) VALUES('$brgy_location','$name','$gender','$username','$password','$nationality','$brgy_id_num','$accounttype')";
              $query = mysqli_query($connection, $cmd);

              if ($query) {
                echo'<script>';
               echo'alert("successfully Registered!");';
               echo'window.location.href="login.php";';
               echo'</script>';
                //header("location: residentregistration.php");
              }
              else{
                echo "Failed";
              }
            }
            }
          }
            ?>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Core CSS - Include with every page -->
    <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />

</head>
<body class="body-Login-back">

    <div class="container">
        <div class="changep">
            <div class="row">
            <a href="nlanding.php">
                <div class="col-md-4 col-md-offset-4 text-center logo-margin">
                    <img src="../pulilan/img/plogo.png" alt=""/>
                </div>
            </a>
            <div class="col-md-4 col-md-offset-4">
    <?php
                 if($present !=""){
                  ?>
           
                  <div style="position: absolute;"">
<div class="alert alert-warning"><div class="close" data-dismiss="alert">&times</div>Username Already Exist</div>

                  <?php
                 }
              ?>
            

                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading text-center">
                        <h1 class="panel-title fa fa-user" style="text-shadow: 1px 1px 2px red, 0 0 25px orange, 0 0 5px yellow;"> CBMS 2017 | Login form</h1>
                    </div>
                    <div class="panel-body">
                      <form method="POST">
                        <div class="item">
                          <div class="form-group">
                            <input placeholder="Full name" type="text" class="form-control" name="name" required value="<?php echo $name; ?>">
                          </div>
                          <div class="form-group">
                            <input placeholder="Full name" type="text" class="form-control" name="brgy_location" required value="<?php echo $brgy_location; ?>">
                          </div>

                            <div class="form-group">
                              <label class="col col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center">Gender:</label>

                              <select class="col col-lg-6 col-md-6 col-sm-6 col-xs-6" name="gender" id="gender" required>
                                <option value="None"></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                              </select>
                            </div>
                                  
                            <div class="form-group">
                               <?php

                                      if($present =="1"){

                                ?>
                                <P style="color: red">*Please input new username</P>
                                <?php
                                  }

                                ?>
                              <input placeholder="Username" type="text" class="form-control" name="username" required value="<?php echo $username; ?>" <?php

                                      if($present =="1"){

                                ?>

                              style="border: 1px solid red;"
                                <?php
                                  }

                                ?>
                              >
                            </div>

                            <div class="form-group">
                              <input placeholder="Password" type="password" class="form-control" name="password" required value="<?php echo $password; ?>">
                            </div>

                            <div class="form-group">
                              <input placeholder="Nationality" type="text" class="form-control" name="nationality" value="<?php echo $nationality; ?>">
                            </div>

                            <div class="form-group text-center">
                              <input placeholder="brgy. id number" type="text" class="form-control" name="brgy_id_num" required value="<?php echo $brgy_id_num; ?>">
                            
                            <input class="btn btn-success" type="submit" name="submit" value="Submit">
                            </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>



        <!-- end page-wrapper -->
 <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>