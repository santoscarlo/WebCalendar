<?php 
$year = $_POST['year'];
include('../pulilan/final_report_function.php');

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
                    <h1 class="page-header">Barangay Consolidated Final Report for year <?php echo $year; ?>
                        <a href="adminindex.php" class="btn btn-warning pull-right">Return</a>
                    </h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body" style="background-color: lightgray;">
                            <i class="fa fa fa-user fa-3x"></i>
                            <p><?php echo $totalCount; ?></p>
                            <span class="panel-eyecandy-title">Total Barangay | <?php echo $year; ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body" style="background-color: lightgray;">
                            <i class="fa fa fa-home fa-3x"></i>
                            <p><?php echo $residentcount;?></p>
                            <span class="panel-eyecandy-title">Total Resident | <?php echo $year; ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body" style="background-color: lightgray;">
                            <i class="fa fa fa-users fa-3x"></i>
                            <p><?php echo $residentmalecount; ?></p>
                            <span class="panel-eyecandy-title">Male Resident | <?php echo $year; ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body" style="background-color: lightgray;">
                            <i class="fa fa fa-users fa-3x"></i>
                            <p><?php echo $residentfemalecount; ?></p>
                            <span class="panel-eyecandy-title">Female Resident | <?php echo $year; ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!--   Female Personnel -->
            <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading" style="background-color: pink;">
                            <b>Female Personnel</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Health Worker</th>
                                            <th>Nutrition Scholar</th>
                                            <th>Purok Leaders</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    {
                                    ?>
                                    <tr>
                                        <td><?php echo $totalhealthrep2; ?></td>
                                        <td><?php echo $totalnutritionrep2; ?></td>
                                        <td><?php echo $totalpurokrep2; ?></td>
                                    <tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <th>Librarian</th>
                                            <th>Day Care Worker</th>
                                            <th>Utility Worker</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    {
                                    ?>
                                    <tr>
                                        <td><?php echo $totallibrarianrep2; ?></td>
                                        <td><?php echo $totaldaycarerep2; ?></td>
                                        <td><?php echo $totalutilityrep2; ?></td>
                                    <tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End  Female Personnel -->

            <div class="row panel panel-primary no-boder">
                <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="panel-body yellow" style="border-radius: 25px;">
                        <span class="panel-eyecandy-title"> <i class="fa fa fa-users fa-3x"></i> Families | <b><?php echo $totalfamiliesrep1; ?></b>
                        </span>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="panel-body green" style="border-radius: 25px;">
                        <span class="panel-eyecandy-title"> <i class="fa fa fa-users fa-3x"></i> Household | <b><?php echo $totalhouseholdrep1; ?></b>
                        </span>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="panel-body blue" style="border-radius: 25px;">
                        <span class="panel-eyecandy-title"> <i class="fa fa fa-users fa-3x"></i> Male Voters | <b><?php echo $totalmalerep1; ?></b>
                        </span>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="panel-body red" style="border-radius: 25px;">
                        <span class="panel-eyecandy-title"> <i class="fa fa fa-users fa-3x"></i> Female Voters | <b><?php echo $totalfemalerep1; ?></b>
                        </span>
                    </div>
                </div>
            </div>

            <!--   Male Personnel -->
            <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading" style="background-color: lightblue;">
                            <b>Male Personnel</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Health Worker</th>
                                            <th>Nutrition Scholar</th>
                                            <th>Purok Leaders</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    {
                                    ?>
                                    <tr>
                                        <td><?php echo $totalhealthrep1; ?></td>
                                        <td><?php echo $totalnutritionrep1; ?></td>
                                        <td><?php echo $totalpurokrep1; ?></td>
                                    <tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <th>Librarian</th>
                                            <th>Day Care Worker</th>
                                            <th>Utility Worker</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    {
                                    ?>
                                    <tr>
                                        <td><?php echo $totallibrarianrep1; ?></td>
                                        <td><?php echo $totaldaycarerep1; ?></td>
                                        <td><?php echo $totalutilityrep1; ?></td>
                                    <tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- End  Male Personnel -->
                
            </div>

            <div class="row panel panel-primary no-boder">
                <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="panel-body red" style="border-radius: 25px;">
                        <span class="panel-eyecandy-title"> <i class="fa fa fa-home fa-3x"></i> Health Center | <b><?php echo $totalbhealth; ?></b>
                        </span>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="panel-body yellow" style="border-radius: 25px;">
                        <span class="panel-eyecandy-title"> <i class="fa fa fa-home fa-3x"></i> Hospital | <b><?php echo $totalhospital; ?></b>
                        </span>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="panel-body green" style="border-radius: 25px;">
                        <span class="panel-eyecandy-title"> <i class="fa fa fa-home fa-3x"></i> Maternity Clinic | <b><?php echo $totalmclinic; ?></b>
                        </span>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="panel-body blue" style="border-radius: 25px;">
                        <span class="panel-eyecandy-title"> <i class="fa fa fa-home fa-3x"></i> Child Clinic | <b><?php echo $totalcclinic; ?></b>
                        </span>
                    </div>
                </div>
            </div>
            
            <!--   Civil Report -->
            <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading" style="background-color: lightgray;">
                            <b>Civil Report in <?php echo $totalCount; ?> Barangay</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Single</th>
                                            <th>Married</th>
                                            <th>Widowed</th>
                                            <th>Divorced/Separated</th>
                                            <th>Common Law/Live in</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
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
            </div>

            <div class="row panel panel-primary no-boder">
                <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="panel-body blue" style="border-radius: 25px;">
                        <span class="panel-eyecandy-title"> <i class="fa fa fa-home fa-3x"></i> Botika ng Brgy. | <b><?php echo $totalbbrgy; ?></b>
                        </span>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="panel-body red" style="border-radius: 25px;">
                        <span class="panel-eyecandy-title"> <i class="fa fa fa-home fa-3x"></i> Day Care Center | <b><?php echo $totaldcenter; ?></b>
                        </span>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="panel-body yellow" style="border-radius: 25px;">
                        <span class="panel-eyecandy-title"> <i class="fa fa fa-home fa-3x"></i> Preschool | <b><?php echo $totalpreschool; ?></b>
                        </span>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="panel-body green" style="border-radius: 25px;">
                        <span class="panel-eyecandy-title"> <i class="fa fa fa-home fa-3x"></i> Elementary School | <b><?php echo $totalelem; ?></b>
                        </span>
                    </div>
                </div>
            </div>

            <!--   Religion Report -->
            <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading" style="background-color: lightgreen;">
                            <b>Religion Report in <?php echo $totalCount; ?> Barangay</b>
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
            </div>

            <div class="row panel panel-primary no-boder">
                <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="panel-body green" style="border-radius: 25px;">
                        <span class="panel-eyecandy-title"> <i class="fa fa fa-home fa-3x"></i> Secondary School | <b><?php echo $totalsecondary; ?></b>
                        </span>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="panel-body blue" style="border-radius: 25px;">
                        <span class="panel-eyecandy-title"> <i class="fa fa fa-home fa-3x"></i> Vocational School | <b><?php echo $totalvocational; ?></b>
                        </span>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="panel-body red" style="border-radius: 25px;">
                        <span class="panel-eyecandy-title"> <i class="fa fa fa-home fa-3x"></i> College/University | <b><?php echo $totalcolun; ?></b>
                        </span>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="panel-body yellow" style="border-radius: 25px;">
                        <span class="panel-eyecandy-title"> <i class="fa fa fa-home fa-3x"></i> Post Office | <b><?php echo $totalpoffice; ?></b>
                        </span>
                    </div>
                </div>
            </div>

            <div class="row">
                <!--   Housing Report -->
                <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading" style="background-color: gray;">
                            <b>Housing Report in <?php echo $totalCount; ?> Barangay</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Own House and Lot</th>
                                            <th>Rent Room and Lot included</th>
                                            <th>Own House Rent Lot with owner consent</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    { 
                                    ?>
                                    <tr>
                                        <td><?php echo $totalhousingrep1; ?></td>
                                        <td><?php echo $totalhousingrep2; ?></td>
                                        <td><?php echo $totalhousingrep3; ?></td>
                                    <tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <th>Own House Rent Lot without owner consent</th>
                                            <th>Rent House and Lot with owner consent</th>
                                            <th>Rent House and Lot without owner consent</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    { 
                                    ?>
                                    <tr>
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
            </div>

            <div class="row panel panel-primary no-boder">
                <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="panel-body yellow" style="border-radius: 25px;">
                        <span class="panel-eyecandy-title"> <i class="fa fa fa-home fa-3x"></i> Market | <b><?php echo $totalmarket; ?></b>
                        </span>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="panel-body green" style="border-radius: 25px;">
                        <span class="panel-eyecandy-title"> <i class="fa fa fa-home fa-3x"></i> Rice Mill | <b><?php echo $totalrmill; ?></b>
                        </span>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="panel-body blue" style="border-radius: 25px;">
                        <span class="panel-eyecandy-title"> <i class="fa fa fa-home fa-3x"></i> Corn Mill | <b><?php echo $totalcmill; ?></b>
                        </span>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="panel-body red" style="border-radius: 25px;">
                        <span class="panel-eyecandy-title"> <i class="fa fa fa-home fa-3x"></i> Feed Mill | <b><?php echo $totalfmill; ?></b>
                        </span>
                    </div>
                </div>
            </div>

            <!--   Educational Report -->
            <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <b>Educational Report in <?php echo $totalCount; ?> Barangay</b>
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
                
            </div>

            <div class="row panel panel-primary no-boder" align="center">
                <div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <div class="panel-body red" style="border-radius: 25px;">
                        <span class="panel-eyecandy-title"> <i class="fa fa fa-home fa-3x"></i> <b><?php echo $totalamarket; ?></b> <br />Agricultural Market
                        </span>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <div class="panel-body yellow" style="border-radius: 25px;">
                        <span class="panel-eyecandy-title"> <i class="fa fa fa-home fa-3x"></i> <b><?php echo $totalfdealer; ?></b> <br />Fertilizer Dealer
                        </span>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <div class="panel-body green" style="border-radius: 25px;">
                        <span class="panel-eyecandy-title"> <i class="fa fa fa-home fa-3x"></i> <b><?php echo $totalpdealer; ?></b> <br />Pesticide Dealer
                        </span>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <div class="panel-body blue" style="border-radius: 25px;">
                        <span class="panel-eyecandy-title"> <i class="fa fa fa-home fa-3x"></i> <b><?php echo $totalsdealer; ?></b><br /> Seeds Dealer
                        </span>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <div class="panel-body red" style="border-radius: 25px;">
                        <span class="panel-eyecandy-title"> <i class="fa fa fa-home fa-3x"></i> <b><?php echo $totalfddealer; ?></b><br /> Feeds Dealer
                        </span>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <div class="panel-body yellow" style="border-radius: 25px;">
                        <span class="panel-eyecandy-title"> <i class="fa fa fa-home fa-3x"></i> <b><?php echo $alldealer; ?></b><br /> Total Facility
                        </span>
                    </div>
                </div>
            </div>
                <div align="center">
                    <a class="btn btn-primary fa fa-print" id=""> PRINT</a>
                </div>

<?php include('../pulilan/adminfooter.php'); ?>