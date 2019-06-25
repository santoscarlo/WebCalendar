<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$user_id = $_SESSION['user_id'];

$connection = mysqli_connect("localhost", "root", "", "pulilan");
 if(isset($_SESSION['lol'])&&!empty($_SESSION['lol'])){
                    $lol = $_SESSION['lol'];
                }
                global $lol;
$getasnwer = mysqli_query($connection, "SELECT * FROM brgy_q where brgy_location = '$lol' AND type = 'official' OR user_id = '".$_GET['user_id']."'");


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
                <h1 class="page-header">Barangay Profile Answer
                  <a href="adminindex.php" class="btn btn-warning pull-right">Return</a>
                </h1>
            </div>
        </div><!-- end  page header -->
        <div class="panel panel-primary col col-l    xxdsaw1ssssss
        g-12 col-md-12">
            <div class="panel-head" align="center">
                <h4><b>Initial Form</b></h4>
            </div>  
            <div class="panel-body" align="center">
                <table>
                    <thead>
                        <tr class="table-condensed">
                            <th>Full Name</th>
                            <th>Position</th>
                            <th>Brgy. Classification</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="name" value="<?php echo $row['name'];?>" readonly></td>
                            <td><input type="text" name="position" value="<?php echo $row['position'];?>" readonly></td>
                            <td><input type="text" name="brgy_classification" value="<?php echo $row['brgy_classification'];?>" readonly></td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr class="table-condensed">
                            <th>Barangay Location</th>
                            <th>Characteristic of Barangay</th>
                            <th>Total Land Area</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="brgy_location" value="<?php echo $row['brgy_location'];?>" readonly></td>
                            <td><input type="text" name="char_brgy" value="<?php echo $row['char_brgy'];?>" readonly></td>
                            <td><input type="text" name="total_land_area" value="<?php echo $row['total_land_area'];?>" readonly></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="panel-body" align="center">
                <table>
                    <thead>
                        <tr class="table-condensed">
                            <th>Major Sources of Livelihood</th>
                            <th>Boundaries (north, west, east, south)</th>
                            <th>Total Male Voters</th>
                            <th>Total Female Voters</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="major_sources" value="<?php echo $row['major_sources'];?>" readonly></td>
                            <td><input type="text" name="boundaries" value="<?php echo $row['boundaries'];?>" readonly></td>
                            <td><input type="text" name="total_male_voters" value="<?php echo $row['total_male_voters'];?>" readonly></td>
                            <td><input type="text" name="total_female_voters" value="<?php echo $row['total_female_voters'];?>" readonly></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="panel-head" align="center">
                <h4><b>Demographic Reference</b></h4>
            </div>
            <div class="panel-body" align="center">
                <table>
                    <thead>
                        <tr class="table-condensed">
                            <th>Number of Male Tanod</th>
                            <th>Number of Female Tanod</th>
                            <th>Number of Male Health Worker</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="male_tanod" value="<?php echo $row['male_tanod'];?>" readonly></td>
                            <td><input type="text" name="female_tanod" value="<?php echo $row['female_tanod'];?>" readonly></td>
                            <td><input type="text" name="male_health_worker" value="<?php echo $row['male_health_worker'];?>" readonly></td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr class="table-condensed">
                            <th>Number of Female Health Worker</th>
                            <th>Number of Male Scholar</th>
                            <th>Number of Female Scholar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="female_health_worker" value="<?php echo $row['female_health_worker'];?>" readonly></td>
                            <td><input type="text" name="male_nutrition_scholar" value="<?php echo $row['male_nutrition_scholar'];?>" readonly></td>
                            <td><input type="text" name="female_nutrition_scholar" value="<?php echo $row['female_nutrition_scholar'];?>" readonly></td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr class="table-condensed">
                            <th>Number of Male Purok Leaders</th>
                            <th>Number of Female Purok Leaders</th>
                            <th>Number of Male Librarian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="male_purok_leaders" value="<?php echo $row['male_purok_leaders'];?>" readonly></td>
                            <td><input type="text" name="female_purok_leaders" value="<?php echo $row['female_purok_leaders'];?>" readonly></td>
                            <td><input type="text" name="male_librarian" value="<?php echo $row['male_librarian'];?>" readonly></td>
                        </tr>
                    </tbody>
                    </table>
                    </div>
              <div class="panel-body" align="center">
                <table>
                    <thead>
                        <tr class="table-condensed">
                            <th>Number of Female Librarian</th>
                            <th>Number of Male Day Care Worker</th>
                            <th>Number of Female Day Care Worker</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="female_librarian" value="<?php echo $row['female_librarian'];?>" readonly></td>
                            <td><input type="text" name="male_day_care_worker" value="<?php echo $row['male_day_care_worker'];?>" readonly></td>
                            <td><input type="text" name="female_day_care_worker" value="<?php echo $row['female_day_care_worker'];?>" readonly></td>
                        </tr>
                    </tbody>
                  </table>
                </div>
              <div class="panel-body" align="center">
                <table>
                    <thead>
                        <tr class="table-condensed">
                            <th>Number of Male Utility Worker</th>
                            <th>Number of Female Utility Worker</th>
                            <th>Number of Purok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="male_utility_worker" value="<?php echo $row['male_utility_worker'];?>" readonly></td>
                            <td><input type="text" name="female_utility_worker" value="<?php echo $row['female_utility_worker'];?>" readonly></td>
                            <td><input type="text" name="no_purok" value="<?php echo $row['no_purok'];?>" readonly></td>
                        </tr>
                    </tbody>
                  </table>
                </div>

                <div class="panel-head" align="center">
                  <h4><b>List of Available Facility</b></h4>
                </div>

                <div class="panel-body" align="center">
                    <p><b>Health Facility</b></p>
                    <table>
                      <thead>
                        <tr>
                          <th>Barangay Health Center</th>
                          <th>Hospitals</th>
                          <th>Maternity Clinic</th>
                        </tr>
                      </thead>
                      <tbody align="center">
                        <tr>
                          <td><input type="text" name="brgy_health_center" value="<?php echo $row['brgy_health_center'];?>" readonly></td>
                          <td><input type="text" name="hospital" value="<?php echo $row['hospital'];?>" readonly></td>
                          <td><input type="text" name="maternity_clinic" value="<?php echo $row['maternity_clinic'];?>" readonly></td>
                        </tr>
                      </tbody>
                    </table>
                </div>
                      
                <div class="panel-body" align="center">
                    <table>
                      <thead>
                        <tr>
                          <th>Child Clinic</th>
                          <th>Botika ng Barangay</th>
                        </tr>
                      </thead>
                      <tbody align="center">
                        <tr>
                          <td><input type="text" name="child_clinic" value="<?php echo $row['child_clinic'];?>" readonly></td>
                          <td><input type="text" name="botika_brgy" value="<?php echo $row['botika_brgy'];?>" readonly></td>
                        </tr>
                      </tbody>
                    </table>
                </div>

                <div class="panel-body" align="center">
                    <table>
                    <p><b>Health Facility</b></p>
                      <thead>
                        <tr>
                          <th>Day Care Centers</th>
                          <th>Preschool</th>
                          <th>Elementary</th>
                        </tr>
                      </thead>
                      <tbody align="center">
                        <tr>
                          <td><input type="text" name="brgy_day_care_center" value="<?php echo $row['char_brgy'];?>" readonly></td>
                          <td><input type="text" name="preschool" value="<?php echo $row['preschool'];?>" readonly ></td>
                          <td><input type="text" name="elementary" value="<?php echo $row['elementary'];?>" readonly></td>
                        </tr>
                      </tbody>
                      <thead>
                        <tr>
                          <th>Secondary</th>
                          <th>Vocational</th>
                          <th>College/University</th>
                        </tr>
                      </thead>
                      <tbody align="center">
                        <tr>
                          <td><input type="text" name="secondary" value="<?php echo $row['secondary'];?>" readonly></td>
                          <td><input type="text" name="vocational" value="<?php echo $row['vocational'];?>" readonly></td>
                          <td><input type="text" name="college_university" value="<?php echo $row['college_university'];?>" readonly></td>
                        </tr>
                      </tbody>
                    </table>
                </div>

                <div class="panel-body" align="center">
                    <table>
                    <p><b>Service Facility</b></p>
                      <thead>
                        <tr>
                          <th>Post Office</th>
                          <th>Market</th>
                        </tr>
                      </thead>
                      <tbody align="center">
                        <tr>
                          <td><input type="text" name="post_office" value="<?php echo $row['post_office'];?>" readonly></td>
                          <td><input type="text" name="market" value="<?php echo $row['market'];?>" readonly></td>
                        </tr>
                      </tbody>
                    </table>

                    <table>
                    <p><b>Agricultural Facility</b></p>
                      <thead>
                        <tr>
                          <th>Rice Mill</th>
                          <th>Corn Mill</th>
                          <th>Feed Mill</th>
                          <th>Agricultural Produce Market</th>
                        </tr>
                      </thead>
                      <tbody align="center">
                        <tr>
                          <td><input type="text" name="ricemill" value="<?php echo $row['ricemill'];?>" readonly></td>
                          <td><input type="text" name="cornmill" value="<?php echo $row['cornmill'];?>" readonly></td>
                          <td><input type="text" name="feedmill" value="<?php echo $row['feedmill'];?>" readonly></td>
                          <td><input type="text" name="agricultural_market" value="<?php echo $row['agricultural_market'];?>" readonly></td>
                        </tr>
                      </tbody>
                    </table>

                    <p><b>Input Dealer</b></p>
                    <table>
                      <thead>
                        <tr>
                          <th>Fertilizer Dealer</th>
                          <th>Pesticide Dealer</th>
                          <th>Seeds Dealer</th>
                          <th>Feeds Dealer</th>
                        </tr>
                      </thead>
                      <tbody align="center">
                        <tr>
                          <td><input type="text" name="fertilizer" value="<?php echo $row['fertilizer'];?>" readonly></td>
                          <td><input type="text" name="pesticide" value="<?php echo $row['pesticide'];?>" readonly></td>
                          <td><input type="text" name="seeds" value="<?php echo $row['seeds'];?>" readonly></td>
                          <td><input type="text" name="feeds" value="<?php echo $row['feeds'];?>" readonly></td>
                        </tr>
                      </tbody>
                    </table>
                 
                                       
                  </div>
                </div>
            </div>
        </div>
