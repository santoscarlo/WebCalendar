<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
 

?>
<?php include 'minnav.php'; ?>
                        <a class="img img-responsive" href="nlanding.php">
                          <img class="col col-lg-12 col-md-12 col-sm-12 col-xs-12" src="../pulilan/img/plogo.png" alt="pulilan logo"/>
                        </a>
                        <h1 class="panel-title fa fa-user" style="text-shadow: 1px 1px 2px red, 0 0 25px orange, 0 0 5px yellow;"> CBMS 2017 | Change Password Form</h1>
                    </div>
                    <div class="panel-body">
                        <form method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Current Password" name="currentpassword" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="New Password" name="newpassword" type="password">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Confirm Password" name="confirmpassword" type="password">
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="submit" value="Change & Submit" class="btn btn-outline btn-success btn-block">
                            </fieldset>
                        </form>
                        <?php
                        $username = $_SESSION['username'];
                        if($_POST['submit'])
                        {
                            $currentpassword = ($_POST['currentpassword']);
                            $newpassword = ($_POST['newpassword']);
                            $confirmpassword = ($_POST['confirmpassword']);
                            //check pass in db
                            $connection = mysqli_connect("localhost", "root", "","pulilan");
                            $getquery ="SELECT password FROM mainuser_acc WHERE username = '$username'";
                            $result = mysqli_query($connection, $getquery);
                            $row = mysqli_fetch_assoc($result); 

                            $currentpassworddb=$row['password'];
                            
                            if($currentpassword ==$currentpassworddb)
                            {
                                if($newpassword ==$confirmpassword)
                                {
                                    //change pass in db
                                        $querychange = "UPDATE mainuser_acc SET password='$newpassword' WHERE username = '$username'";
                                        $update_query = mysqli_query($connection, $querychange);
                                        if(!$update_query){
                                            echo "mysqli_error";
                                        }
                                        else{
                                          echo'<script>';
               echo'alert("successfully changed!");';
               echo'window.location.href="brgyindex.php";';
               echo'</script>';
                                           // header("location: change_password.php");
                                        }

                                }
                                else
                                {

                                }
                            }
                           
                        }
                       //check change pass
                        ?>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    

  
     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
