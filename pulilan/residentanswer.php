<?php
session_start();

$connection = mysqli_connect("localhost", "root", "", "pulilan");
$user_id = $_GET['user_id'];
 if(isset($_SESSION['lol'])&&!empty($_SESSION['lol'])){
                    $lol = $_SESSION['lol'];
                }
                global $lol;


$getasnwer = mysqli_query($connection, "SELECT * FROM resident_q where brgy_location =  '$lol' AND type = 'official' OR user_id = '".$_GET['user_id']."'");


while($row = mysqli_fetch_assoc($getasnwer)):

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
<form method="POST">
    <div class="container">
<!--******************************Content*********************************-->

    <!--  page header -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Resident Profile Questionnaire
            <a href="brgyindex.php" class="btn btn-warning pull-right">Return</a>
            </h1>
        </div>
    </div><!-- end  page header -->

    <div class="panel panel-primary col col-lg-12 col-md-12">
        <div class="panel-head" align="center">
            <h4><b>Initial Form</b></h4>
        </div>
        <div class="panel-body" align="center">
            <table>
                <thead>
                    <tr class="table-condensed">
                        <th>Full Name</th>
                        <th>Address</th>
                        <th>Barangay ID Number</th>
                        <th>Contact Number</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="name" value="<?php echo $row['name'];?>" readonly></td>
                        <td><input type="text" name="address" value="<?php echo $row['address'];?>" readonly></td>
                        <td><input type="text" name="brgy_id_num" value="<?php echo $row['brgy_id_num'];?>" readonly></td>
                        <td><input type="text" name="contact" value="<?php echo $row['contact'];?>" readonly></td>
                    </tr>
                </tbody>
                <thead>
                    <tr class="table-condensed">
                        <th>City/Municipality</th>
                        <th>Barangay</th>
                        <th>Purok/District</th>
                        <th>Province</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="city_municipality" value="<?php echo $row['city_municipality'];?>" readonly></td>
                        <td><input type="text" name="brgy_location" value="<?php echo $row['brgy_location'];?>" readonly></td>
                        <td><input type="text" name="purok_district" value="<?php echo $row['purok_district'];?>" readonly></td>
                        <td><input type="text" name="province" value="<?php echo $row['province'];?>" readonly></td>
                    </tr>
                </tbody>
                <thead>
                    <tr class="table-condensed">
                        <th>Indigenous Tribe, yes or no</th>
                        <th>What kind of Tribe</th>
                        <th>Former Residences</th>
                        <th>How long in former residences</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="indigenous" value="<?php echo $row['indigenous'];?>" readonly></td>
                        <td><input type="text" name="kind_tribe" value="<?php echo $row['kind_tribe'];?>" readonly></td>
                        <td><input type="text" name="former_residences" value="<?php echo $row['former_residences'];?>" readonly></td>
                        <td><input type="text" name="howlong_residences" value="<?php echo $row['howlong_residences'];?>" readonly></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="panel-head" align="center">
            <h4><b>Civil Report</b></h4>
        </div>
        <div class="panel-body" align="center">
            <table>
                <thead>
                    <tr class="table-condensed">
                        <th>Gender</th>
                        <th>Civil Status</th>
                        <th>Relation to whom?</th>
                        <th>Civil Registration Type</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="gender" value="<?php echo $row['gender'];?>" readonly></td>
                        <td><input type="text" name="civil_stat" value="<?php echo $row['civil_stat'];?>" readonly></td>
                        <td>
                            <input type="text" name="relation_whom" value = "<?php echo $row['relation_whom'];?>" readonly>
                               
                            </div>
                        </td>
                        <td>
                            <input type="text" name="registered_civil" value="<?php echo $row['registered_civil'];?>" readonly>
                                
                            </div>
                        </td>
                    </tr>
                </tbody>
               
            </table>
        </div>

        <div class="panel-head" align="center">
            <h4><b>Religion Report</b></h4>
        </div>
        <div class="panel-body" align="center">
            <table>
                <thead>
                    <tr class="table-condensed">
                        <th>Religion</th>
                        <th>Number of Family</th>
                        <th>Name of Partner</th>
                        <th>Skills</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="text" name="religion" value="<?php echo $row['religion'];?> " readonly> 
                              
                            </div>
                        </td>
                        <td><input type="text" name="no_fam_house" value="<?php echo $row['no_fam_house'];?>" readonly></td>
                        <td><input type="text" name="name_partner" value="<?php echo $row['name_partner'];?>" readonly></td>
                        <td><input type="text" name="skills" value="<?php echo $row['skills'];?>" readonly></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="panel-head" align="center">
            <h4><b>Housing Report</b></h4>
        </div>
        <div class="panel-body" align="center">
            <table>
                <thead>
                    <tr class="table-condensed">
                        <th>Status of the House</th>
                        <th>Number of Household</th>
                        <th>Access to Electricity</th>
                        <th>Electricity Sources</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type = "text" name="stat_house" value="<?php echo $row['stat_house'];?>" readonly>
                               
                        </td>
                        <td><input type="text" name="no_household" value="<?php echo $row['no_household'];?>" readonly></td>
                        <td>
                            <input type = "text" name="have_electricity" value="<?php echo $row['have_electricity']; ?>" readonly>
                               
                            </div>
                        </td>
                        <td>
                            <input type = "text" name="source_electricity" value="<?php echo $row['source_electricity'];?>" readonly>
                                
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="panel-head" align="center">
            <h4><b>Educational Report</b></h4>
        </div>
        <div class="panel-body" align="center">
            <table>
                <thead>
                    <tr class="table-condensed">
                        <th>Educational Status</th>
                        <th>Honors</th>
                        <th>Voting Status</th>
                        <th>Latest Year Voted</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type = "text" name="educ_stat" value="<?php echo $row['educ_stat'];?>" readonly>
                               
                            </div>
                        </td>
                        <td><input type="text" name="honors" value="<?php echo $row['honors'];?>" readonly></td>
                        <td>
                            <input type = "text" name="registered_voters" value="<?php echo $row['registered_voters'];?>" readonly>
                                
                            </div>
                        </td>
                        <td><input type="text" name="latest_vote" value="<?php echo $row['latest_vote'];?>" required></td>
                    </tr>
                </tbody>
            </table>
        </div>

       
    </div>

