<?php 
if (!isset($_SESSION['brgy_id'])) {
  
}
  if(isset($_GET['name'])){
              $name = $_GET['name'];
            }
  if(isset($_GET['username'])){
              $username = $_GET['username'];
            }
  if(isset($_GET['password'])){
              $password = $_GET['password'];
            }
    if(isset($_GET['brgy_id'])){
              $brgy_id = $_GET['brgy_id'];
            }
  if(isset($_GET['email'])){
              $email =$_GET['email'];
            }
  if(isset($_GET['contact'])){
              $brgy_id_num =$_GET['contact'];
            }
  if(isset($_GET['brgy_location'])){
              $brgy_location =$_GET['brgy_location'];
            }
  if(isset($_GET['province'])){
              $province =$_GET['province'];
            }    
  if(isset($_GET['city_municipality'])){
              $city_municipality = $_GET['city_municipality'];
            }
  if(isset($_GET['purok_district'])){
              $purok_district = $_GET['purok_district'];
            }
  if(isset($_GET['no_son'])){
              $no_son =$_GET['no_son'];
            }
  if(isset($_GET['no_daughter'])){
              $no_daughter =$_GET['no_daughter'];
            }          
  if(isset($_GET['no_nephew'])){
              $no_nephew =$_GET['no_nephew'];
            }
  if(isset($_GET['no_niece'])){
              $no_niece =$_GET['no_niece'];
            }  
  if(isset($_GET['present'])){
              $present =$_GET['present'];
            }

