<?php
include "dental_connect.php";
error_reporting(E_ALL ^ E_NOTICE);

session_start();

if (!isset($_SESSION['username'])) {
  
}

if(isset($_GET['achieve'])){
    $achieve = $_GET['achieve'];
}
global $achieve;
if(isset($_GET['project'])){
    $project = $_GET['project'];
}
global $project;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBMS 2017</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>
<!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="residentindex.php">
                    <img src="../pulilan/img/plogo.png" alt="pulilan logo" style="width: 150%; height: 300%;" class="img-responsive" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-arrow-right fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li>
                            <a href="change_password.php"><i class="fa fa-cogs fa-fw"></i> Change Password</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                            <img src="../pulilan/iimg/person-1.jpg" alt="" class="img img-responsive">
                            </div>
                            <br>
                            <div class="text-center">
                                <div style="text-transform: uppercase;"><strong><?php  echo $_SESSION['username'];?></strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <!-- second-level-items -->
                    <li class="selected">
                        <a href="residentindex.php"><i class="fa fa-user fa-fw"></i>Profile</a>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-pencil-square-o fa-fw "></i>Form<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="residentquestion.php">Household Profile Questionnaire</a>
                            </li>
                        </ul>
                    </li>
                         <li>
                        <a href="index.html"><i class="fa fa-pencil-square-o fa-fw "></i>Achievements<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            
                             <li>
                                <a href="residentindex.php?achieve=view">View Project Details</a>
                            </li>
                        </ul>
                    </li><!-- second-level-items -->
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Message</h1>
                </div>
                <!--End Page Header -->
            </div>

            <?php

                if(isset($_GET['suc'])){

                    $suc = $_GET['suc'];
                    if($suc !=""){

            ?>

                <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $("#alert").fadeOut(10000);
                            });
                            
                        </script>
                        <div class="alert alert-success" id="alert">
                        Successfullt uploaded Achievements!</div>


            <!--if mag aad siya ng achievement -->

            <?php
}
}
                if($achieve == "true" && $project ==""){


                    ?>

                        <!-- Content sa adding ng achievement -->
                            
                        <form method="POST" action="achievment/action.php" enctype="multipart/form-data">
                        <input type="text" name="project_name" placeholder="Project Name">
                        <textarea name="project_description">Project description</textarea>
                        <input type="file" name="picture" id="picture">
                        <br>
                        <button type="submit" class="btn btn-primary" name="send_achievement">Send Achievement</button>
                        </form>


                        <!-- end ng lagayan ng content sa achievement-->

                    <?php

                }
                elseif($achieve == "view" && $project ==""){
                    $con = mysqli_connect("localhost","root","","pulilan");
                    $sql = mysqli_query($con, "SELECT * from achievement_tbl");


                    ?>

                        <!--viewing lang eto -->



            

                        <table class="table-hover table-bordered">
                            <tr><th style="background-color: white; padding: 1em;">Project Name</th><th style="background-color: white; padding: 1em;">Project Description</th><th style="background-color: white; padding: 1em;">Action</th></tr>
                            <?php

                            while($m = mysqli_fetch_array($sql)){

                            ?>
                            <tr>

                                <td style="background-color: lightblue; padding: 1em;"><?php echo $m['project_name']; ?></td>
                                <td style="background-color: lightblue; padding: 1em;"><?php echo $m['project_description']; ?></td>
                                <td style="background-color: lightblue; padding: 1em;"><a href="residentindex.php?project=<?php echo $m['achievement_id']; ?>" class="btn btn-primary">View Project</a></td>
                                
                            </tr>


                    
                            <?php

                        }
                        ?>


                        </table>







                    <?php

                }
                elseif ($achieve == "" && $project !="") {


                                           $con = mysqli_connect("localhost","root","","pulilan");
                    $get_projects = mysqli_query($con, "SELECT * from achievement_tbl where achievement_id = '$project'");

                    $prod = mysqli_fetch_array($get_projects);
                   
                   ?>

                   <div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-xs-5">
                            <img src="achievment/temp/<?php echo $prod['picture']; ?>" width="300px" height="300px;">
                        </div>
                        <div class="col-xs-5">
                            <h3>Project Name: <?php echo $prod['project_name']; ?></h3>

                            <h4>Project Description:</h4>

                            <p><?php echo $prod['project_description']; ?></p>
                        </div>
        </div>

</div>
</div>
                    <!--codes to do when viewing projects -->




                   <?php
                }
                else{
            ?>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info" style="text-transform: uppercase;">
                        <i class="fa fa-folder-open"></i>&nbsp;Hello! <?php echo $_SESSION['username'];?> <b></b> Welcome Back
                    </div>
                </div>
            </div><!--end  Welcome -->

        <form method="POST" placeholder="Select Receiver">
              <div class="item" name="receiver" required>
                    <select class="text" name="receiver" data-placement="right">
                      <option value="None"></option>
                      <option value="Balatong A">Balatong - A</option>
                      <option value="Balatong B">Balatong - B</option>
                      <option value="Cut-Cot">Cut-Cot</option>
                      <option value="Dampol 1st">Dampol 1st</option>
                      <option value="Dampol 2nd A">Dampol 2nd A</option>
                      <option value="Dampol 2nd B">Dampol 2nd B</option>
                      <option value="Dulong Malabon">Dulong Malabon</option>
                      <option value="Inaon">Inaon</option>
                      <option value="Longos">Longos</option>
                      <option value="Lumbac">Lumbac</option>
                      <option value="Paltao">Paltao</option>
                      <option value="Peñabatan">Peñabatan</option>
                      <option value="Poblacion">Poblacion</option>
                      <option value="Sta. Peregrina">Sta. Peregrina</option>
                      <option value="Sto. Cristo">Sto. Cristo</option>
                      <option value="Taal">Taal</option>
                      <option value="Tabon">Tabon</option>
                      <option value="Tenejero">Tenejero</option>
                      <option value="Tibag">Tibag</option>
                    </select>
                </div>
        
            <input type="text" id="subject" name="subject" placeholder="subject">
         
            <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

            <input type="submit" name="send" value="SEND MESSAGE">
        </div><!-- end wrapper -->
        </form>


        <?php
    }
        if(isset($_POST['send'])){

            include "pulilan_db_connect.php";
            $receiver = $_POST['receiver'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

           $insert = "INSERT INTO mainmessage(receiver,subject,message) VALUES ('{$receiver}','{$subject}','{$message}')";
           $query = mysqli_query($connection, $insert);
           if($query){

              echo'<script>';
              echo'alert("MESSAGE SUCCESSFULLY SEND!");';
              echo'window.location.href="residentindex.php";';
              echo'</script>'; 
           }
           else{
                echo"failed";
           }
        }

        ?>
    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>
</body>
</html>