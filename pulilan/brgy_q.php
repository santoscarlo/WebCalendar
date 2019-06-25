<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$user_id = $_SESSION['user_id'];

$connection = mysqli_connect("localhost", "root", "", "pulilan");
 if(isset($_SESSION['lol'])&&!empty($_SESSION['lol'])){
                    $lol = $_SESSION['lol'];
                }
                global $lol;
$getasnwer = mysqli_query($connection, "SELECT * FROM mainuser_acc where brgy_location = '$lol' AND type = 'official' OR user_id = '".$_GET['user_id']."'");


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
<form method="POST">
    <div class="container">
<!--******************************Content*********************************-->

    <!--  page header -->
    <div class="row">
        <div class="col-lg-12">
                <h1 class="page-header">Barangay Profile Questionnaire
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
                            <th>Position</th>
                            <th>Brgy. Classification</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="name" value="<?php echo $row['name'];?>" required></td>
                            <td><input type="text" name="position" value="<?php echo $row['position'];?>" required></td>
                            <td><input type="text" name="brgy_classification" value="<?php echo $row['brgy_classification'];?>" required></td>
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
                            <td><input type="text" name="brgy_location" value="<?php echo $row['brgy_location'];?>" required></td>
                            <td><input type="text" name="char_brgy" value="<?php echo $row['char_brgy'];?>" required></td>
                            <td><input type="text" name="total_land_area" required></td>
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
                            <td><input type="text" name="major_sources" value="<?php echo $row['major_sources'];?>" required></td>
                            <td><input type="text" name="boundaries" value="<?php echo $row['boundaries'];?>" required></td>
                            <td><input type="text" name="total_male_voters" value="<?php echo $row['total_male_voters'];?>" required></td>
                            <td><input type="text" name="total_female_voters" value="<?php echo $row['total_female_voters'];?>" required></td>
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
                            <td><input type="text" name="male_tanod" value="<?php echo $row['male_tanod'];?>" required></td>
                            <td><input type="text" name="female_tanod" value="<?php echo $row['female_tanod'];?>" required></td>
                            <td><input type="text" name="male_health_worker" value="<?php echo $row['male_health_worker'];?>" required></td>
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
                            <td><input type="text" name="female_health_worker" value="<?php echo $row['female_health_worker'];?>" required></td>
                            <td><input type="text" name="male_nutrition_scholar" value="<?php echo $row['male_nutrition_scholar'];?>" required></td>
                            <td><input type="text" name="female_nutrition_scholar" value="<?php echo $row['female_nutrition_scholar'];?>" required></td>
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
                            <td><input type="text" name="male_purok_leaders" value="<?php echo $row['male_purok_leaders'];?>" required></td>
                            <td><input type="text" name="female_purok_leaders" value="<?php echo $row['female_purok_leaders'];?>" required></td>
                            <td><input type="text" name="male_librarian" value="<?php echo $row['male_librarian'];?>" required></td>
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
                            <td><input type="text" name="female_librarian" value="<?php echo $row['female_librarian'];?>" required></td>
                            <td><input type="text" name="male_day_care_worker" value="<?php echo $row['male_day_care_worker'];?>" required></td>
                            <td><input type="text" name="female_day_care_worker" value="<?php echo $row['female_day_care_worker'];?>" required></td>
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
                            <td><input type="text" name="male_utility_worker" value="<?php echo $row['male_utility_worker'];?>" required></td>
                            <td><input type="text" name="female_utility_worker" value="<?php echo $row['female_utility_worker'];?>" required></td>
                            <td><input type="text" name="no_purok" value="<?php echo $row['no_purok'];?>" required></td>
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
                          <td><input type="text" name="brgy_health_center" value="<?php echo $row['brgy_health_center'];?>"></td>
                          <td><input type="text" name="hospital" value="<?php echo $row['hospital'];?>"></td>
                          <td><input type="text" name="maternity_clinic" value="<?php echo $row['maternity_clinic'];?>"></td>
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
                          <td><input type="text" name="child_clinic" value="<?php echo $row['child_clinic'];?>"></td>
                          <td><input type="text" name="botika_brgy" value="<?php echo $row['botika_brgy'];?>"></td>
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
                          <td><input type="text" name="brgy_day_care_center" value="<?php echo $row['char_brgy'];?>"></td>
                          <td><input type="text" name="preschool" ></td>
                          <td><input type="text" name="elementary" ></td>
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
                          <td><input type="text" name="secondary" ></td>
                          <td><input type="text" name="vocational" ></td>
                          <td><input type="text" name="college_university" ></td>
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
                          <td><input type="text" name="post_office" ></td>
                          <td><input type="text" name="market" ></td>
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
                          <td><input type="text" name="ricemill" ></td>
                          <td><input type="text" name="cornmill" ></td>
                          <td><input type="text" name="feedmill" ></td>
                          <td><input type="text" name="agricultural_market" ></td>
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
                          <td><input type="text" name="fertilizer" ></td>
                          <td><input type="text" name="pesticide" ></td>
                          <td><input type="text" name="seeds" ></td>
                          <td><input type="text" name="feeds" ></td>
                        </tr>
                      </tbody>
                    </table>
                  <div class="panel-body" align="center">
                      <input class="btn btn-success" type="submit" name="submit" value="Submit">
                  </div>
                                       
                  </div>
                </div>
            </div>
        </div>
</form>
<?php endwhile; ?>

<?php
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
$query = mysqli_query($connection, "INSERT INTO brgy_q(user_id, name, position, brgy_classification, brgy_location, char_brgy, total_land_area, major_sources, boundaries, total_male_voters, total_female_voters, male_tanod, female_tanod, male_health_worker, female_health_worker, male_nutrition_scholar, female_nutrition_scholar, male_purok_leaders, female_purok_leaders, male_librarian, female_librarian, male_day_care_worker, female_day_care_worker, male_utility_worker, female_utility_worker, no_purok, brgy_health_center, hospital, maternity_clinic, child_clinic, botika_brgy, brgy_day_care_center, preschool, elementary, secondary, vocational, college_university, post_office, market, ricemill, cornmill, feedmill, agricultural_market, fertilizer, pesticide, seeds, feeds, type, date) VALUES ('$user_id','$name', '$position', '$brgy_classification', '$brgy_location', '$char_brgy', '$total_land_area', '$major_sources', '$boundaries', '$total_male_voters', '$total_female_voters', '$male_tanod', '$female_tanod', '$male_health_worker', '$female_health_worker', '$male_nutrition_scholar', '$female_nutrition_scholar', '$male_purok_leaders', '$female_purok_leaders', '$male_librarian', '$female_librarian', '$male_day_care_worker', '$female_day_care_worker', '$male_utility_worker', '$female_utility_worker', '$no_purok', '$brgy_health_center', '$hospital', '$maternity_clinic', '$child_clinic', '$botika_brgy', '$brgy_day_care_center', '$preschool', '$elementary', '$secondary', '$vocational', '$college_university', '$post_office', '$market', '$ricemill', '$cornmill', '$feedmill', '$agricultural_market', '$fertilizer', '$pesticide', '$seeds', '$feeds', '$type', '$date') ");


if($query)
{   
  echo 'mysqli_error();';
}
else{
   
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