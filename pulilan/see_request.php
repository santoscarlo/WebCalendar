<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("location: login.php");
}

if(isset($_GET['memo'])){
    $memo = $_GET['memo'];
}
global $memo;
if(isset($_GET['done'])){
    $done = $_GET['done'];
}
global $done;

if(isset($_Get['view'])){
    $view_memo = $_GET['view'];
}
global $view_memo;
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
                <a class="navbar-brand" href="adminindex.php">
                    <img src="../pulilan/img/plogo.png" alt="pulilan logo" style="width: 150%; height: 300%;" class="img-responsive" />
                </a>
            </div>
            <!-- end navbar-header -->
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
                        <span class="top-label label label-info"></span>  <i class="fa fa-tasks fa-3x"></i>
                    </a>
                    <!-- dropdown tasks -->
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-tasks -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">

                        <?php
                        $get_req = mysqli_query($con, "SELECT * from mainuser_acc where edit_status = 'request' && edit_notif = 'UNSEEN'");
                        $num = mysqli_num_rows($get_req);
                        ?>
                        <span class="top-label label label-warning"><?php echo $num; ?></span>  <i class="fa fa-bell fa-3x"></i>
                    </a>
                    <!-- dropdown alerts-->
                    <ul class="dropdown-menu dropdown-alerts">
                        <?php

                            while($s = mysqli_fetch_array($get_req)){
                        ?>
                        <li>
                            <a href="see_request.php?did=<?php echo $s['user_id']; ?>">
                                <div>
                                    <i class="fa fa-bell"></i>Request Resident Update
                                    <span class="pull-right text-muted small"><?php echo $s['brgy_location']; ?></span>
                                    <p>Resident: <?php echo $s['name']; ?></p>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <?php

                    }
                    ?>
                     <li>
                            <a href="see_request.php?all=yes">
                                <div>
                                    <a href="see_request.php?all=yes" style="text-decoration: none;">See All Request</a>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-alerts -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
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
                                <img src="../pulilan/img/logo.png" alt="admin logo" class="img img-responsive">
                            </div>
                            <br>
                            <div class="text-center">
                                <div><strong>Admin</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <!-- second-level-items -->
                    <li class="selected">
                        <a href="adminindex.php"><i class="fa fa-user fa-fw"></i>Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>Manage Setting<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="brgylist_table.php">Update Brgy. List</a>
                            </li>
                            <li class="disabled">
                                <a href="#">Updated Executive Details</a>
                            </li>
                            <li class="">
                                <a href="deleted_history_brgy.php">Deleted History</a>
                            </li>
                            <li class="disabled">
                                <a href="#">Memo Details</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-pencil-square-o fa-fw"></i>Forms<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="adminindex.php?memo=true">Add Memo</a>
                            </li>
                               <li>
                                <a href="adminindex.php?memo=view">View Memo</a>
                            </li>
                            <li>
                                <a href="email.php">E-mail</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-cogs fa-fw "></i>Settings<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="change_password.php">Change Password</a>
                            </li>
                            <li>
                                <a href="request_final_report_copy.php">Request copy of Final Report</a>
                            </li>
                            <li class="disabled">
                                <a href="#">Resolution Details</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw "></i>Charts<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="chart_population.php">Population Charts</a>
                            </li>
                            <li>
                                <a href="tabulated_final_report.php">Tabulated Final Reports</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-floppy-o fa-fw "></i>Tables<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="brgy_resident_account_table.php">Resident Account Table</a>
                            </li>
                            <li>
                                <a href="final_report.php">Final Reports</a>
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
                    <h1 class="page-header">Profile</h1>
                </div>
                <!--End Page Header -->
            </div>

<!--Placing of notification pop up -->

        
        <?php
             if(isset($_GET['updated']))
        {
            $updated = $_GET['updated'];
            if($updated !=""){
            if($updated == "all"){
                $up = mysqli_query($con, "UPDATE mainuser_acc set edit_status = 'approve'");
            ?>

            <div class="alert alert-success"><div class="close" data-dismiss="alert">&times</div>Successfuly Approved</div>

            <?php

            }
            else{
                $up = mysqli_query($con, "UPDATE mainuser_acc set edit_status = 'approve' where user_id = '$updated'");

                ?>
    <div class="alert alert-success"><div class="close" data-dismiss="alert">&times</div>Successfuly Approved</div>


                <?php
          

            }
        }
        }

if(isset($_GET['did'])){
    $did = $_GET['did'];

}
global $did;

$sl = mysqli_query($con, "UPDATE mainuser_acc set edit_notif = 'SEEN' where user_id = '$did'");

if($did !=""){

    $qll = mysqli_query($con, "SELECT * from mainuser_acc where edit_status = 'request' && user_id = '$did'");
    while($ll = mysqli_fetch_array($qll)){

        ?>
            <div class="panel panel-default">
                <div class="container">

                Brgy: <h4><?php echo $ll['brgy_location']; ?></h4><br>
                Resident: <p style="color: green;"><?php echo $ll['name']; ?></p>
                <a href="see_request.php?updated=<?php echo $ll['user_id']; ?>" class="btn btn-primary">Approve</a>
            </div>

            </div>

        <?php
    }
}

    if(isset($_GET['all'])){
    $all = $_GET['all'];
}
global $all;
    if($all == "yes"){
        $sql = mysqli_query($con, "UPDATE mainuser_acc set edit_notif = 'SEEN' where edit_status = 'request' && edit_notif = 'UNSEEN'");
    $qll = mysqli_query($con, "SELECT * from mainuser_acc where edit_status = 'request'");
    while($ll = mysqli_fetch_array($qll)){

        ?>
            <div class="panel panel-default">
                <div class="container">

                Brgy: <h4><?php echo $ll['brgy_location']; ?></h4><br>
                Resident: <p style="color: green;"><?php echo $ll['name']; ?></p>
                <a href="see_request.php?updated=<?php echo $ll['user_id']; ?>" class="btn btn-primary">Approve</a>
            </div> 

            </div>

        <?php
    }
    ?>
    <a href="see_request.php?updated=all" class="btn btn-primary">Approve All</a>

    <?php

    }





        ?>



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