</form>
<?php endwhile; ?>
<?php

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $address = $_POST['address'];
    $brgy_id_num = $_POST['brgy_id_num'];
    $contact = $_POST['contact'];
    $city_municipality = $_POST['city_municipality'];
    $brgy_location = $_POST['brgy_location'];
    $purok_district = $_POST['purok_district'];
    $province = $_POST['province'];
    $indigenous = $_POST['indigenous'];
    $kind_tribe = $_POST['kind_tribe'];
    $former_residences = $_POST['former_residences'];
    $howlong_residences = $_POST['howlong_residences'];
    $gender = $_POST['gender'];
    $civil_stat = $_POST['civil_stat'];
    $relation_whom = $_POST['relation_whom'];
    $name_partner = $_POST['name_partner'];
    $religion = $_POST['religion'];
    $no_fam_house = $_POST['no_fam_house'];
    $registered_civil = $_POST['registered_civil'];
    $skills = $_POST['skills'];
    $stat_house = $_POST['stat_house'];
    $no_household = $_POST['no_household'];
    $have_electricity = $_POST['have_electricity'];
    $source_electricity = $_POST['source_electricity'];
    $educ_stat = $_POST['educ_stat'];
    $honors = $_POST['honors'];
    $registered_voters = $_POST['registered_voters'];
    $latest_vote = $_POST['latest_vote'];
    



    $connection = mysqli_connect("localhost", "root", "", "pulilan");
    $user_id = $_SESSION['user_id'];
    $type = $_SESSION['type'];
    $query1 = mysqli_query($connection, "INSERT INTO resident_q(user_id, type, name, address, brgy_id_num, contact, city_municipality, brgy_location, purok_district, province, indigenous, kind_tribe, former_residences, howlong_residences, gender, civil_stat, relation_whom, name_partner, religion, no_fam_house, registered_civil, skills, stat_house, no_household, have_electricity, source_electricity, educ_stat, honors, registered_voters, latest_vote) VALUES ('$user_id', '$type', '$name','$address','$brgy_id_num', '$contact', '$city_municipality', '$brgy_location', '$purok_district', '$province', '$indigenous', '$kind_tribe', '$former_residences', '$howlong_residences', '$gender', '$civil_stat', '$relation_whom', '$name_partner', '$religion', '$no_fam_house', '$registered_civil', '$skills', '$stat_house', '$no_household', '$have_electricity', '$source_electricity', '$educ_stat', '$honors', '$registered_voters', '$latest_vote')");

    if($query1){
        echo'<script>';
        echo'alert("successfully Answered!");';
        echo'window.location.href="residentindex.php";';
        echo'</script>';    
    }
    }
    ?>

    <footer>
        <div class="text-center" style="position: fixed; right: 10px; bottom: 10px; width:50px; background-color: green; border-radius: 100%; padding: 15px; margin-top: 5px;">
            <a href="#" style="color: white;" class="go-top">
                <i class="fa fa-eject"></i>
            </a>
        </div>
    </footer>

</div>

    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Plot Scripts-->
    <script src="assets/plugins/flot/jquery.flot.js"></script>
    <script src="assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="assets/plugins/flot/jquery.flot.resize.js"></script>
    <script src="assets/plugins/flot/jquery.flot.pie.js"></script>
    <script src="assets/scripts/flot-demo.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>
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