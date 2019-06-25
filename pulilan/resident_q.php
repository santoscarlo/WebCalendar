<?php
session_start();

$connection = mysqli_connect("localhost", "root", "", "pulilan");
 if(isset($_SESSION['lol'])&&!empty($_SESSION['lol'])){
                    $lol = $_SESSION['lol'];
                }
                global $lol;
$getasnwer = mysqli_query($connection, "SELECT * FROM mainuser_acc where brgy_location = '$lol' AND type = 'resident' OR user_id = '".$_GET['user_id']."'");


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
</style>
   </head>
<body onload="alert('Warning: <?php echo $_SESSION['username'];?> before you leave this page you must fill all the Questionnaire and then hit the SUBMIT button.')">
<form method="POST">
    <div class="container">
<!--******************************Content*********************************-->

    <!--  page header -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Resident Profile Questionnaire
                <a href="residentindex.php" class="btn btn-warning pull-right">Return</a>
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
                        <td><input type="text" name="name" value="<?php echo $row['name'];?>" required></td>
                        <td><input type="text" name="address" value="<?php echo $row['address'];?>" required></td>
                        <td><input type="text" name="brgy_id_num" value="<?php echo $row['brgy_id'];?>" required></td>
                        <td><input type="text" name="contact" value="<?php echo $row['contact'];?>" required></td>
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
                        <td><input type="text" name="city_municipality" value="<?php echo $row['city_municipality'];?>" required></td>
                        <td><input type="text" name="brgy_location" value="<?php echo $row['brgy_location'];?>" required></td>
                        <td><input type="text" name="purok_district" value="<?php echo $row['purok_district'];?>" required></td>
                        <td><input type="text" name="province" value="<?php echo $row['province'];?>" required></td>
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
                        <td><input type="text" name="indigenous" required></td>
                        <td><input type="text" name="kind_tribe" required></td>
                        <td><input type="text" name="former_residences" required></td>
                        <td><input type="text" name="howlong_residences" required></td>
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
                        <td>
                            <div class="item" name="gender" required>
                                <input type="text" name="gender" value="<?php echo $row['gender'];?>" data-placement="right">
                                
                            </div>
                        </td>
                        <td>
                            <div class="item" name="civil_stat" required>
                                <input type="text" name="civil_stat" value = "<?php echo $row['civil_status'];?>" data-placement="right">
                                 
                            </div>
                        </td>
                        <td>
                            <div class="item" name="relation_whom" required>
                                <select class="text" name="relation_whom" data-placement="right">
                                  <option value=""> --Select Relation-- </option>
                                  <option value="None">None</option>
                                  <option value="Husband">Husband</option>
                                  <option value="Wife">Wife</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="item" name="registered_civil" required>
                                <select class="text" name="registered_civil" data-placement="right">
                                  <option value=""> --Select Civil Registration-- </option>
                                  <option value="Not Yet">Not Yet</option>
                                  <option value="Civil Registrar">Civil Registrar</option>
                                  <option value="Local Registrar">Local Registrar</option>
                                </select>
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
                            <div class="item" name="religion" required>
                              <select class="text" data-placement="right" name="religion" required>
                                <option value=""> --Select Religion-- </option>
                                <option value="Catholic">Catholic</option>
                                <option value="Protestant">Protestant</option>
                                <option value="Iglesia ni Kristo">Iglesia ni Kristo</option>
                                <option value="Aglipay">Aglipay</option>
                                <option value="Islam">Islam</option>
                                <option value="Evangelicals">Evangelicals</option>
                                <option value="Seventh-day Adventist">Seventh-day Adventist</option>
                                <option value="Jhovah's Witnesses">Jhovah's Witnesses</option>
                                <option value="Jesus is Lord Church">Jesus is Lord Church</option>
                                <option value="Buddhist">Buddhist</option>
                              </select>
                            </div>
                        </td>
                        <td><input type="text" name="no_fam_house" required></td>
                        <td><input type="text" name="name_partner" required></td>
                        <td><input type="text" name="skills" required></td>
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
                            <div class="item" name="stat_house" required>
                                <select class="text" data-placement="right" name="stat_house">
                                  <option value=""> --Select House Status-- </option>
                                  <option value="Own House and Lot">Own House and Lot</option>
                                  <option value="Rent Room and Lot included">Rent Room and Lot included</option>
                                  <option value="Own House Rent Lot with owner consent">Own House Rent Lot with owner consent</option>
                                  <option value="Own House Rent Lot without owner consent">Own House Rent Lot without owner consent</option>
                                  <option value="Rent House and Lot with owner consent">Rent House and Lot with owner consent</option>
                                  <option value="Rent House and Lot without owner consent">Rent House and Lot without owner consent</option>
                                </select>
                            </div>
                        </td>
                        <td><input type="text" name="no_household" required></td>
                        <td>
                            <div class="item" name="have_electricity" required>
                                <select class="text" data-placement="right" name="have_electricity">
                                  <option value=""> --Access to Electricity-- </option>
                                  <option value="Yes">Yes</option>
                                  <option value="No">No</option>
                                  <option value="On Proccess">On Proccess</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="item" name="source_electricity" required>
                                <select class="text" name="source_electricity" data-placement="right">
                                  <option value=""> --Kinds of Electricity-- </option>
                                  <option value="Electric Company">Electric Company</option>
                                  <option value="Generator">Generator</option>
                                  <option value="Solar">Solar</option>
                                  <option value="Battery">Battery</option>
                                  <option value="Wind Turbine">Wind Turbine</option>
                                  <option value="None">None</option>
                                </select>
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
                            <div class="item" name="educ_stat" required>
                                <select class="text" data-placement="right" name="educ_stat">
                                  <option value=""> --Select Education Status-- </option>
                                  <option value="None">None</option>
                                  <option value="Day Care">Day Care</option>
                                  <option value="Kindergarten/Preparatory">Kindergarten/Preparatory</option>
                                  <option value="Elementary Undergrad">Elementary Undergrad</option>
                                  <option value="Elementary Graduate">Elementary Graduate</option>
                                  <option value="Secondary Undergrad">Secondary Undergrad</option>
                                  <option value="Secondary Graduate">Secondary Graduate</option>
                                  <option value="Vocational Graduate">Vocational Graduate</option>
                                  <option value="College Undergrad">College Undergrad</option>
                                  <option value="College Graduate">College Graduate</option>
                                </select>
                            </div>
                        </td>
                        <td><input type="text" name="honors" required></td>
                        <td>
                            <div class="item" name="registered_voters" required>
                                <select class="text" name="registered_voters" data-placement="right">
                                  <option value="None"> --Select Voting Status-- </option>
                                  <option value="Yes">Yes</option>
                                  <option value="No">No</option>
                                  <option value="On Process">On Process</option>
                                </select>
                            </div>
                        </td>
                        <td><input type="date" name="latest_vote" required></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="panel-body" align="center">
            <input class="btn btn-success" type="submit" name="submit" value="Submit">
        </div>
    </div>