</form>
<?php endwhile; ?>

<?php

if(isset($_POST['submit'])){
$name = $_POST['name'];
$position = $_POST['position'];
$brgy_classification = $_POST['brgy_classification'];
$brgy_location = $_POST['brgy_location'];
$char_brgy = $_POST['char_brgy'];
$total_land_area = $_POST['total_land_area'];
$major_sources = $_POST['major_sources'];
$boundaries = $_POST['boundaries'];
$total_male_voters = $_POST['total_male_voters'];
$total_female_voters = $_POST['total_female_voters'];
$male_tanod = $_POST['male_tanod'];
$female_tanod = $_POST['female_tanod'];
$male_health_worker = $_POST['male_health_worker'];
$female_health_worker = $_POST['female_health_worker'];
$male_nutrition_scholar = $_POST['male_nutrition_scholar'];
$female_nutrition_scholar = $_POST['female_nutrition_scholar'];
$male_purok_leaders = $_POST['male_purok_leaders'];
$female_purok_leaders = $_POST['female_purok_leaders'];
$male_librarian = $_POST['male_librarian'];
$female_librarian = $_POST['female_librarian'];
$male_day_care_worker = $_POST['male_day_care_worker'];
$female_day_care_worker = $_POST['female_day_care_worker'];
$male_utility_worker = $_POST['male_utility_worker'];
$female_utility_worker = $_POST['female_utility_worker'];
$no_purok = $_POST['no_purok'];
$brgy_health_center = $_POST['brgy_health_center'];
$hospital = $_POST['hospital'];
$maternity_clinic = $_POST['maternity_clinic'];
$child_clinic = $_POST['child_clinic'];
$botika_brgy = $_POST['botika_brgy'];
$brgy_day_care_center = $_POST['brgy_day_care_center'];
$preschool = $_POST['preschool'];
$elementary = $_POST['elementary'];
$secondary = $_POST['secondary'];
$vocational = $_POST['vocational'];
$college_university = $_POST['college_university'];
$post_office = $_POST['post_office'];
$market = $_POST['market'];
$ricemill = $_POST['ricemill'];
$cornmill = $_POST['cornmill'];
$feedmill = $_POST['feedmill'];
$agricultural_market = $_POST['agricultural_market'];
$fertilizer = $_POST['fertilizer'];
$pesticide = $_POST['pesticide'];
$seeds = $_POST['seeds'];
$feeds = $_POST['feeds'];
$type = 'official';
$date = date('Y-m-d');

$connection = mysqli_connect("localhost", "root", "", "pulilan");
$user_id = $_SESSION['user_id'];
$query = mysqli_query($connection, "UPDATE brgy_q Set name = '$name', position = '$position', brgy_classification = '$brgy_classification', brgy_location = '$brgy_location', char_brgy = '$char_brgy', total_land_area = '$total_land_area', major_sources = '$major_sources', boundaries = '$boundaries', total_male_voters = '$total_male_voters', total_female_voters = '$total_female_voters', male_tanod = '$male_tanod', female_tanod = '$female_tanod', male_health_worker = '$male_health_worker', female_health_worker = '$female_health_worker', male_nutrition_scholar = '$male_nutrition_scholar', female_nutrition_scholar = '$female_nutrition_scholar', male_purok_leaders = '$male_purok_leaders', female_purok_leaders = '$female_purok_leaders', male_librarian = '$male_librarian', female_librarian = '$female_librarian', male_day_care_worker = '$male_day_care_worker', female_day_care_worker = '$female_day_care_worker', male_utility_worker = '$male_utility_worker', female_utility_worker = '$female_utility_worker', no_purok = '$no_purok', brgy_health_center = '$brgy_health_center', hospital = '$hospital', maternity_clinic = '$maternity_clinic', child_clinic = '$child_clinic', botika_brgy = '$botika_brgy', brgy_day_care_center = '$brgy_day_care_center', preschool = '$preschool', elementary = '$elementary', secondary = '$secondary', vocational = '$vocational', college_university = '$college_university', post_office = '$post_office', market = '$market', ricemill = '$ricemill', cornmill = '$cornmill', feedmill = '$feedmill', agricultural_market = '$agricultural_market', fertilizer = '$fertilizer', pesticide = '$pesticide', seeds = '$seeds', feeds = '$feeds'");
if($query){
  echo '<script>';
  echo 'alert("Updated");';
  echo 'window.location.href="viewbrgyanswer.php";';
  echo '</script>';
}
else{
  echo 'mysqli_error();';
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