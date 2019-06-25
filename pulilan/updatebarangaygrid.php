<?php include('../pulilan/adminnav.php');






 ?>
            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Update Barangay Information</h1>
                </div>
                <!--End Page Header -->
            </div>


<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui.js"></script>

  <div class="col col-lg-12 col-md-12 panel panel-default">
                  <form method="POST">        
                  <fieldset>
                    <legend><b>Barangay Official's Information</b></legend>

                      <div class="form-group col-md-6">
                        <input id="fullname" type="input" name="fullname" class="form-control"  placeholder="Enter Full Name" value="" required>
                      </div>

                      <div class="form-group col-md-6">
                       <input  id="" type="input" name="position" class="form-control pull-right"  placeholder="Enter Position" value="" required>   
                      </div>

                      <div class="form-group col-md-6">
                       <input  id="email" type="input" name="email" class="form-control pull-right"  placeholder="Enter Email" value="" required>   
                      </div>

                      <div class="form-group col-md-6">
                       <input  id="gender" type="input" name="gender" class="form-control pull-right"  placeholder="Enter Gender" value="" required>   
                      </div>

                      <div class="form-group col-md-6">
                       <input  id="" type="input" name="contact" class="form-control pull-right"  placeholder="Enter Contact Number" value="" required>   
                      </div>

                      <div class="form-group col-md-6">
                        <select class="form-control" name="brgy_location" data-placement="right" required>
                          <option value="" selected="selected">-Choose Barangay Location-</option>
                          <option value="Balatong A">Balatong - A</option>
                          <option value="Balatong B">Balatong - B</option>
                          <option value="Cut-Cot">Cut-Cot</option>
                          <option value="Dampol 1st">Dampol 1st</option>
                          <option value="Dampol 2nd A">Dampol 2nd A</option>
                          <option value="Dampol 2nd B">Dampol 2nd B</option>
                          <option value="Dulong Malabon">Dulong Malabon</option>
                          <option value="Inaon">Inaon</option>
                          <option value="Longos">Longos</option>
                          <option value="Lumbac">Lumbac</option>
                          <option value="Paltao">Paltao</option>
                          <option value="Peñabatan">Peñabatan</option>
                          <option value="Poblacion">Poblacion</option>
                          <option value="Sta. Peregrina">Sta. Peregrina</option>
                          <option value="Sto. Cristo">Sto. Cristo</option>
                          <option value="Taal">Taal</option>
                          <option value="Tabon">Tabon</option>
                          <option value="Tenejero">Tenejero</option>
                          <option value="Tibag">Tibag</option>
                        </select>
                      </div>

                      <div class="form-group" align="center">
                        <button type="submit" name="submit" class="btn btn-primary">Add Information</button>
                      </div>

                  </fieldset>
                  </form>

  </div>
        <?php
          session_start();

          if(isset($_POST['submit']))
          {

            $fullname = $_POST['fullname'];
            $position = $_POST['position'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $contact = $_POST['contact'];
            $brgy_location = $_POST['brgy_location'];
            $type = 'officials';

            $connection = mysqli_connect("localhost", "root", "", "pulilan");

            $query = mysqli_query($connection, "INSERT INTO brgydetails_tbl(fullname, position, email, gender, contact, brgy_location, type) VALUES('$fullname', '$position', '$email', '$gender', '$contact', '$brgy_location','$type')");

            if($query)
            {

               echo'<script>';
               echo'alert("successfully Added!");';
               echo'window.location.href="addbrgygrid.php";';
               echo'</script>';
            }


          }
        ?>

<?php include('../pulilan/adminfooter.php'); ?>