</form>
<?php endwhile;?>
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
    $type = 'resident';
    $date = date('Y-m-d');




    $connection = mysqli_connect("localhost", "root", "", "pulilan");
    $user_id = $_SESSION['user_id'];
    $position = $_SESSION['position'];
    $query1 = mysqli_query($connection, "INSERT INTO resident_q(user_id, type, name, address, position, brgy_id_num, contact, city_municipality, brgy_location, purok_district, province, indigenous, kind_tribe, former_residences, howlong_residences, gender, civil_stat, relation_whom, name_partner, religion, no_fam_house, registered_civil, skills, stat_house, no_household, have_electricity, source_electricity, educ_stat, honors, registered_voters, latest_vote, date) VALUES ('$user_id', '$type', '$name','$address','$position','$brgy_id_num', '$contact', '$city_municipality', '$brgy_location', '$purok_district', '$province', '$indigenous', '$kind_tribe', '$former_residences', '$howlong_residences', '$gender', '$civil_stat', '$relation_whom', '$name_partner', '$religion', '$no_fam_house', '$registered_civil', '$skills', '$stat_house', '$no_household' , '$have_electricity', '$source_electricity', '$educ_stat', '$honors', '$registered_voters', '$latest_vote', '$date')");

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

<?php include('../pulilan/adminfooter.php'); ?>