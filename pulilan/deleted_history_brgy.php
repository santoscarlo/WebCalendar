<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
require('pulilan_db_connect.php');
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
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

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

                <li class="dropdowna">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-arrow-right fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="brgyindex.php"><i class="fa fa-user fa-fw"></i>User Profile</a>
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
                        <a href="#"><i class="fa fa-floppy-o fa-fw "></i>Table<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="resident_account_table.php">Barangay Account Table</a>
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
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Deleted Account Table</h1>
                </div>
                 <!-- end  page header -->
            </div>
           
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input type="text" class="form-control" placeholder="Search..." name="search" id="search">
                            <span class="input-group-btn">
                                <input class="btn btn-default" type="submit" value="Go" name="_submit">
                            </span>
                        </div>
                        <div id="here"></div>
                        </div>
                        <script> 
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
                        </script>
                        

            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                       <div class="table-responsive">          
                    <table class="table">
                      <thead class="label-info">
                        <tr>
                            <th>Id</th>
                            <th>Brgy location</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Username</th>
                            <th>Nationality</th>
                            <th>Brgy id no.</th>
                            <th>accounttype</th>
                            <th>Recover</th>
                            <th class="danger">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                    <!--End Advanced Tables -->

            <!--start of query-->
                <?php
                $show_record="SELECT * FROM mainuser_acc WHERE type='brgy_official' AND visibility=1";
                $show_record_query = mysqli_query($connection, $show_record);
  
                if($show_record_query){
                while($result = mysqli_fetch_assoc($show_record_query))

         { 

             ?>
              <tr>
              <td style="color: red;"><?php echo $result['user_id'];?></td>
              <td><?php echo $result['brgy_location'];?></td>
              <td><?php echo $result['name'];?></td>
              <td><?php echo $result['gender'];?></td>
              <td><?php echo $result['username'];?></td>
              <td><?php echo $result['nationality'];?></td>
              <td><?php echo $result['brgy_id_num'];?></td>
              <td><?php echo $result['accounttype'];?></td>
              <td>
                <a class="btn btn-outline btn-info fa fa-check-square-o" href="recover_acc.php?user_id=<?php echo $result['user_id'];?>"></a>
              </td>

              <td>
               <a type="button" href="delete_acc.php?user_id=<?php echo $result['user_id']; ?>" class="btn btn-outline btn-danger fa fa-times"></a>
             </td>
            <tr>
        <?php
}
}
    ?>
    </table><!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>
</tr>