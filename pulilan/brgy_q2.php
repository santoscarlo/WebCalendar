<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
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

</style>
   </head>
<body>
    <!--  wrapper -->
    <h3 id="status">Initial Information 1 of 9</h3>
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="brgyindex.php">
                    <img src="../pulilan/img/plogo.png" alt="pulilan logo" style="width: 150%; height: 300%;" class="img-responsive" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
              <li><a href="brgyindex.php">
              <i class="fa fa-sign-out fa-3x"></i> Cancel</a>
              </li>
            </ul><!-- end navbar-top-links -->
<progress value="0" max="100" id="progressBar" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></progress>
        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="../pulilan/img/Balatong-A.jpg" alt="admin logo" class="img img-responsive">
                            </div>
                            <br>
                            <div class="text-center">
                                <div><strong>Barangay Balatong A</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                   
                        <!-- second-level-items -->
                    <li>
                        <a href="brgyindex.php"><i class="fa fa-user fa-fw"></i>Profile</a>
                    </li>
                    <li  class="selected">
                        <a href="#"><i class="fa fa-pencil-square-o fa-fw"></i>Forms<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="brgy_q.php">Barangay Profile Questionnaire</a>
                            </li>
                        </ul>
                    </li><!-- second-level-items -->
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">
            <!--******************************Content*********************************-->
            <form id="multiphase" onsubmit="return false" method="POST">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header text-center">Barangay Profile Questionnaire | 2017</h1>
                <div class="alert alert-danger text-center">
                    <strong>Warning!</strong> The respondent for this questionnaire should be the <b>Chairperson</b> or the <b>Secretary</b> of the Barangay.
                </div>
            </div>
            <!--End Page Header -->
            
                <!--Phase1 Form-->
                <div id="phase1">
                    <div class="text-center">
                        <h1>Initial Form</h1><br>
                        <input class="col-lg-6 col-md-6 col-sm-6 col-xs-6" placeholder="First Name" id="firstname" name="firstname" autofocus>
                        <input class="col-lg-6 col-md-6 col-sm-6 col-xs-6" placeholder="Last Name" id="lastname" name="lastname"><br>
                        <p class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Select Position</p>
                        <p class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Select Gender</p>
                        <select class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="position" name="position">
                          <option value=""></option>
                          <option value="Chairman">Chairman</option>
                          <option value="Secretary">Secretary</option>
                        </select>
                        <select class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="gender" name="gender">
                          <option value=""></option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select><br>
                        <button class="btn btn-info" type="submit" onclick="processPhase1()">Continue</button>
                    </div>
                </div>
                <!--End Phase1 Form-->
                
                <!--Phase2 Form-->
                <div id="phase2">
                    <div class="text-center">
                        <h1>Physical Characteristics</h1>
                        <input class="col-lg-4 col-md-4 col-sm-4" placeholder="Province" id="province" name="province" autofocus>
                        <input class="col-lg-4 col-md-4 col-sm-4" placeholder="City/Municipality" id="cm" name="cm">
                        <input class="col-lg-4 col-md-6 col-sm-4" placeholder="Number of Purok/Sitios" id="ps" name="ps"><br>
                        <p>Select Classification</p>
                        <select class="col-lg-12 col-md-12 col-sm-12" id="classification" name="classification">
                          <option value=""></option>
                          <option value="Urban">Urban</option>
                          <option value="Rural">Rural</option>
                        </select><br>
                        <p>(6) Land Area, Total Area (in sq. km.)</p>
                        <input class="col-lg-3 col-md-3 col-sm-3" id="residential" name="residential" placeholder="Residential">
                        <input class="col-lg-3 col-md-3 col-sm-3" id="commercial" name="commercial" placeholder="Commercial">
                        <input class="col-lg-3 col-md-3 col-sm-3" id="industrial" name="industrial" placeholder="Industrial">
                        <input class="col-lg-3 col-md-3 col-sm-3" id="agricultural" name="agricultural" placeholder="Agricultural">
                        <input class="col-lg-3 col-md-3 col-sm-3" id="mineral" name="mineral" placeholder="Mineral">
                        <input class="col-lg-3 col-md-3 col-sm-3" id="timberland" name="timberland" placeholder="Timberland">
                        <input class="col-lg-3 col-md-3 col-sm-3" id="specialc" name="specialc" placeholder="Special Classes">
                        <input class="col-lg-3 col-md-3 col-sm-3" id="totalla" name="totalla" placeholder="Total Land Area"><br>
                        <p>(7) General Description and Characteristics of the Barangay</p>
                        <p class="col-lg-3 col-md-3 col-sm-3">Plain</p>
                        <p class="col-lg-3 col-md-3 col-sm-3">upland</p>
                        <p class="col-lg-3 col-md-3 col-sm-3">mountanious</p>
                        <p class="col-lg-3 col-md-3 col-sm-3">coastal</p>
                        <select class="col-lg-3 col-md-3 col-sm-3" id="plain" name="plain">
                          <option value=""></option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                        </select>
                        <select class="col-lg-3 col-md-3 col-sm-3" id="upland" name="upland">
                          <option value=""></option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                        </select>
                        <select class="col-lg-3 col-md-3 col-sm-3" id="mountainous" name="mountainous">
                          <option value=""></option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                        </select>
                        <select class="col-lg-3 col-md-3 col-sm-3" id="coastal" name="coastal">
                          <option value=""></option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                        </select>
                        <p>(8) Boundaries</p>
                        <input class="col-lg-3 col-md-3 col-sm-3" id="east" name="east" placeholder="East">
                        <input class="col-lg-3 col-md-3 col-sm-3" id="west" name="west" placeholder="West">
                        <input class="col-lg-3 col-md-3 col-sm-3" id="nort" name="nort" placeholder="Nort">
                        <input class="col-lg-3 col-md-3 col-sm-3" id="south" name="south" placeholder="South"><br>
                        <p>(9) Major Sources of Livelihood</p>
                        <input class="col-lg-12 col-md-12 col-sm-12" id="msl" name="msl"><br>
                        <h1>Demographic Reference</h1>
                        <p>(11) Number of Households/Families</p>
                        <input class="col-lg-3 col-md-3 col-sm-3" id="households" name="households" placeholder="Households">
                        <input class="col-lg-3 col-md-3 col-sm-3" id="families" name="families" placeholder="Families">
                        <input class="col-lg-3 col-md-3 col-sm-3" id="reference period 11" name="reference period 11" placeholder="reference period">
                        <input class="col-lg-3 col-md-3 col-sm-3" id="source of data 11" name="source of data 11" placeholder="source of data">
                        <p>(12) Registered Voters</p>
                        <input class="col-lg-3 col-md-3 col-sm-3" id="male 12" name="male 12" placeholder="Male">
                        <input class="col-lg-3 col-md-3 col-sm-3" id="female 12" name="female 12" placeholder="Female">
                        <input class="col-lg-3 col-md-3 col-sm-3" id="reference period 12" name="reference period 12" placeholder="reference period">
                        <input class="col-lg-3 col-md-3 col-sm-3" id="source of data 12" name="source of data 12" placeholder="source of data">
                        <p>(13) Number of Barangay Personel</p>
                        <p>A. Tanod</p>
                        <input class="col-lg-4 col-md-4 col-sm-4" id="male 13a" name="male 13a" placeholder="Male">
                        <input class="col-lg-4 col-md-4 col-sm-4" id="female 13a" name="female 13a" placeholder="Female">
                        <input class="col-lg-4 col-md-4 col-sm-4" id="total 13a" name="total 13a" placeholder="Total">
                        <p>B. Health Worker</p>
                        <input class="col-lg-4 col-md-4 col-sm-4" id="male 13b" name="male 13b" placeholder="Male">
                        <input class="col-lg-4 col-md-4 col-sm-4" id="female 13b" name="female 13b" placeholder="Female">
                        <input class="col-lg-4 col-md-4 col-sm-4" id="total 13b" name="total 13b" placeholder="Total">
                        <p>C. Nutrition Scholar</p>
                        <input class="col-lg-4 col-md-4 col-sm-4" id="male 13c" name="male 13c" placeholder="Male">
                        <input class="col-lg-4 col-md-4 col-sm-4" id="female 13c" name="female 13c" placeholder="Female">
                        <input class="col-lg-4 col-md-4 col-sm-4" id="total 13c" name="total 13c" placeholder="Total">
                        <p>D. Purok Leaders</p>
                        <input class="col-lg-4 col-md-4 col-sm-4" id="male 13d" name="male 13d" placeholder="Male">
                        <input class="col-lg-4 col-md-4 col-sm-4" id="female 13d" name="female 13d" placeholder="Female">
                        <input class="col-lg-4 col-md-4 col-sm-4" id="total 13d" name="total 13d" placeholder="Total">
                        <p>E. Librarian</p>
                        <input class="col-lg-4 col-md-4 col-sm-4" id="male 13e" name="male 13e" placeholder="Male">
                        <input class="col-lg-4 col-md-4 col-sm-4" id="female 13e" name="female 13e" placeholder="Female">
                        <input class="col-lg-4 col-md-4 col-sm-4" id="total 13e" name="total 13e" placeholder="Total">
                        <p>F. Day Care Worker</p>
                        <input class="col-lg-4 col-md-4 col-sm-4" id="male 13f" name="male 13f" placeholder="Male">
                        <input class="col-lg-4 col-md-4 col-sm-4" id="female 13f" name="female 13f" placeholder="Female">
                        <input class="col-lg-4 col-md-4 col-sm-4" id="total 13f" name="total 13f" placeholder="Total">
                        <p>G. Utility Worker</p>
                        <input class="col-lg-4 col-md-4 col-sm-4" id="male 13g" name="male 13g" placeholder="Male">
                        <input class="col-lg-4 col-md-4 col-sm-4" id="female 13g" name="female 13g" placeholder="Female">
                        <input class="col-lg-4 col-md-4 col-sm-4" id="total 13g" name="total 13g" placeholder="Total">
                        <p>(14) Nutritional Status of Children  0-5 Years Old</p>
                        <p>Above Normal</p>
                        <input class="col-lg-4 col-md-4" id="male 14an" name="male 14an" placeholder="Male">
                        <input class="col-lg-4 col-md-4" id="female 14an" name="female 14an" placeholder="Female">
                        <input class="col-lg-4 col-md-4" id="total 14an" name="total 14an" placeholder="Total">
                        <p>Normal</p>
                        <input class="col-lg-4 col-md-4" id="male 14n" name="male 14n" placeholder="Male">
                        <input class="col-lg-4 col-md-4" id="female 14n" name="female 14n" placeholder="Female">
                        <input class="col-lg-4 col-md-4" id="total 14n" name="total 14n" placeholder="Total">
                        <p>Below Normal (Moderate)</p>
                        <input class="col-lg-4 col-md-4" id="male 14bnm" name="male 14bnm" placeholder="Male">
                        <input class="col-lg-4 col-md-4" id="female 14bnm" name="female 14bnm" placeholder="Female">
                        <input class="col-lg-4 col-md-4" id="total 14bnm" name="total 14bnm" placeholder="Total">
                        <p>Below Normal (Severe)</p>
                        <input class="col-lg-4 col-md-4" id="male 14bns" name="male 14bns" placeholder="Male">
                        <input class="col-lg-4 col-md-4" id="female 14bns" name="female 14bns" placeholder="Female">
                        <input class="col-lg-4 col-md-4" id="total 14bns" name="total 14bns" placeholder="Total">
                        <p>Total Nutritional Status of Children</p>
                        <input class="col-lg-4 col-md-4" id="male 14tnc" name="male 14tnc" placeholder="Male">
                        <input class="col-lg-4 col-md-4" id="female 14tnc" name="female 14tnc" placeholder="Female">
                        <input class="col-lg-4 col-md-4" id="total 14tnc" name="total 14tnc" placeholder="Total"><br>
                        <button class="btn btn-info" onclick="processPhase2()">Continue</button>
                    </div>
                </div>
                <!--Phase2 Form-->

                <!--show all data Form-->
                <div id="show_all_data">
                    <div class="text-center">
                      
                        <!--Initial show data-->
                        <!--Initial Form data-->
                        <h1>Initial</h1>
                        <table class="col col-12 table table-bordered">
                          <thead>
                            <tr>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Position</th>
                              <th>Gender</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><span id="display_fname"></span></td>
                              <td><span id="display_lname"></span></td>
                              <td><span id="display_position"></span></td>
                              <td><span id="display_gender"></span></td>
                            </tr>
                          </tbody>
                        </table>
                        <!--End Initial Form data-->

                        <!--Initial Form data-->
                        <h1>Initial</h1>
                        <table class="col col-12 table table-bordered">
                          <thead>
                            <tr>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Position</th>
                              <th>Gender</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><span id="display_fname"></span></td>
                              <td><span id="display_lname"></span></td>
                              <td><span id="display_position"></span></td>
                              <td><span id="display_gender"></span></td>
                            </tr>
                          </tbody>
                        </table>
                        <!--End Initial Form data-->


                        <!--Initial show data-->

                        
                        <button class="btn btn-info" onclick="submitForm()">Submit Data</button>
                    </div>
                </div>
                <!--end show all data Form-->
            </form>
            <!--****************************End Content*******************************-->
            <!--angle up-->
            <footer>
                <div class="text-center" style="position: fixed; right: 10px; bottom: 10px; width:50px; background-color: green; border-radius: 100%; padding: 15px; margin-top: 5px;">
                    <a href="#" style="color: white;" class="go-top">
                        <i class="fa fa-eject"></i>
                    </a>
                </div>
            </footer>
            <!--end angle up-->
        </div>
    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>
    <!-- Barangay Multi-level Form Scripts-->
    <script src="assets/scripts/bpqform.js"></script>

</body>

</html>