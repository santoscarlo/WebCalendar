<?php include('../pulilan/adminnav.php');






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
                       <input  id="" type="input" name="brgy_location" class="form-control pull-right"  placeholder="Enter Department" value="" required>   
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
            $type = 'executive';

            $connection = mysqli_connect("localhost", "root", "", "pulilan");

            $query = mysqli_query($connection, "INSERT INTO mainuser_acc(name, position, email, gender, contact, brgy_location, type) VALUES('$fullname', '$position', '$email', '$gender', '$contact', '$brgy_location','$type')");

            if($query)
            {

               echo'<script>';
               echo'alert("successfully Added!");';
               echo'window.location.href="addexecutive_grid.php";';
               echo'</script>';
            }


          }
        ?>

<?php include('../pulilan/adminfooter.php'); ?>