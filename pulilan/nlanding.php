<?php include 'functions.php'; ?>
<?php email_send() ?>
<!DOCTYPE html>
<html>
<head>
	<!-- tab-icon -->
    <link rel="shortcut icon" href="img/logo.png">
	<title>CBMS 2017 | Landing Page</title>
	<!-- Bootstrap and Font Awesome css -->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">
    <!-- owl carousel css -->

    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- CSS Animations -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Mordernizr -->
    <script src="js/modernizr-2.6.2.min.js"></script>
</head>
<body data-spy="scroll" data-target="#navigation" data-offset="120">


        <!-- ****************************** NAVBAR ********************************** -->

        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="img img-responsive" href="nlanding.php"><img src="img\plogo.png" alt="logo"></a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="navbar-collapse collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#intro">Home</a>
                        </li>
                        <li><a href="#section1">Info</a>
                        </li>
                        <li><a href="#about_us">About us</a>
                        </li>
                        <li><a href="#section4">Contact</a>
                        </li>
                    </ul>

                </div>
                <!--/.nav-collapse -->

            </div>
        </div>
        </div><!-- /#navbar -->

        <!-- *** NAVBAR END *** -->

        <div id="all">


            <!-- *** HOME PAGE *** -->
            <div id="intro">
                <div class="item parallax">
                    <div class="container">
                        <div class="row">

                            <h1 data-animate="fadeInDown">Pulilenyo ka ba?</h1>
                            <p class="message" data-animate="fadeInUp">Ito na marahil ang pagkakataon mo upang makatulong sa paligid mo, at maaari din matulungan ka depende sa inyong pangangailangan.</p>


                            <div class="col-md-6 col-md-offset-3">
                                <form action="#" method="post" id="frm-landingPage1" class="form">
                                    <a class="btn btn-round btn-success" data-animate="fadeInDown" href="login.php">Login</a>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- ************** END *********** HOME PAGE ********************************** -->



            <!-- ****************************** SERVICES *********************************** -->

            <div class="section" id="section1">
                <div class="container">
                    <div class="col-md-12">
                        <h2 class="title" data-animate="fadeInDown">Bakit ako sasali?</h2>

                        <p class="lead">There are three Major reason why you need to join, some problem cannot solved in the certain area this may addressed by the local Government in simply answer the forms annualy.</p>

                        <div class="row services">

                            <div class="col-md-4" data-animate="fadeInUp">
                                <div class="icon"><i class="fa fa-home"></i>
                                </div>
                                <h2 class="heading">At Home</h2>
                                <p>A Family problem that cannot solved on their own can be addressed by the help of the Government projects. </p>
                            </div>

                            <div class="col-md-4" data-animate="fadeInUp">
                                <div class="icon"><i class="fa fa-group"></i>
                                </div>
                                <h2 class="heading">In the Community</h2>
                                <p>An information that has been gathered can be used as a refference to solve the problen in barangay level and it is also can be used in the Municipality level. </p>
                            </div>

                            <div class="col-md-4" data-animate="fadeInUp">
                                <div class="icon"><i class="fa fa-flag"></i> 
                                </div>
                                <h2 class="heading">And in  the Municipality</h2>
                                <p>All the information can be used as guidelines to address all the nessesarry action to help the Community as well as the Barangays. </p>
                            </div>

                        </div>

                    </div>
                    <!-- /.12 -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.section -->

            <!-- ************** END *********** SERVICES *********************************** -->

            <!-- ****************************** ABOUT US *********************************** -->

            <div class="section text-gray" id="about_us" data-animate="fadeInUp">

                <div class="container">
                    <div class="col-md-12">

                        <div class="mb20">
                            <h2 class="title" data-animate="fadeInUp">About Us</h2>

                            <p class="lead text-center" data-animate="fadeInUp">This website is orginized by the local govenrment, DILG, and CBMS Philippines. To improved governance and greater transparency and accountability in resource allocation.</p> 
                        </div>

                        <ul class="owl-carousel testimonials same-height-row" data-animate="fadeInUp">
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text-justify">
                                        <p>The CBMS Philiippines is located at ------.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-group"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/cbms2.Jpg">
                                            <h5>CBMS</h5>
                                            <p>Philippines</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text-justify">
                                        <p>The Local DILG is located at ------.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-group"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/dilg.png">
                                            <h5>DILG</h5>
                                            <p>Local</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text-justify">
                                        <p>The Barangay Balatong-A is located at ------.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-group"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/brgy/balatonga.png">
                                            <h5>Balatong-A</h5>
                                            <p>Chairman</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text-justify">
                                        <p>The Barangay Balatong-B is located at ------.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-group"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/brgy/balatongb.png">
                                            <h5>Balatong-B</h5>
                                            <p>Chairman</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text-justify">
                                        <p>The Barangay Cut-Cot is located at ------.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-group"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/brgy/cutcot.png">
                                            <h5>Cut-Cot</h5>
                                            <p>Chairman</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text-justify">
                                        <p>The Barangay Dampol 1st is located at ------.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-group"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/brgy/dampol 1st.png">
                                            <h5>Dampol 1st</h5>
                                            <p>Chairman</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text-justify">
                                        <p>The Barangay Dampol 2nd A is located at ------.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-group"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/brgy/dampol 2nd A.png">
                                            <h5>Dampol 2nd A</h5>
                                            <p>Chairman</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text-justify">
                                        <p>The Barangay Dampol 2nd B is located at ------.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-group"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/brgy/dampol 2nd B.png">
                                            <h5>Dampol 2nd B</h5>
                                            <p>Chairman</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text-justify">
                                        <p>The Barangay Dulong Malabon is located at ------.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-group"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/brgy/dulong malabon.png">
                                            <h5>Dulong Malabon</h5>
                                            <p>Chairman</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text-justify">
                                        <p>The Barangay Inaon is located at ------.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-group"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/brgy/inaon.png">
                                            <h5>Inaon</h5>
                                            <p>Chairman</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text-justify">
                                        <p>The Barangay Longos is located at ------.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-group"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/brgy/Longos.png">
                                            <h5>Longos</h5>
                                            <p>Chairman</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text-justify">
                                        <p>The Barangay Penabatan is located at ------.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-group"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/brgy/Penabatan.png">
                                            <h5>Penabatan</h5>
                                            <p>Chairman</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text-justify">
                                        <p>The Barangay Peregrina is located at ------.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-group"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/brgy/Peregrina.png">
                                            <h5>Peregrina</h5>
                                            <p>Chairman</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text-justify">
                                        <p>The Barangay Poblacion is located at ------.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-group"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/brgy/Poblacion.png">
                                            <h5>Poblacion</h5>
                                            <p>Chairman</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text-justify">
                                        <p>The Barangay Sto. Cristo is located at ------.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-group"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/brgy/sto.cristo.png">
                                            <h5>Sto. Cristo</h5>
                                            <p>Chairman</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text-justify">
                                        <p>The Barangay Taal is located at ------.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-group"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/brgy/Taal.png">
                                            <h5>Taal</h5>
                                            <p>Chairman</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text-justify">
                                        <p>The Barangay Tabon is located at ------.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-group"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/brgy/Tabon.png">
                                            <h5>Tabon</h5>
                                            <p>Chairman</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text-justify">
                                        <p>The Barangay Tibag is located at ------.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-group"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/brgy/Tibag.png">
                                            <h5>Tibag</h5>
                                            <p>Chairman</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text-justify">
                                        <p>The Barangay Tinejero is located at ------.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-group"></i></div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/brgy/Tinejero.png">
                                            <h5>Tinejero</h5>
                                            <p>Chairman</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul><!-- /.owl-carousel -->
                    </div> <!-- /.12 -->
                </div> <!-- /.container -->

            </div><!-- /.section -->

            <!-- ************** END *********** ABOUT US *********************************** -->

            <!-- ****************************** CONTACT ************************************ -->

            <div class="section" id="section4" >
                <div class="container">
                    <div class="col-md-8 col-md-offset-2">


                        <h2 class="title" data-animate="fadeInDown">Contact us</h2>

                        <p class="lead margin-bottom" data-animate="fadeInUp">For comments, and suggestion please contact us at the following.</p>


                        <ul class="list-unstyled text-large text-thin" data-animate="fadeInUp">
                            <li><strong>E-mail:</strong> dipaaapi8@gmail.com</li>
                            <li><strong>Phone:</strong> 09056606675</li>
                        </ul>

                    </div>
                    <!-- /.12 -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.section -->

            <!-- ************** END *********** CONTACT ************************************ -->

            <!-- ****************************** FOOTER ************************************* -->

            <div class="section" id="footer" style="background: black; padding: 5px; min-height: 100px; display: block;">
                <div class="container">

                    <div class="row">
                        <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul style="background: black; padding: 5px; min-height: 100px; display: inline-block;" class="breadcrumb" align="center">

                            <center>
                                <li data-animate="fadeInRight"><a href="https://facebook.com/CBMSPhilippines"><i class="fa fa-facebook"></i> Facebook</a></li>
                                <li data-animate="fadeInLeft"><a href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
                                <li data-animate="fadeInRight"><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
                                <li data-animate="fadeInLeft"><a href="#"><i class="fa fa-youtube"></i> Youtube</a></li>
                            </center>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ************** END *********** FOOTER ************************************* -->

        </div>

        <!-- js base -->
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>


        <!-- waypoints for scroll spy -->
        <script src="js/waypoints.min.js"></script>

        <!-- owl carousel -->
        <script src="js/owl.carousel.min.js"></script>

        <!-- jQuery scroll to -->
        <script src="js/jquery.scrollTo.min.js"></script>

        <!-- main js file -->

        <script src="js/front.js"></script>

</body>
</html>