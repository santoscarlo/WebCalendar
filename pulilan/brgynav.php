<?php
error_reporting(E_ALL ^ E_NOTICE);
require('pulilan_db_connect.php');
session_start();

if (!isset($_SESSION['username'])) {
  
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Core CSS - Include with every page -->
    <link rel="stylesheet" type="text/css" href="css/style.default.css">
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
form#multiphase {
  border-radius: 5px;
  padding: 5%;
  background-color: rgba(76, 174, 76, 1);
  width: 70%;
  margin-left: 15%;
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
                <a class="navbar-brand" href="brgyindex.php">
                    <img src="../pulilan/img/plogo.png" alt="pulilan logo" style="width: 150%; height: 300%;" class="img-responsive" />
                </a>
            </div><!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-arrow-right fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="change_password.php"><i class="fa fa-gear fa-fw"></i> Change Password</a>
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
                                <img src="../pulilan/img/blogo.jpg" alt="brgy logo" class="img img-responsive">
                            </div>
                            <br>
                            <div class="text-center">
                                <div style="text-transform: uppercase; color: white; padding: 5px;">
                                    <strong>Brgy. 
                                        <?php
                                            echo $_SESSION['username'];
                                        ?>
                                    </strong>
                                </div>
                            </div>
                        </div>
                    </li><!--end user image section-->

                    <!-- second-level-items -->
                    <li>
                        <a href="brgyindex.php"><i class="fa fa-user fa-fw"></i> Profile</a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> Manage Settings<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addofficials.php">Add Brgy Officials</a>
                            </li>
                             <li>
                                <a href="addnewresident.php">Add Resident</a>
                            </li>
                            <li>
                                <a href="brgy_resident_account_table.php">Update Resident Details</a>
                            </li>
                            <li>
                                <a href="deleted_history_resident.php">Deleted Resident Details</a>
                            </li>
                             <li>
                                <a href="deactivatedresidenthistory.php">Deactivated Resident History</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-pencil-square-o fa-fw"></i> Forms<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="brgy_q.php">Barangay Profile Questionnaire</a>
                            </li>
                            <li>
                                <a href="brgyemail.php">E-mail</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-floppy-o fa-fw "></i> Tables<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="viewofficial_list.php">View Officials</a>
                            </li>
                            <li>
                                <a href="brgyviewmemo.php">View Brgy Memo</a>
                            </li>
                             <li>
                                <a href="viewresidentdetail.php">View Resident Details</a>
                            </li>
                            <li>
                                <a href="brgy_resident_account_table.php">Resident Account Table</a>
                            </li>
                            <li>
                                <a href="balatongaresidentanswer.php">Resident Answer</a>
                            </li>
                            <li>
                                <a href="brgy_final_report1.php">Brgy. Final Report</a>
                            </li>
                        </ul>
                    </li><!-- second-level-items -->

                </ul><!-- end side-menu -->

            </div><!-- end sidebar-collapse -->

        </nav><!-- end navbar side -->
        
        <!--  page-wrapper -->
        <div id="page-wrapper">