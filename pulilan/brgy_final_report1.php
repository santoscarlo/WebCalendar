<?php

$connection = mysqli_connect("localhost", "root", "", "pulilan");

 if(isset($_SESSION['lol'])&&!empty($_SESSION['lol'])){
                    $lol = $_SESSION['lol'];
                }
                global $lol;


    $queryresidentpopulation = mysqli_query($connection, "SELECT count(*) FROM resident_q where brgy_location = '$lol' OR type = 'resident'  ");
    $result = mysqli_fetch_array($queryresidentpopulation);
    $residentcount = array_shift($result);


    $queryresidentmalepopulation = mysqli_query($connection, "SELECT count(*) FROM resident_q where brgy_location = '$lol' OR gender = 'Male'");
    $maleresult = mysqli_fetch_array($queryresidentmalepopulation);
    $residentmalecount = array_shift($maleresult);


    $queryresidentfemalepopulation = mysqli_query($connection, "SELECT count(*) FROM resident_q where brgy_location = '$lol' OR gender = 'Female'");
    $femaleresult = mysqli_fetch_array($queryresidentfemalepopulation);
    $residentfemalecount = array_shift($femaleresult);

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
   </head>
<body>
<form method="POST">
    <div class="container">
<!--******************************Content*********************************-->

<script> // Print
function printpage() {

    //Get the print button and put it into a variable
    var printButton = document.getElementById("printpagebutton");
    var filter = document.getElementById("filter");
    
    //Set the button visibility to 'hidden' 
    printButton.style.visibility = 'hidden';
     filter.style.visibility = 'hidden';
   
    //Print the page content
    window.print()

    //Restore button visibility
    printButton.style.visibility = 'visible';
     filter.style.visibility = 'visible';
}
</script>


            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Barangay Final Report
                        <a href="brgyindex.php" class="btn btn-warning pull-right">Return</a>
                    </h1>
                </div>
                <!--End Page Header -->
            </div>
            <div class="row">
                <div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body green">
                            <i class="fa fa fa-home fa-3x"></i>
                            <p><?php echo $residentcount;?></p>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Total Resident | 2017
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body blue">
                            <i class="fa fa fa-users fa-3x"></i>
                            <p><?php echo $residentmalecount; ?></p>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Male Resident | 2017
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body red">
                            <i class="fa fa fa-users fa-3x"></i>
                            <p><?php echo $residentfemalecount; ?></p>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Female Resident | 2017
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <?php
                    if(isset($_SESSION['lol'])&&!empty($_SESSION['lol'])){
                        $lol = $_SESSION['lol'];
                    }
                    global $lol;

                    $conn = mysqli_connect("localhost", "root", "", "pulilan");

                    $queryhousehold = mysqli_query($connection, "SELECT sum(no_household) FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                    $totalhousehold = mysqli_fetch_array($queryhousehold);
                    $resulthousehold = array_shift($totalhousehold);

                    $queryfamilies = mysqli_query($connection, "SELECT sum(no_fam_house) FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                    $totalfamilies = mysqli_fetch_array($queryfamilies);
                    $resultfamilies = array_shift($totalfamilies);

                    $querymalevoters = mysqli_query($connection, "SELECT count(*) FROM resident_q where brgy_location = '$lol' OR registered_voters = 'Yes' and gender = 'Male'");
                    $resultmalevoters = mysqli_fetch_array($querymalevoters); 
                    $totalmalerep1 = array_shift($resultmalevoters);


                    $queryfemalevoters = mysqli_query($connection, "SELECT count(*) FROM resident_q where brgy_location = '$lol' OR registered_voters = 'Yes' and gender = 'Female'");
                    $resultfemalevoters = mysqli_fetch_array($queryfemalevoters); 
                    $totalfemalerep1 = array_shift($resultfemalevoters);
                {
                }
                ?>

                <div class="row panel panel-primary no-boder">
                    <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <div class="panel-body yellow" style="border-radius: 25px;">
                            <span class="panel-eyecandy-title"> <i class="fa fa fa-home fa-3x"></i> Families | <b><?php echo $resultfamilies; ?></b>
                            </span>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <div class="panel-body green" style="border-radius: 25px;">
                            <span class="panel-eyecandy-title"> <i class="fa fa fa-home fa-3x"></i> Household | <b><?php echo $resulthousehold; ?></b>
                            </span>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <div class="panel-body blue" style="border-radius: 25px;">
                            <span class="panel-eyecandy-title"> <i class="fa fa fa-user fa-3x"></i> Male Voters | <b><?php echo $totalmalerep1; ?></b>
                            </span>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <div class="panel-body red" style="border-radius: 25px;">
                            <span class="panel-eyecandy-title"> <i class="fa fa fa-user fa-3x"></i> Female Voters | <b><?php echo $totalfemalerep1; ?></b>
                            </span>
                        </div>
                    </div>
                </div>

                <!--   Civil Report -->
                <div class="col-lg-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <b>Civil Report</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Single</th>
                                            <th>Legally Married</th>
                                            <th>Widowed</th>
                                            <th>Divorced/Separated</th>
                                            <th>Common Law/Live in</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        if(isset($_SESSION['lol'])&&!empty($_SESSION['lol'])){
                                            $lol = $_SESSION['lol'];
                                        }
                                        global $lol;

                                        $civilrep1 = mysqli_query($connection, "SELECT sum(civil_stat = 'Single') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $civilresult1 = mysqli_fetch_array($civilrep1);
                                        $totalcivilrep1 = array_shift($civilresult1);

                                        $civilrep2 = mysqli_query($connection, "SELECT sum(civil_stat = 'Legally Married') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $civilresult2 = mysqli_fetch_array($civilrep2);
                                        $totalcivilrep2 = array_shift($civilresult2);

                                        $civilrep3 = mysqli_query($connection, "SELECT sum(civil_stat = 'Widowed') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $civilresult3 = mysqli_fetch_array($civilrep3);
                                        $totalcivilrep3 = array_shift($civilresult3);

                                        $civilrep4 = mysqli_query($connection, "SELECT sum(civil_stat = 'Divorced/Separated') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $civilresult4 = mysqli_fetch_array($civilrep4);
                                        $totalcivilrep4 = array_shift($civilresult4);

                                        $civilrep5 = mysqli_query($connection, "SELECT sum(civil_stat = 'Common Law/Live in') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $civilresult5 = mysqli_fetch_array($civilrep5);
                                        $totalcivilrep5 = array_shift($civilresult5);
                                    {
                                    ?>
                                    <tr>
                                        <td><?php echo $totalcivilrep1; ?></td>
                                        <td><?php echo $totalcivilrep2; ?></td>
                                        <td><?php echo $totalcivilrep3; ?></td>
                                        <td><?php echo $totalcivilrep4; ?></td>
                                        <td><?php echo $totalcivilrep5; ?></td>
                                    <tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- End  Civil Report -->

                <!--   Religion Report -->
                <div class="col-lg-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <b>Religion Report</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Catholic</th>
                                            <th>Protestant</th>
                                            <th>Iglesia ni Kristo</th>
                                            <th>Aglipay</th>
                                            <th>Islam</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        if(isset($_SESSION['lol'])&&!empty($_SESSION['lol'])){
                                            $lol = $_SESSION['lol'];
                                        }
                                        global $lol;

                                        $religionrep1 = mysqli_query($connection, "SELECT sum(religion = 'Catholic') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $religionresult1 = mysqli_fetch_array($religionrep1);
                                        $totalreligionrep1 = array_shift($religionresult1);

                                        $religionrep2 = mysqli_query($connection, "SELECT sum(religion = 'Protestant') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $religionresult2 = mysqli_fetch_array($religionrep2);
                                        $totalreligionrep2 = array_shift($religionresult2);

                                        $religionrep3 = mysqli_query($connection, "SELECT sum(religion = 'Iglesia ni Kristo') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $religionresult3 = mysqli_fetch_array($religionrep3);
                                        $totalreligionrep3 = array_shift($religionresult3);

                                        $religionrep4 = mysqli_query($connection, "SELECT sum(religion = 'Aglipay') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $religionresult4 = mysqli_fetch_array($religionrep4);
                                        $totalreligionrep4 = array_shift($religionresult4);

                                        $religionrep5 = mysqli_query($connection, "SELECT sum(religion = 'Islam') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $religionresult5 = mysqli_fetch_array($religionrep5);
                                        $totalreligionrep5 = array_shift($religionresult5);

                                        $religionrep6 = mysqli_query($connection, "SELECT sum(religion = 'Evangelicals') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $religionresult6 = mysqli_fetch_array($religionrep6);
                                        $totalreligionrep6 = array_shift($religionresult6);

                                        $religionrep7 = mysqli_query($connection, "SELECT sum(religion = 'Seventh-day Adventist') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $religionresult7 = mysqli_fetch_array($religionrep7);
                                        $totalreligionrep7 = array_shift($religionresult7);

                                        $religionrep8 = mysqli_query($connection, "SELECT sum(religion = 'Seventh-day Adventist') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $religionresult8 = mysqli_fetch_array($religionrep8);
                                        $totalreligionrep8 = array_shift($religionresult8);

                                        $religionrep9 = mysqli_query($connection, "SELECT sum(religion = 'Jesus is Lord Church') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $religionresult9 = mysqli_fetch_array($religionrep9);
                                        $totalreligionrep9 = array_shift($religionresult9);

                                        $religionrep10 = mysqli_query($connection, "SELECT sum(religion = 'Buddhist') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $religionresult10 = mysqli_fetch_array($religionrep10);
                                        $totalreligionrep10 = array_shift($religionresult10);
                                    { 
                                    ?>
                                    <tr>
                                        <td><?php echo $totalreligionrep1; ?></td>
                                        <td><?php echo $totalreligionrep2; ?></td>
                                        <td><?php echo $totalreligionrep3; ?></td>
                                        <td><?php echo $totalreligionrep4; ?></td>
                                        <td><?php echo $totalreligionrep5; ?></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <th>Evangelicals</th>
                                            <th>Seventh-day Adventist</th>
                                            <th>Jhovah's Witnesses</th>
                                            <th>Jesus is Lord Church</th>
                                            <th>Buddhist</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php                                    
                                    { 
                                    ?>
                                    <tr>
                                        <td><?php echo $totalreligionrep6; ?></td>
                                        <td><?php echo $totalreligionrep7; ?></td>
                                        <td><?php echo $totalreligionrep8; ?></td>
                                        <td><?php echo $totalreligionrep9; ?></td>
                                        <td><?php echo $totalreligionrep10; ?></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- End  Religion Report -->

                <!--   Housing Report -->
                <div class="col-lg-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <b>Housing Report</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Own House and Lot</th>
                                            <th>Rent Room and Lot included</th>
                                            <th>Own House Rent Lot with owner consent</th>
                                            <th>Own House Rent Lot without owner consent</th>
                                            <th>Rent House and Lot with owner consent</th>
                                            <th>Rent House and Lot without owner consent</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        if(isset($_SESSION['lol'])&&!empty($_SESSION['lol'])){
                                            $lol = $_SESSION['lol'];
                                        }
                                        global $lol;

                                        $housingrep1 = mysqli_query($connection, "SELECT sum(stat_house = 'Own House and Lot') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $housingresult1 = mysqli_fetch_array($housingrep1);
                                        $totalhousingrep1 = array_shift($housingresult1);

                                        $housingrep2 = mysqli_query($connection, "SELECT sum(stat_house = 'Rent Room and Lot included') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $housingresult2 = mysqli_fetch_array($housingrep2);
                                        $totalhousingrep2 = array_shift($housingresult2);

                                        $housingrep3 = mysqli_query($connection, "SELECT sum(stat_house = 'Own House Rent Lot with owner consent') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $housingresult3 = mysqli_fetch_array($housingrep3);
                                        $totalhousingrep3 = array_shift($housingresult3);

                                        $housingrep4 = mysqli_query($connection, "SELECT sum(stat_house = 'Own House Rent Lot without owner consent') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $housingresult4 = mysqli_fetch_array($housingrep4);
                                        $totalhousingrep4 = array_shift($housingresult4);

                                        $housingrep5 = mysqli_query($connection, "SELECT sum(stat_house = 'Rent House and Lot with owner consent') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $housingresult5 = mysqli_fetch_array($housingrep5);
                                        $totalhousingrep5 = array_shift($housingresult5);

                                        $housingrep6 = mysqli_query($connection, "SELECT sum(stat_house = 'Rent House and Lot without owner consent') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $housingresult6 = mysqli_fetch_array($housingrep6);
                                        $totalhousingrep6 = array_shift($housingresult6);
                                    { 
                                    ?>
                                    <tr>
                                        <td><?php echo $totalhousingrep1; ?></td>
                                        <td><?php echo $totalhousingrep2; ?></td>
                                        <td><?php echo $totalhousingrep3; ?></td>
                                        <td><?php echo $totalhousingrep4; ?></td>
                                        <td><?php echo $totalhousingrep5; ?></td>
                                        <td><?php echo $totalhousingrep6; ?></td>
                                    <tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- End  Housing Report -->

                <!--   Educational Report -->
                <div class="col-lg-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <b>Educational Report</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Day Care</th>
                                            <th>Preparatory</th>
                                            <th>Elementary Graduate</th>
                                            <th>Elementary Undergrad</th>
                                            <th>Secondary Graduate</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        if(isset($_SESSION['lol'])&&!empty($_SESSION['lol'])){
                                            $lol = $_SESSION['lol'];
                                        }
                                        global $lol;

                                        $educationalrep1 = mysqli_query($connection, "SELECT sum(educ_stat = 'Day Care') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $educationalresult1 = mysqli_fetch_array($educationalrep1);
                                        $totaleducationalrep1 = array_shift($educationalresult1);

                                        $educationalrep2 = mysqli_query($connection, "SELECT sum(educ_stat = 'Preparatory') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $educationalresult2 = mysqli_fetch_array($educationalrep2);
                                        $totaleducationalrep2 = array_shift($educationalresult2);

                                        $educationalrep3 = mysqli_query($connection, "SELECT sum(educ_stat = 'Elementary Graduate') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $educationalresult3 = mysqli_fetch_array($educationalrep3);
                                        $totaleducationalrep3 = array_shift($educationalresult3);

                                        $educationalrep4 = mysqli_query($connection, "SELECT sum(educ_stat = 'Elementary Undergrad') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $educationalresult4 = mysqli_fetch_array($educationalrep4);
                                        $totaleducationalrep4 = array_shift($educationalresult4);

                                        $educationalrep5 = mysqli_query($connection, "SELECT sum(educ_stat = 'Secondary Graduate') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $educationalresult5 = mysqli_fetch_array($educationalrep5);
                                        $totaleducationalrep5 = array_shift($educationalresult5);

                                        $educationalrep6 = mysqli_query($connection, "SELECT sum(educ_stat = 'Secondary Undergrad') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $educationalresult6 = mysqli_fetch_array($educationalrep6);
                                        $totaleducationalrep6 = array_shift($educationalresult6);

                                        $educationalrep7 = mysqli_query($connection, "SELECT sum(educ_stat = 'Vocational Graduate') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $educationalresult7 = mysqli_fetch_array($educationalrep7);
                                        $totaleducationalrep7 = array_shift($educationalresult7);

                                        $educationalrep8 = mysqli_query($connection, "SELECT sum(educ_stat = 'College Undergrad') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $educationalresult8 = mysqli_fetch_array($educationalrep8);
                                        $totaleducationalrep8 = array_shift($educationalresult8);

                                        $educationalrep9 = mysqli_query($connection, "SELECT sum(educ_stat = 'College Graduate') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $educationalresult9 = mysqli_fetch_array($educationalrep9);
                                        $totaleducationalrep9 = array_shift($educationalresult9);

                                        $educationalrep10 = mysqli_query($connection, "SELECT sum(educ_stat = 'None') FROM resident_q where brgy_location = '$lol' OR type = 'resident'");
                                        $educationalresult10 = mysqli_fetch_array($educationalrep10);
                                        $totaleducationalrep10 = array_shift($educationalresult10);
                                    { 
                                    ?>
                                    <tr>
                                        <td><?php echo $totaleducationalrep1; ?></td>
                                        <td><?php echo $totaleducationalrep2; ?></td>
                                        <td><?php echo $totaleducationalrep3; ?></td>
                                        <td><?php echo $totaleducationalrep4; ?></td>
                                        <td><?php echo $totaleducationalrep5; ?></td>
                                    <tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <th>Secondary Undergrad</th>
                                            <th>Vocational Graduate</th>
                                            <th>College Undergrad</th>
                                            <th>College Graduate</th>
                                            <th>None</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    { 
                                    ?>
                                    <tr>
                                        <td><?php echo $totaleducationalrep6; ?></td>
                                        <td><?php echo $totaleducationalrep7; ?></td>
                                        <td><?php echo $totaleducationalrep8; ?></td>
                                        <td><?php echo $totaleducationalrep9; ?></td>
                                        <td><?php echo $totaleducationalrep10; ?></td>
                                    <tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- End  Educational Report -->

                <!--   Facility Report -->
                <div class="col-lg-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <b>List of Available Facility</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Health Center/s</th>
                                            <th>Hospital/s</th>
                                            <th>Maternity Clinic/s</th>
                                            <th>Child Clinic/s</th>
                                            <th>Botika ng Barangay/s</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        if(isset($_SESSION['lol'])&&!empty($_SESSION['lol'])){
                                            $lol = $_SESSION['lol'];
                                        }
                                        global $lol;

                                        $brgyfacrep1 = mysqli_query($connection, "SELECT sum(brgy_health_center) FROM brgy_q");
                                        $brgyfacresult1 = mysqli_fetch_array($brgyfacrep1);
                                        $totalbrgyrep1 = array_shift($brgyfacresult1);

                                        $brgyfacrep2 = mysqli_query($connection, "SELECT sum(hospital) FROM brgy_q");
                                        $brgyfacresult2 = mysqli_fetch_array($brgyfacrep2);
                                        $totalbrgyrep2 = array_shift($brgyfacresult2);

                                        $brgyfacrep3 = mysqli_query($connection, "SELECT sum(maternity_clinic) FROM brgy_q");
                                        $brgyfacresult3 = mysqli_fetch_array($brgyfacrep3);
                                        $totalbrgyrep3 = array_shift($brgyfacresult3);

                                        $brgyfacrep4 = mysqli_query($connection, "SELECT sum(child_clinic) FROM brgy_q");
                                        $brgyfacresult4 = mysqli_fetch_array($brgyfacrep4);
                                        $totalbrgyrep4 = array_shift($brgyfacresult4);

                                        $brgyfacrep5 = mysqli_query($connection, "SELECT sum(botika_brgy) FROM brgy_q");
                                        $brgyfacresult5 = mysqli_fetch_array($brgyfacrep5);
                                        $totalbrgyrep5 = array_shift($brgyfacresult5);
                                    { 
                                    ?>
                                    <tr>
                                        <td><?php echo $totalbrgyrep1; ?></td>
                                        <td><?php echo $totalbrgyrep2; ?></td>
                                        <td><?php echo $totalbrgyrep3; ?></td>
                                        <td><?php echo $totalbrgyrep4; ?></td>
                                        <td><?php echo $totalbrgyrep5; ?></td>
                                    <tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <th>Day Care Center/s</th>
                                            <th>Preschool/s</th>
                                            <th>Elementary School/s</th>
                                            <th>High Shcool/s</th>
                                            <th>Vocational School/s</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        if(isset($_SESSION['lol'])&&!empty($_SESSION['lol'])){
                                            $lol = $_SESSION['lol'];
                                        }
                                        global $lol;

                                        $brgyfacrep6 = mysqli_query($connection, "SELECT sum(brgy_day_care_center) FROM brgy_q");
                                        $brgyfacresult6 = mysqli_fetch_array($brgyfacrep6);
                                        $totalbrgyrep6 = array_shift($brgyfacresult6);

                                        $brgyfacrep7 = mysqli_query($connection, "SELECT sum(preschool) FROM brgy_q");
                                        $brgyfacresult7 = mysqli_fetch_array($brgyfacrep7);
                                        $totalbrgyrep7 = array_shift($brgyfacresult7);

                                        $brgyfacrep8 = mysqli_query($connection, "SELECT sum(elementary) FROM brgy_q");
                                        $brgyfacresult8 = mysqli_fetch_array($brgyfacrep8);
                                        $totalbrgyrep8 = array_shift($brgyfacresult8);

                                        $brgyfacrep9 = mysqli_query($connection, "SELECT sum(secondary) FROM brgy_q");
                                        $brgyfacresult9 = mysqli_fetch_array($brgyfacrep9);
                                        $totalbrgyrep9 = array_shift($brgyfacresult9);

                                        $brgyfacrep10 = mysqli_query($connection, "SELECT sum(vocational) FROM brgy_q");
                                        $brgyfacresult10 = mysqli_fetch_array($brgyfacrep10);
                                        $totalbrgyrep10 = array_shift($brgyfacresult10);
                                    { 
                                    ?>
                                    <tr>
                                        <td><?php echo $totalbrgyrep6; ?></td>
                                        <td><?php echo $totalbrgyrep7; ?></td>
                                        <td><?php echo $totalbrgyrep8; ?></td>
                                        <td><?php echo $totalbrgyrep9; ?></td>
                                        <td><?php echo $totalbrgyrep10; ?></td>
                                    <tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <th>College/s or University/s</th>
                                            <th>Post Office/s</th>
                                            <th>Market/s</th>
                                            <th>Rice Mill/s</th>
                                            <th>Corn Mill/s</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        if(isset($_SESSION['lol'])&&!empty($_SESSION['lol'])){
                                            $lol = $_SESSION['lol'];
                                        }
                                        global $lol;

                                        $brgyfacrep11 = mysqli_query($connection, "SELECT sum(college_university) FROM brgy_q");
                                        $brgyfacresult11 = mysqli_fetch_array($brgyfacrep11);
                                        $totalbrgyrep11 = array_shift($brgyfacresult11);

                                        $brgyfacrep12 = mysqli_query($connection, "SELECT sum(post_office) FROM brgy_q");
                                        $brgyfacresult12 = mysqli_fetch_array($brgyfacrep12);
                                        $totalbrgyrep12 = array_shift($brgyfacresult12);

                                        $brgyfacrep13 = mysqli_query($connection, "SELECT sum(market) FROM brgy_q");
                                        $brgyfacresult13 = mysqli_fetch_array($brgyfacrep13);
                                        $totalbrgyrep13 = array_shift($brgyfacresult13);

                                        $brgyfacrep14 = mysqli_query($connection, "SELECT sum(ricemill) FROM brgy_q");
                                        $brgyfacresult14 = mysqli_fetch_array($brgyfacrep14);
                                        $totalbrgyrep14 = array_shift($brgyfacresult14);

                                        $brgyfacrep15 = mysqli_query($connection, "SELECT sum(cornmill) FROM brgy_q");
                                        $brgyfacresult15 = mysqli_fetch_array($brgyfacrep15);
                                        $totalbrgyrep15 = array_shift($brgyfacresult15);
                                    { 
                                    ?>
                                    <tr>
                                        <td><?php echo $totalbrgyrep11; ?></td>
                                        <td><?php echo $totalbrgyrep12; ?></td>
                                        <td><?php echo $totalbrgyrep13; ?></td>
                                        <td><?php echo $totalbrgyrep14; ?></td>
                                        <td><?php echo $totalbrgyrep15; ?></td>
                                    <tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <th>Agricultural Produce Market/s</th>
                                            <th>Fertilizer Dealer/s</th>
                                            <th>Pesticide Dealer/s</th>
                                            <th>Seeds Dealer/s</th>
                                            <th>Feeds Dealer/s</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        if(isset($_SESSION['lol'])&&!empty($_SESSION['lol'])){
                                            $lol = $_SESSION['lol'];
                                        }
                                        global $lol;

                                        $brgyfacrep16 = mysqli_query($connection, "SELECT sum(college_university) FROM brgy_q");
                                        $brgyfacresult16 = mysqli_fetch_array($brgyfacrep16);
                                        $totalbrgyrep16 = array_shift($brgyfacresult16);

                                        $brgyfacrep17 = mysqli_query($connection, "SELECT sum(post_office) FROM brgy_q");
                                        $brgyfacresult17 = mysqli_fetch_array($brgyfacrep17);
                                        $totalbrgyrep17 = array_shift($brgyfacresult17);

                                        $brgyfacrep18 = mysqli_query($connection, "SELECT sum(market) FROM brgy_q");
                                        $brgyfacresult18 = mysqli_fetch_array($brgyfacrep18);
                                        $totalbrgyrep18 = array_shift($brgyfacresult18);

                                        $brgyfacrep19 = mysqli_query($connection, "SELECT sum(ricemill) FROM brgy_q");
                                        $brgyfacresult19 = mysqli_fetch_array($brgyfacrep19);
                                        $totalbrgyrep19 = array_shift($brgyfacresult19);

                                        $brgyfacrep20 = mysqli_query($connection, "SELECT sum(cornmill) FROM brgy_q");
                                        $brgyfacresult20 = mysqli_fetch_array($brgyfacrep20);
                                        $totalbrgyrep20 = array_shift($brgyfacresult20);
                                    { 
                                    ?>
                                    <tr>
                                        <td><?php echo $totalbrgyrep16; ?></td>
                                        <td><?php echo $totalbrgyrep17; ?></td>
                                        <td><?php echo $totalbrgyrep18; ?></td>
                                        <td><?php echo $totalbrgyrep19; ?></td>
                                        <td><?php echo $totalbrgyrep20; ?></td>
                                    <tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <div align="center">
                                <a class="btn btn-primary fa fa-print" id=""> PRINT</a>
                            </div>
                        </div>
                    </div>
                </div><!-- End  Facility Report -->


<?php include('../pulilan/adminfooter.php'); ?>