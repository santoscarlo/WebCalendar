<?php
error_reporting(E_ALL ^ E_NOTICE);

session_start();

if (!isset($_SESSION['username'])) {
  
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBMS 2017 | </title>
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
                        <span class="top-label label label-danger"></span><i class="fa fa-comments fa-3x"></i>
                    </a>
                </li>

                <li>
                    <a href="resident_q.php">
                        <span class="top-label label label-info"></span>  <i class="fa fa-tasks fa-3x"></i>
                    </a>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
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
                            <img src="../pulilan/iimg/person-1.jpg" alt="" class="img img-responsive">
                            </div>
                            <br>
                            <div class="text-center">
                                <div><strong></strong></div>
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
                    
                    
                        </ul>
                    </li>
                
                            
                             
                        </ul>
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

        
  <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                       <div class="table-responsive">          
                    <table class="table">
                      <thead class="label-info">
                        <tr>
                            <th>Message ID</th>
                            <th>Message</th>
                            <th>Subject</th>
                            <th>Brgy Location</th>
                            <th>Notification Status</th>
                            <th>Date Executed</th>
                            <th>Delete</th>
                            
                        </tr>
                      </thead>
                      <tbody>

                      <?php
                      $con = mysqli_connect("localhost", "root", "", "pulilan");
                      $sql = mysqli_query($con, "SELECT * FROM message_tbl where notification_status='SEEN' ");

                      while($result = mysqli_fetch_array($sql))
                       {
                
                      ?>
                      <tr>
                      <td><?php echo $result['message_id'];?></td>
                      <td><?php echo $result['message'];?></td>
                        <td><?php echo $result['subject'];?></td>
                        <td><?php echo $result['brgy_location'];?></td>
                        <td><?php echo $result['notification_status'];?></td>
                        <td><?php echo $result['date_created'];?></td>
                     <td>
               <a type="button" href="deletemess.php?message_id=<?php echo $result['message_id']; ?>" class="btn btn-outline btn-danger fa fa-times"></a>
             </td>
                        </tr>
              <?php
          }
          ?>

            <!--if mag aad siya ng achievement -->

    

                        <!-- Content sa adding ng achievement -->
                            
                       

                        <!-- end ng lagayan ng content sa achievement-->
            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
            
                </div>
            </div><!--end  Welcome -->

       

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