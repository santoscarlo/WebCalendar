<?php
session_start();
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
   </head>
<body>
<form method="POST">
    <div class="container">
<!--******************************Content*********************************-->

            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">View Memo
                        <a href="brgyindex.php" class="btn btn-warning pull-right">Return</a>
                    </h1>
                </div>
            </div><!-- end  page header -->

    <div class="panel panel-info col col-lg-12 col-md-12 center" align="center">
            <table class="table-condensed">
              <thead class="label-info">
                <tr>
                    <th>Project Name</th>
                    <th>Project Description</th>
                    <th>Memo Date</th>
                    <th>Status</th>
                </tr>
              </thead>
              <tbody id="livesearch">
                    <!--End Advanced Tables -->

            <!--start of query-->
                <?php

              
                $connection = mysqli_connect('localhost','root','','pulilan');
                $sql = mysqli_query($connection, "SELECT * from memo where memo_status = 'APPROVED'");
  
                if($sql){
                while($result = mysqli_fetch_assoc($sql))

         { 

             ?>
              <tr>
              <td><?php echo $result['project_name'];?></td>
              <td><?php echo $result['project_description'];?></td>
              <td><?php echo $result['memo_date'];?></td>
              <td><?php echo $result['memo_status'];?></td>
                
                
            </tr>
        <?php
}
}
    ?>
</tbody>
    </table><!-- end wrapper -->

    </div>

<?php include('../pulilan/adminfooter.php'); ?>