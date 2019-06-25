<?php include('../pulilan/adminnav.php');

session_start();


?>

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Add Barangay Information</h1>
                </div>
                <!--End Page Header -->
            </div>


<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui.js"></script>

  <div class="col col-lg-12 col-md-12 panel panel-default">
                    <legend><b>Barangay Official's Information</b></legend>
                  <form method="POST">

                      <div class="form-group col-md-4">
                        <label>Full Name:</label>
                        <input type="text" name="name" class="form-control"  placeholder="Enter Full Name" value="" required>
                      </div>

                      <div class="form-group col-md-4">
                       <label>Email:</label>
                       <input type="text" name="email" class="form-control pull-right"  placeholder="Enter Email" value="" required>   
                      </div>

                      <div class="form-group col-md-4">
                       <label>Username:</label>
                       <input type="text" name="username" class="form-control pull-right"  placeholder="Enter Username" required>
                      </div>

                      <div class="form-group col-md-4">
                       <label>Password:</label>
                       <input type="text" name="password" class="form-control pull-right"  placeholder="Enter Password" required>
                      </div>
                       
                      <div class="form-group col-md-4">
                       <label>Contact Number:</label>
                       <input type="text" name="contact" class="form-control pull-right"  placeholder="Enter Contact Number" required>   
                      </div>

                      <div class="form-group col-md-4">
                       <label>Barangay Location:</label>
                       <input type="text" name="brgy_location" class="form-control pull-right"  placeholder="Enter Barangay Location" required>   
                      </div>

                      <div class="form-group col-md-6">
                       <label>Number of Purok/Sitios:</label>
                       <input type="text" name="no_purok" class="form-control pull-right"  placeholder="Enter Number of Purok/Sitios" required>   
                      </div>

                      <div class="form-group col-md-6">
                       <label>Major Source of Livelihood:</label>
                       <input type="text" name="major_sources" class="form-control pull-right"  placeholder="Enter Major Source of Livelihood" required>   
                      </div>

                      <div class="form-group col-md-3">
                       <label>Brgy Classification:</label>
                       <select class="form-control" data-placement="right" name="brgy_classification" required>
                         <option value=""></option>
                         <option value="Urban">Urban</option>
                         <option value="Rural">Rural</option>
                       </select>
                      </div>

                      <div class="form-group col-md-3">
                       <label>Brgy. Characteristic:</label>
                       <select class="form-control" data-placement="right" name="char_brgy" required>
                         <option value=""></option>
                         <option value="Plain">Plain</option>
                         <option value="Upland">Upland</option>
                         <option value="Mountainious">Mountainious</option>
                         <option value="Coastal">Coastal</option>
                       </select>
                      </div>

                      <div class="form-group col-md-3">
                       <label>Gender:</label>
                       <select class="form-control" name="gender" data-placement="right" required>
                         <option value=""></option>
                         <option value="Male">Male</option>
                         <option value="Female">Female</option>
                       </select>
                      </div>

                      <div class="form-group col-md-3">
                       <label>position:</label>
                       <select class="form-control" name="position" data-placement="right" required>
                         <option value=""></option>
                         <option value="Chairman">Chairman</option>
                         <option value="Secretary">Secretary</option>
                       </select>
                      </div>

                      <div class="form-group col-md-3">
                       <label>Male Tanod:</label>
                       <input type="text" name="male_tanod" class="form-control pull-right"  placeholder="Male Tanod" required>   
                      </div>

                      <div class="form-group col-md-3">
                       <label>Female Tanod:</label>
                       <input type="text" name="female_tanod" class="form-control pull-right"  placeholder="Female Tanod" required>   
                      </div>

                      <div class="form-group col-md-3">
                       <label>Male Health Worker:</label>
                       <input type="text" name="male_health_worker" class="form-control pull-right"  placeholder="Male Health Worker" required>   
                      </div>

                      <div class="form-group col-md-3">
                       <label>Female Health Worker:</label>
                       <input type="text" name="female_health_worker" class="form-control pull-right"  placeholder="Female Health Worker" required>   
                      </div>

                      <div class="form-group col-md-3">
                       <label>Male Nutrition Scholar:</label>
                       <input type="text" name="male_nutrition_scholar" class="form-control pull-right"  placeholder="Male Nutrition Scholar" required>   
                      </div>

                      <div class="form-group col-md-3">
                       <label>Female Nutrition Scholar:</label>
                       <input type="text" name="female_nutrition_scholar" class="form-control pull-right"  placeholder="Female Nutrition Scholar" required>   
                      </div>

                      <div class="form-group col-md-3">
                       <label>Male Purok Leaders:</label>
                       <input type="text" name="male_purok_leaders" class="form-control pull-right"  placeholder="Male Purok Leaders" required>   
                      </div>

                      <div class="form-group col-md-3">
                       <label>Female Purok Leaders:</label>
                       <input type="text" name="female_purok_leaders" class="form-control pull-right"  placeholder="Female Purok Leaders" required>   
                      </div>

                      <div class="form-group col-md-3">
                       <label>Male Librarian:</label>
                       <input type="text" name="male_librarian" class="form-control pull-right"  placeholder="Male Librarian" required>   
                      </div>

                      <div class="form-group col-md-3">
                       <label>Female Librarian:</label>
                       <input type="text" name="female_librarian" class="form-control pull-right"  placeholder="Female Librarian" required>   
                      </div>

                      <div class="form-group col-md-3">
                       <label>Male Day Care Worker:</label>
                       <input type="text" name="male_day_care_worker" class="form-control pull-right"  placeholder="Male Day Care Worker" required>   
                      </div>



                      <div class="form-group" align="center">
                        <button type="submit" name="submit" class="btn btn-primary">Add Information</button>
                      </div>
                    
                    </form>

  </div>
                    

  <?php

    session_start();

          if(isset($_POST['submit']))
          {
   if(!empty($_POST['username']) && !empty(['password'])){


            $name = $_POST['name'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $contact = $_POST['contact'];
            $brgy_location = $_POST['brgy_location'];
            $no_purok = $_POST['no_purok'];
            $major_sources = $_POST['major_sources'];
            $brgy_classification = $_POST['brgy_classification'];
            $char_brgy = $_POST['char_brgy'];
            $gender = $_POST['gender'];
            $position = $_POST['position'];
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
            $type = 'official';






            $connection = mysqli_connect("localhost", "root", "", "pulilan");

            $query = mysqli_query($connection, "INSERT INTO mainuser_acc(name, email, username, password, contact, brgy_location, no_purok, major_sources, brgy_classification, char_brgy, gender, position, male_tanod, female_tanod, male_health_worker, female_health_worker, male_nutrition_scholar, female_nutrition_scholar, male_purok_leaders, female_purok_leaders, male_librarian, female_librarian, male_day_care_worker, female_day_care_worker, male_utility_worker, female_utility_worker, type) VALUES('$name', '$email', '$username', '$password', '$contact', '$brgy_location','$no_purok', '$major_sources', '$brgy_classification', '$char_brgy', '$gender', '$position', '$male_tanod', '$female_tanod', '$male_health_worker', '$female_health_worker', '$male_nutrition_scholar', '$female_nutrition_scholar', '$male_purok_leaders', '$female_purok_leaders', '$male_librarian', '$female_librarian', '$male_day_care_worker', '$female_day_care_worker', '$male_utility_worker', '$female_utility_worker', '$type')");

            if($query)
            {

               echo'<script>';
               echo'alert("successfully Added!");';
               echo'window.location.href="adminindex.php";';
               echo'</script>';
            }
            else{

              echo 'mysql_error';
            }
}

          }
        ?>
        
<?php include('../pulilan/adminfooter.php'); ?>