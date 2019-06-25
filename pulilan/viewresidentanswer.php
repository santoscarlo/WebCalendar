<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();

?>

<?php include('../pulilan/brgynav.php'); ?>

           <title>Community Based Resident Answer</title>
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Resident</h1>
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
   <script>
            function showResult(str) {
            if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
            } else {  // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
            document.getElementById("livesearch").innerHTML=this.responseText;
            }
            }
            xmlhttp.open("GET","livesearch/livesearch.php?r="+str,true);
            xmlhttp.send();
            }
            </script>

            </div>

            <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input type="text" class="form-control" placeholder="Search..." onkeyup="showResult(this.value)" name="search" id="search">
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
                    <?php
                    if(isset($_GET['rui'])){
    $rui = $_GET['rui'];

$con = mysqli_connect("localhost", "root", "", "pulilan");
$q = mysqli_query($con, "UPDATE mainuser_acc set edit_status = 'request', edit_notif = 'UNSEEN' where user_id = '$rui'");
?>

<div class="alert alert-success"><div class="close" data-dismiss="alert">&times</div>Successfuly Requested Update</div>

<?php
}

?>

<div class="panel panel-heading">

  <table class="table table-responsive table-hover">
    <thead>
        <tr class="table-bordered">  
            <th>ID</th>
            <th>Full Name</th>
            <th>Position</th>
            <th>Brgy. Location</th>
            
             <th class="warning">View  Resident</th>
            
        </tr>
    </thead>
        <tbody id="livesearch">            
            <?php 
             if(isset($_SESSION['lol'])&&!empty($_SESSION['lol'])){
                    $lol = $_SESSION['lol'];
                }
                global $lol;
             $results = mysqli_query($connection, "SELECT * FROM resident_q where brgy_location = '$lol' && type = 'resident' && visibility = 0  " );
                while ($row = mysqli_fetch_assoc($results)):
            ?>
        <tr>
             <td><?php echo $row['user_id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['position']; ?></td>
            <td><?php echo $row['brgy_location'] ?></td>
           
            <td>
                <a href="residentanswer.php?user_id=<?php echo $row['user_id'];?>" class="btn btn-outline btn-info fa fa-profile">  View  Answer</a>
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