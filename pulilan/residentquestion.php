<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$username = $_SESSION['username'];
require('pulilan_db_connect.php');
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
</style>
   </head>
<body>
<form method="POST">
    <div class="container">
<!--******************************Content*********************************-->


           <title>Community Based Barangay Answer</title>
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Resident Questionnaire
                    <a href="residentindex.php" class="btn btn-warning pull-right">Return</a>
                    </h1>
                </div>
                 <!-- end  page header -->
                  <script> 
    function printpage() {

    //Get the print button and put it into a variable
    var printButton = document.getElementById("printpagebutton");
    var searchButton = document.getElementById("search");
    // var submitButton = document.getElementById("submit");
    var displayButton = document.getElementById("display");
     var form1 = document.getElementById("form1");
      var form2 = document.getElementById("form2");
    //Set the button visibility to 'hidden' 

    printButton.style.visibility = 'hidden';
    searchButton.style.visibility = 'hidden';
    // submitButton.style.visibility = 'hidden';
    displayButton.style.visibility = 'hidden';
    form1.style.visibility = 'hidden';
    form2.style.visibility = 'hidden';
    //Print the page content
    window.print()

    //Restore button visibility
    printButton.style.visibility = 'visible';
    searchButton.style.visibility = 'visible';
    // submitButton.style.visibility = 'visible';
    displayButton.style.visibility = 'visible';
    form1.style.visibility = 'visible';
    form2.style.visibility = 'visible';
  

}
  </script>
            </div>

<div class="panel panel-heading">

  <table class="table table-responsive table-bordered">
    <thead>
        <tr>  
            <th style="text-align: center;" class="red">Full Name</th>
            <th style="text-align: center;" class="blue">Position</th>
            <th style="text-align: center;" class="blue">Brgy. Location</th>
            <th style="text-align: center;" class="blue">Answer Questionnaire</th>
            
        </tr>
    </thead>
    <tbody align="center">
            <?php 
             if(isset($_SESSION['lol'])&&!empty($_SESSION['lol'])){
                    $lol = $_SESSION['lol'];
                }
                global $lol;

             $results = mysqli_query($connection, "SELECT * FROM mainuser_acc where brgy_location = '$lol' and type = 'resident' and username='$username'" );
                while ($row = mysqli_fetch_assoc($results)):
            ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['position']; ?></td>
            <td><?php echo $row['brgy_location'] ?></td>
           
            <td>
                <a href="resident_q.php?user_id=<?php echo $row['user_id'];?>" class="btn btn-outline btn-info fa fa-pencil"></a>
            </td>
        </tr>
    </tbody>

<?php endwhile; ?>

          

 </table>

 <script>


$("table").DataTable();

$('.dataTables_filter').addClass('pull-right');


</script>

</div>

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
<?php include('../pulilan/adminfooter.php'); ?>