session_start();

          if(isset($_POST['submit']))
          {
            if(!empty($_POST['username']) && !empty(['password'])){

                $name = $_POST['name'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $brgy_id = $_POST['brgy_id'];
                $email = $_POST['email'];
                $contact = $_POST['contact'];
                $brgy_location = $_POST['brgy_location'];
                $province = $_POST['province'];
                $address = $_POST['address'];
                $city_municipality = $_POST['city_municipality'];
                $purok_district = $_POST['purok_district'];
                $gender = $_POST['gender'];
                $position = $_POST['position'];
                $civil_status = $_POST['civil_status'];
                $registered_voter = $_POST['registered_voter'];
                $no_son = $_POST['no_son'];
                $no_daughter = $_POST['no_daughter'];
                $no_nephew = $_POST['no_nephew'];
                $no_niece = $_POST['no_niece'];
                $type = 'resident';

                 $connection = mysqli_connect("localhost","root","","pulilan");
                  if(($check = mysqli_num_rows(mysqli_query($connection, "SELECT * from mainuser_acc where brgy_id = '$brgy_id'"))) > 0){
           

                      header("location: addnewresident.php?brgy_id=".$brgy_id."&&name=".$name."&&username=".$username."&&password=".$password."&&email=".$email."&&contact=".$contact."&&brgy_location=".$brgy_location."&&province=".$province."&&address=".$address."&&city_municipality=".$city_municipality."&&purok_district=".$purok_district."&&no_son=".$no_son."&&no_daughter=".$no_daughter."&&no_nephew=".$no_nephew."&&no_niece=".$no_niece."&&present=1");

              }
              else{
                 $query = mysqli_query($connection, "INSERT INTO mainuser_acc(name, username, password, brgy_id, email, contact, brgy_location, province, address, city_municipality, purok_district, gender, position, civil_status, registered_voter, no_son, no_daughter, no_nephew, no_niece, type) VALUES ('$name', '$username', '$password', '$brgy_id', '$email', '$contact', '$brgy_location', '$province', '$address', '$city_municipality', '$purok_district', '$gender', '$position', '$civil_status', '$registered_voter', '$no_son', '$no_daughter', '$no_nephew', '$no_niece', '$type')");

                 if($query)
                 {
                  echo'<script>';
               echo'alert("successfully Added!");';
               echo'window.location.href="addnewresident.php";';
               echo'</script>';

                 }
                 else
                 {
                   echo 'mysqli_error';
                 }
}
           }
         }
         include('../pulilan/brgynav.php'); 
?>



  <!-- Page Header -->
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Add New Resident</h1>
      </div>
  </div><!--End Page Header -->


<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui.js"></script>

  <div class="col col-lg-12 col-md-12 panel panel-default">
                  <form method="POST">        
                  <fieldset>
                      <div class="form-group col-md-4">
                        <label>Enter Full Name</label>
                        <input type="input" name="name" class="form-control" value="<?php echo $name; ?>" required>   
                      </div>

                      <div class="form-group col-md-4">
                        <label>Enter username</label>
                        <input type="input" name="username" class="form-control" value="<?php echo $username; ?>" required>
                      </div>

                      <div class="form-group col-md-4">
                        <label>Enter Password</label>
                        <input type="input" name="password" class="form-control" value="<?php echo $password; ?>" required> 
                      </div>

                      <div class="form-group col-md-4">
                      <?php
                      if($present =="1"){
                      ?>
                      <P style="color: red">*Please input new username</P>
                      <?php
                      }
                      ?>
                      <label>Enter Brgy ID Number: Five Digits only</label>
                      <input type="input" name="brgy_id" class="form-control" placeholder="Enter Five Digit Number Only..." value="<?php echo $brgy_id; ?>"  required 
                      <?php  if($present =="1"){
                      ?>  
                      style="border: 1px solid red;"
                      <?php
                      }
                      ?>
                        >
                      </div>

                      <div class="form-group col-md-4">
                        <label>Enter Email</label>
                       <input type="input" name="email" class="form-control" value="<?php echo $email; ?>" required>   
                      </div>

                      <div class="form-group col-md-4">
                        <label>Enter Contact Number</label>
                       <input type="input" name="contact" class="form-control" value="<?php echo $contact; ?>" required>   
                      </div>

                      <div class="form-group col-md-4">
                        <label>Enter Barangay Location</label>
                       <input type="input" name="brgy_location" class="form-control" value="<?php
                                        echo $_SESSION['username'];
                                    ?>" required>   
                      </div>

                      <div class="form-group col-md-4">
                        <label>Enter Province</label>
                       <input type="input" name="province" class="form-control" value="Bulacan" required>   
                      </div>

                      <div class="form-group col-md-4">
                        <label>Enter Address</label>
                       <input type="input" name="address" class="form-control" value="<?php echo $address; ?>" required>   
                      </div>

                      <div class="form-group col-md-6">
                        <label>Enter City/Municipality</label>
                       <input type="input" name="city_municipality" class="form-control" value="Pulilan" required>   
                      </div>

                      <div class="form-group col-md-6">
                        <label>Enter Purok/District</label>
                       <input type="input" name="purok_district" class="form-control" value="<?php echo $purok_district; ?>" required>   
                      </div>

                      <div class="form-group col-md-6">
                        <label>Select Gender</label>
                        <select class="form-control" name="gender" data-placement="right"  required>
                          <option value="" selected="selected">-Select Gender-</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>

                      <div class="form-group col-md-6">
                        <label>Select Family Position</label>
                        <select class="form-control" name="position" data-placement="right" required>
                          <option value="" selected="selected">-Select Family Position-</option>
                          <option value="Grand Father">Grand Father</option>
                          <option value="Grand Mother">Grand Mother</option>
                          <option value="Father">Father</option>
                          <option value="Mother">Mother</option>
                          <option value="Daughter">Daughter</option>
                          <option value="Son">Son</option>
                          <option value="Father-in-law">Father-in-law</option>
                          <option value="Mother-in-law">Mother-in-law</option>
                          <option value="Daughter-in-law">Daughter-in-law</option>
                          <option value="Son-in-law">Son-in-law</option>
                          <option value="Grand Daughter">Grand Daughter</option>
                          <option value="Grand Son">Grand Son</option>
                          <option value="Nephew">Nephew</option>
                          <option value="Niece">Niece</option>
                          <option value="Aunt">Aunt</option>
                          <option value="Uncle">Uncle</option>
                        </select>
                      </div>

                      <div class="form-group col-md-6">
                        <label>Select Civil Status</label>
                        <select class="form-control" name="civil_status" data-placement="right" required>
                          <option value=""> --Select Civil Status-- </option>
                          <option value="Legally Married">Legally Married</option>
                          <option value="Widowed">Widowed</option>
                          <option value="Divorced/Separated">Divorced/Separated</option>
                          <option value="Common Law/Live in">Common Law/Live in</option>
                          <option value="None">None</option>
                        </select>
                      </div>

                      <div class="form-group col-md-6">
                        <label>Select Voters Status</label>
                        <select class="form-control" name="registered_voter" data-placement="right" required>
                          <option value="" selected="selected">-Select Voters Status-</option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                        </select>
                      </div>

                      <div class="form-group col-md-6" >
                        <label>Number of Son</label>
                       <input type="input" name="no_son" value="<?php echo $no_son; ?>" class="form-control">   
                      </div>

                      <div class="form-group col-md-6">
                        <label>Number of Daughter</label>
                       <input type="input" name="no_daughter" value="<?php echo $no_daughter; ?>"  class="form-control">   
                      </div>

                      <div class="form-group col-md-6">
                        <label>Number of Nephew</label>
                       <input type="input" name="no_nephew"  value="<?php echo $no_nephew; ?>" class="form-control">   
                      </div>

                      <div class="form-group col-md-6">
                        <label>Number of Niece</label>
                       <input type="input" name="no_niece" value="<?php echo $no_niece; ?>" class="form-control">   
                      </div>

                      <div class="form-group" align="center">
                        <button type="submit" name="submit" class="fa fa-pencil btn btn-outline btn-primary"> Add Family Member</button>
                      </div>

                  </fieldset>
  </div>
                  </form>


<?php include('../pulilan/adminfooter.php'); ?>
