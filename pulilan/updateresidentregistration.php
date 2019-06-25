<?php include('../pulilan/brgynav.php'); 




  $user_id = $_GET['user_id'];


if(isset($_POST['submit'])){

                $name = $_POST['name'];
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

                $connection= mysqli_connect("localhost", "root", "", "pulilan");


                $update = mysqli_query($connection, "UPDATE mainuser_acc set name = '$name', email = '$email', contact = '$contact', brgy_location = '$brgy_location', province = '$province', address = '$address', city_municipality = '$city_municipality', purok_district = '$purok_district', gender = '$gender', position = '$civil_status', registered_voter = '$registered_voter', no_son = '$no_son', no_daughter = '$no_daughter', no_nephew = '$no_nephew', no_niece = '$no_niece', edit_status = 'disabled' where user_id = '$user_id'  ");
                if($update){
               echo'<script>';
              echo'alert("successfully updated!");';
              echo'window.location.href="brgy_resident_account_table.php";';
              echo'</script>';

      }

      else{
          echo ' mysql_error';

      }

      }





?>

  <!-- Page Header -->
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Update Resident Details</h1>
      </div>
  </div><!--End Page Header -->


<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui.js"></script>

  <div class="col col-lg-12 col-md-12 panel panel-default">


        <?php

          $get = mysqli_query($connection, "SELECT * FROM mainuser_acc WHERE user_id = '$user_id'");
          $h = mysqli_fetch_array($get);


          ?>
                  <form method="POST">        
                  <fieldset>
                      <div class="form-group col-md-4">
                        <label>Enter Full Name</label>
                        <input type="input" name="name" value="<?php echo $h['name'], $name; ?>" class="form-control" required>   
                      </div>

                    
                     

                      <div class="form-group col-md-4">
                        <label>Enter Email</label>
                       <input type="input" name="email" value="<?php echo $h['email'], $email;?>" class="form-control" required>   
                      </div>

                      <div class="form-group col-md-4">
                        <label>Enter Contact Number</label>
                       <input type="input" name="contact" value="<?php echo $h['contact'], $contact;?>" class="form-control" required>   
                      </div>

                      <div class="form-group col-md-4">
                        <label>Enter Barangay Location</label>
                       <input type="input" name="brgy_location" value="<?php echo $h['brgy_location'], $brgy_location;?>" class="form-control" required>   
                      </div>

                      <div class="form-group col-md-4">
                        <label>Enter Province</label>
                       <input type="input" name="province" value="<?php echo $h['province'], $province;?>" class="form-control" required>   
                      </div>

                      <div class="form-group col-md-4">
                        <label>Enter Address</label>
                       <input type="input" name="address" value="<?php echo $h['address'], $address;?>" class="form-control" required>   
                      </div>

                      <div class="form-group col-md-6">
                        <label>Enter City/Municipality</label>
                       <input type="input" name="city_municipality" value="<?php echo $h['city_municipality'], $city_municipality;?>" class="form-control" required>   
                      </div>

                      <div class="form-group col-md-6">
                        <label>Enter Purok/District</label>
                       <input type="input" name="purok_district" value="<?php echo $h['purok_district'], $purok_district;?>" class="form-control" required>   
                      </div>

                      <div class="form-group col-md-6">
                        <input type="text" name="gender" value = "<?php echo $h['gender'], $gender;?>" data-placement="right" required>
                         
                      </div>

                      <div class="form-group col-md-6">
                        <input type="text" name="position" value="<?php echo $h['position'], $position;?>" data-placement="right" required>
                          
                      </div>

                      <div class="form-group col-md-6">
                        <input type="text" name="civil_status" value="<?php echo $h['civil_status'], $civil_status;?>" data-placement="right" required>
                         
                      </div>

                      <div class="form-group col-md-6">
                        <input type="text" name="registered_voter" value="<?php echo $h['registered_voter'], $registered_voter;?>" data-placement="right" required>
                         
                      </div>

                      <div class="form-group col-md-3">
                        <label>Number of Son</label>
                       <input type="input" name="no_son" value="<?php echo $h['no_son'], $no_son;?>" class="form-control">   
                      </div>

                      <div class="form-group col-md-3">
                        <label>Number of Daughter</label>
                       <input type="input" name="no_daughter" value="<?php echo $h['no_daughter'], $no_daughter;?>" class="form-control">   
                      </div>

                      <div class="form-group col-md-3">
                        <label>Number of Nephew</label>
                       <input type="input" name="no_nephew" value="<?php echo $h['no_nephew'], $no_nephew;?>" class="form-control">   
                      </div>

                      <div class="form-group col-md-3">
                        <label>Number of Niece</label>
                       <input type="input" name="no_niece" value="<?php echo $h['no_niece'], $no_niece;?>" class="form-control">   
                      </div>

                      <div class="form-group" align="center">
                        <button type="submit" name="submit" class="fa fa-pencil btn btn-outline btn-primary"> Update Details</button>
                      </div>

                  </fieldset>
  </div>
                  </form>

      

<?php include('../pulilan/adminfooter.php'); ?>
