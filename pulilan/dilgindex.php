<?php
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



if(isset($_GET['archive'])){
    $archive = $_GET['archive'];
        $con = mysqli_connect("localhost", "root", "", "pulilan");
    $sql = mysqli_query($con, "UPDATE memo set memo_status = 'DECLINED' where memo_id = '$archive'");
    header("location: dilgindex.php?view=memo");
}
global $archive;

if(isset($_GET['approve'])){
    $approve = $_GET['approve'];
        $con = mysqli_connect("localhost", "root", "", "pulilan");
    $sql = mysqli_query($con, "UPDATE memo set memo_status = 'APPROVED' where memo_id = '$approve'");

    header("location: dilgindex.php?view=memo");

}

if(isset($_GET['view'])){
    $view = $_GET['view'];
}
global $view;
global $project;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBMS 2017 | Registration Form</title>
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
            </div><!-- end navbar-header -->

            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <!--Get notification count -->

                            <?php
                            $con = mysqli_connect("localhost", "root", "", "pulilan");

                            $get_notif = mysqli_num_rows(mysqli_query($con, "SELECT * from message_tbl where brgy_location = 'Admin' && notification_status = 'UNSEEN'"));


                            ?>



                        <span class="top-label label label-danger"><?php 
                    if($get_notif > 0){

                        echo $get_notif; 
                    }?></span><i class="fa fa-comments fa-3x"></i>
                    </a>
                    <!-- dropdown-messages -->
                    <ul class="dropdown-menu dropdown-messages">

                        <?php


                            $get_notif2 = mysqli_query($con, "SELECT * from message_tbl where brgy_location = 'Admin' && notification_status = 'UNSEEN'");
                            while($d = mysqli_fetch_array($get_notif2)){
                                $sender = $d['user_id'];
                                $get_sender = mysqli_query($con, "SELECT * from mainuser_acc where user_id = '$sender'");
                                while($g = mysqli_fetch_array($get_sender)){
                                    $name = $g['name'];

                    ?>
                        <li>
                            <a href="adminindex.php?type=<?php echo $d['message_id']; ?>">
                                <div>
                                    <strong><span class=" label label-danger"><?php echo $name; ?></span></strong>
                                    <span class="pull-right text-muted">
                                        <em><?php echo $g['date_created']; ?></em>
                                    </span>
                                </div>
                                <div><?php echo $d['subject']; ?></div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <?php
                                 }
                            }


                        ?>
                    </ul>
                    <!-- end dropdown-messages -->
                
                </li>

               <li class="dropdown">
                   <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <?php
                        $con = mysqli_connect("localhost","root","","pulilan");
                        $get_pending = mysqli_query($con, "SELECT * from memo where memo_status = 'PENDING'");
                        $total = mysqli_num_rows($get_pending);
                    ?>
                     <span class="top-label label label-warning"><?php echo $total; ?></span> <i class="fa fa-bell fa-3x"></i>
                </a>
                    <?php
                

                        if($total > 0){

                    ?>
                <ul class="dropdown-menu dropdown-alerts">
                    <li><a href="dilgindex.php?view=memo">
                        <i class="fa fa-bell"></i>&nbspNew Memo Detected (Pending) <?php echo $total; ?>
             
                </a></li>
            
                </ul>
                    <?php
                    }
                    ?>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-arrow-right fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="change_password.php"><i class="fa fa-gear fa-fw"></i>Change Password</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li><!-- end main dropdown -->

            </ul><!-- end navbar-top-links -->

        </nav><!-- end navbar top -->

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
                                <img src="../pulilan/img/dilg.png" alt="resident logo" class="img img-responsive">
                            </div>
                            <br>
                            <div class="text-center">
                                <div id="demo" style="text-transform: uppercase; padding: 5px;"><strong>
                                    <?php
                                        echo $_SESSION['username'];
                                    ?>
                                </strong></div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <!-- second-level-items -->
                    <li>
                        <a href="dilgindex.php"><i class="fa fa-user fa-fw"></i>Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-pencil-square-o fa-fw "></i>Achievements<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="dilgindex.php?achieve=true">Add Achievments</a>
                            </li>
                             <li>
                                <a href="dilgindex.php?achieve=view">View Achievments</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="dilgviewmemo.php">View Memo</a>
                    </li>
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
                        Project Achievements Uploaded <b>Success!!</b></div>


            <!--if mag aad siya ng achievement -->

            <?php
}
}

if($view =="memo"){

 $view_memo = mysqli_query($con, "SELECT * from memo where memo_status = 'PENDING'");
 $chec = mysqli_num_rows($view_memo);
 if($chec > 0){
 while($c = mysqli_fetch_array($view_memo)){
    ?>
<!--MEmo View -->
<fieldset>
<legend>Project Name: <?php echo $c['project_name']; ?></legend>
<strong>Receiver:</strong><?php echo $c['receiver']; ?><br>
<strong>Project Description: </strong>
<br>
<textarea disabled><?php echo $c['project_description']; ?></textarea>

</fieldset>
<a href="dilgindex.php?archive=<?php echo $c['memo_id']; ?>" class="btn btn-primary">Decline</a>
<a href="dilgindex.php?approve=<?php echo $c['memo_id']; ?>" class="btn btn-primary">Approve</a>
<center>******************************</center>



    <?php
}
}
else{
    echo '<p style="color: red;">Successfully approved</p>';
}
}
else{
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
                                <td style="background-color: lightblue; padding: 1em;"><a href="dilgindex.php?project=<?php echo $m['achievement_id']; ?>" class="btn btn-primary">View Project</a></td>
                                
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
                    <div class="alert alert-success alert-dismissible fade in" style="text-transform: uppercase;">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <i class="fa fa-folder-open"></i>Welcome to<b> <?php echo $_SESSION['username'];?></b> dashboard
                    </div>
                </div>
            </div><!--end  Welcome -->

            <form method="POST" action="notification_process/official_message_process.php">

            <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <input type="text" name="receiver" data-placement="right" placeholder="Receiver" required>
            </div>
            <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <input type="text" id="subject" name="subject" placeholder="Subject" required>
            </div>
         
            <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

            <button type="submit" name="send_message" class="btn btn-primary" style="background-color: green;">Send Message</button>
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
              echo'window.location.href="adminindex.php";';
              echo'</script>'; 
           }
           else{
                echo"failed";
           }
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