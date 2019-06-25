<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBMS 2017 | Memorandum Page</title>
    <!-- Core CSS - Include with every page -->
    <link rel="stylesheet" type="text/css" href="css/style.default.css">
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
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
                            <span class="top-label label label-danger"></span><i class="fa fa-comments fa-3x"></i>
                        </a>
                        <!-- dropdown-messages -->
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                        <strong><span class=" label label-danger">Andrew Smith</span></strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong><span class=" label label-info">Jonney Depp</span></strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong><span class=" label label-success">Jonney Depp</span></strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>Read All Messages</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
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
                            <span class="top-label label label-warning"></span>  <i class="fa fa-bell fa-3x"></i>
                        </a>
                        <!-- dropdown alerts-->
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i>New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i>3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i>Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i>New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
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
                        <li>
                            <a href="adminindex.php"><i class="fa fa-user fa-fw"></i>Profile</a>
                        </li>
                        <li class="selected">
                            <a href="#"><i class="fa fa-pencil-square-o fa-fw"></i>Forms<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="adminmemo.php">Memo Details</a>
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
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="page-header">Memo Details</h1>
                    </div>
                    <!--End Page Header -->
                </div>
                <div class="col-lg-8 text-center">
                    <div class="panel panel-default">
                        <h4 class="panel-heading">Annual memorandum Proclamation</h4>
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th class="col-lg-4">Year</th>
                                    <th class="col-lg-4">Receiver</th>
                                    <th class="col-lg-4">Notice</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                            Switch Location
                        </div>
                        <div class="panel-body">
                            <p class="col-lg-8">Brgy no. 1</p>
                            <button id="brgyon1" type="button" class="col-lg-2 btn btn-outline btn-success fa fa-check"></button>
                            <button id="brgyoff1" type="button" class="col-lg-2 btn btn-outline btn-danger fa fa-times"></button>
                            <p class="col-lg-8">Brgy no. 2</p>
                            <button id="brgyon2" type="button" class="col-lg-2 btn btn-outline btn-success fa fa-check"></button>
                            <button id="brgyoff2" type="button" class="col-lg-2 btn btn-outline btn-danger fa fa-times"></button>
                            <p class="col-lg-8">Brgy no. 3</p>
                            <button id="brgyon3" type="button" class="col-lg-2 btn btn-outline btn-success fa fa-check"></button>
                            <button id="brgyoff3" type="button" class="col-lg-2 btn btn-outline btn-danger fa fa-times"></button>
                            <p class="col-lg-8">Brgy no. 4</p>
                            <button id="brgyon4" type="button" class="col-lg-2 btn btn-outline btn-success fa fa-check"></button>
                            <button id="brgyoff4" type="button" class="col-lg-2 btn btn-outline btn-danger fa fa-times"></button>
                            <p class="col-lg-8">Brgy no. 5</p>
                            <button id="brgyon5" type="button" class="col-lg-2 btn btn-outline btn-success fa fa-check"></button>
                            <button id="brgyoff5" type="button" class="col-lg-2 btn btn-outline btn-danger fa fa-times"></button>
                            <p class="col-lg-8">Brgy no. 6</p>
                            <button id="brgyon6" type="button" class="col-lg-2 btn btn-outline btn-success fa fa-check"></button>
                            <button id="brgyoff6" type="button" class="col-lg-2 btn btn-outline btn-danger fa fa-times"></button>
                            <p class="col-lg-8">Brgy no. 7</p>
                            <button id="brgyon7" type="button" class="col-lg-2 btn btn-outline btn-success fa fa-check"></button>
                            <button id="brgyoff7" type="button" class="col-lg-2 btn btn-outline btn-danger fa fa-times"></button>
                            <p class="col-lg-8">Brgy no. 8</p>
                            <button id="brgyon8" type="button" class="col-lg-2 btn btn-outline btn-success fa fa-check"></button>
                            <button id="brgyoff8" type="button" class="col-lg-2 btn btn-outline btn-danger fa fa-times"></button>
                            <p class="col-lg-8">Brgy no. 9</p>
                            <button id="brgyon9" type="button" class="col-lg-2 btn btn-outline btn-success fa fa-check"></button>
                            <button id="brgyoff9" type="button" class="col-lg-2 btn btn-outline btn-danger fa fa-times"></button>
                            <p class="col-lg-8">Brgy no. 10</p>
                            <button id="brgyon10" type="button" class="col-lg-2 btn btn-outline btn-success fa fa-check"></button>
                            <button id="brgyoff10" type="button" class="col-lg-2 btn btn-outline btn-danger fa fa-times"></button>
                            <p class="col-lg-8">Brgy no. 11</p>
                            <button id="brgyon11" type="button" class="col-lg-2 btn btn-outline btn-success fa fa-check"></button>
                            <button id="brgyoff11" type="button" class="col-lg-2 btn btn-outline btn-danger fa fa-times"></button>
                            <p class="col-lg-8">Brgy no. 12</p>
                            <button id="brgyon12" type="button" class="col-lg-2 btn btn-outline btn-success fa fa-check"></button>
                            <button id="brgyoff12" type="button" class="col-lg-2 btn btn-outline btn-danger fa fa-times"></button>
                            <p class="col-lg-8">Brgy no. 13</p>
                            <button id="brgyon13" type="button" class="col-lg-2 btn btn-outline btn-success fa fa-check"></button>
                            <button id="brgyoff13" type="button" class="col-lg-2 btn btn-outline btn-danger fa fa-times"></button>
                            <p class="col-lg-8">Brgy no. 14</p>
                            <button id="brgyon14" type="button" class="col-lg-2 btn btn-outline btn-success fa fa-check"></button>
                            <button id="brgyoff14" type="button" class="col-lg-2 btn btn-outline btn-danger fa fa-times"></button>
                            <p class="col-lg-8">Brgy no. 15</p>
                            <button id="brgyon15" type="button" class="col-lg-2 btn btn-outline btn-success fa fa-check"></button>
                            <button id="brgyoff15" type="button" class="col-lg-2 btn btn-outline btn-danger fa fa-times"></button>
                            <p class="col-lg-8">Brgy no. 16</p>
                            <button id="brgyon16" type="button" class="col-lg-2 btn btn-outline btn-success fa fa-check"></button>
                            <button id="brgyoff16" type="button" class="col-lg-2 btn btn-outline btn-danger fa fa-times"></button>
                            <p class="col-lg-8">Brgy no. 17</p>
                            <button id="brgyon17" type="button" class="col-lg-2 btn btn-outline btn-success fa fa-check"></button>
                            <button id="brgyoff17" type="button" class="col-lg-2 btn btn-outline btn-danger fa fa-times"></button>
                            <p class="col-lg-8">Brgy no. 18</p>
                            <button id="brgyon18" type="button" class="col-lg-2 btn btn-outline btn-success fa fa-check"></button>
                            <button id="brgyoff18" type="button" class="col-lg-2 btn btn-outline btn-danger fa fa-times"></button>
                            <p class="col-lg-8">Brgy no. 19</p>
                            <button id="brgyon19" type="button" class="col-lg-2 btn btn-outline btn-success fa fa-check"></button>
                            <button id="brgyoff19" type="button" class="col-lg-2 btn btn-outline btn-danger fa fa-times"></button>
                        </div>
                        <div class="panel-footer">
                            <p><b>Note:</b>the switch button will trigger the request of each barangays request.</p>
                        </div>
                    </div>
                </div>
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
