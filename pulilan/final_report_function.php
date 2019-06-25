<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("location: login.php");
}
// count of brgy population
    $conn = mysqli_connect("localhost", "root", "", "pulilan");

    $querybrgypopulation = mysqli_query($conn, "SELECT count(*) FROM mainuser_acc where type = 'official' AND YEAR(date_created) = '$year'" );
    $approve_count = mysqli_fetch_array($querybrgypopulation);
    $totalCount = array_shift($approve_count);

    $querymalevoters = mysqli_query($conn, "SELECT count(*) FROM mainuser_acc WHERE YEAR(date_created) = '$year' AND gender = 'Male' AND registered_voter = 'Yes' AND type = 'resident'");
    $resultmalevoters = mysqli_fetch_array($querymalevoters); 
    $totalmalerep1 = array_shift($resultmalevoters);

    $queryfemalevoters = mysqli_query($conn, "SELECT count(*) FROM mainuser_acc WHERE YEAR(date_created) = '$year' AND gender = 'Female' AND registered_voter = 'Yes' AND type = 'resident'");
    $resultfemalevoters = mysqli_fetch_array($queryfemalevoters);
    $totalfemalerep1 = array_shift($resultfemalevoters);

    $queryhousehold = mysqli_query($conn, "SELECT SUM(no_household) FROM resident_q WHERE YEAR(date) = '$year'");
    $resulthousehold = mysqli_fetch_array($queryhousehold);
    $totalhouseholdrep1 = array_shift($resulthousehold);

    $queryfamilies = mysqli_query($conn, "SELECT SUM(no_fam_house) FROM  resident_q WHERE YEAR(date) = '$year'");
    $resultfamilies = mysqli_fetch_array($queryfamilies);
    $totalfamiliesrep1 = array_shift($resultfamilies);

    $queryresidentpopulation = mysqli_query($conn, "SELECT count(*) FROM mainuser_acc WHERE YEAR(date_created) = '$year' AND type = 'resident'");
    $result = mysqli_fetch_array($queryresidentpopulation);
    $residentcount = array_shift($result);

    $queryresidentmalepopulation = mysqli_query($conn, "SELECT count(*) FROM mainuser_acc where gender = 'Male' AND YEAR(date_created) = '$year' AND type = 'resident'");
    $maleresult = mysqli_fetch_array($queryresidentmalepopulation);
    $residentmalecount = array_shift($maleresult);

    $queryresidentfemalepopulation = mysqli_query($conn, "SELECT count(*) FROM mainuser_acc where gender = 'Female' AND YEAR(date_created) = '$year' AND type = 'resident'");
    $femaleresult = mysqli_fetch_array($queryresidentfemalepopulation);
    $residentfemalecount = array_shift($femaleresult);

    $civilrep1 = mysqli_query($conn, "SELECT count(*) FROM resident_q where civil_stat = 'Single' AND YEAR(date) = '$year'");
    $civilresult1 = mysqli_fetch_array($civilrep1);
    $totalcivilrep1 = array_shift($civilresult1);

    $civilrep2 = mysqli_query($conn, "SELECT count(*) FROM resident_q where civil_stat = 'Legally Married' AND YEAR(date) = '$year'");
    $civilresult2 = mysqli_fetch_array($civilrep2);
    $totalcivilrep2 = array_shift($civilresult2);

    $civilrep3 = mysqli_query($conn, "SELECT count(*) FROM resident_q where civil_stat = 'Widowed' AND YEAR(date) = '$year'");
    $civilresult3 = mysqli_fetch_array($civilrep3);
    $totalcivilrep3 = array_shift($civilresult3);

    $civilrep4 = mysqli_query($conn, "SELECT count(*) FROM resident_q where civil_stat = 'Divorced/Separated' AND YEAR(date) = '$year'");
    $civilresult4 = mysqli_fetch_array($civilrep4);
    $totalcivilrep4 = array_shift($civilresult4);

    $civilrep5 = mysqli_query($conn, "SELECT count(*) FROM resident_q where civil_stat = 'Common Law/Live in' AND YEAR(date) = '$year'");
    $civilresult5 = mysqli_fetch_array($civilrep5);
    $totalcivilrep5 = array_shift($civilresult5);

    $religionrep1 = mysqli_query($conn, "SELECT count(*) FROM resident_q where religion = 'Catholic' AND YEAR(date) = '$year'");
    $religionresult1 = mysqli_fetch_array($religionrep1);
    $totalreligionrep1 = array_shift($religionresult1);

    $religionrep2 = mysqli_query($conn, "SELECT count(*) FROM resident_q where religion = 'Protestant' AND YEAR(date) = '$year'");
    $religionresult2 = mysqli_fetch_array($religionrep2);
    $totalreligionrep2 = array_shift($religionresult2);

    $religionrep3 = mysqli_query($conn, "SELECT count(*) FROM resident_q where religion = 'Iglesia ni Kristo' AND YEAR(date) = '$year'");
    $religionresult3 = mysqli_fetch_array($religionrep3);
    $totalreligionrep3 = array_shift($religionresult3);

    $religionrep4 = mysqli_query($conn, "SELECT count(*) FROM resident_q where religion = 'Aglipay' AND YEAR(date) = '$year'");
    $religionresult4 = mysqli_fetch_array($religionrep4);
    $totalreligionrep4 = array_shift($religionresult4);

    $religionrep5 = mysqli_query($conn, "SELECT count(*) FROM resident_q where religion = 'Islam' AND YEAR(date) = '$year'");
    $religionresult5 = mysqli_fetch_array($religionrep5);
    $totalreligionrep5 = array_shift($religionresult5);

    $religionrep6 = mysqli_query($conn, "SELECT count(*) FROM resident_q where religion = 'Evangelicals' AND YEAR(date) = '$year'");
    $religionresult6 = mysqli_fetch_array($religionrep6);
    $totalreligionrep6 = array_shift($religionresult6);

    $religionrep7 = mysqli_query($conn, "SELECT count(*) FROM resident_q where religion = 'Seventh-day Adventist' AND YEAR(date) = '$year'");
    $religionresult7 = mysqli_fetch_array($religionrep7);
    $totalreligionrep7 = array_shift($religionresult7);

    $religionrep8 = mysqli_query($conn, "SELECT count(*) FROM resident_q where religion = 'Seventh-day Adventist' AND YEAR(date) = '$year'");
    $religionresult8 = mysqli_fetch_array($religionrep8);
    $totalreligionrep8 = array_shift($religionresult8);

    $religionrep9 = mysqli_query($conn, "SELECT count(*) FROM resident_q where religion = 'Jesus is Lord Church' AND YEAR(date) = '$year'");
    $religionresult9 = mysqli_fetch_array($religionrep9);
    $totalreligionrep9 = array_shift($religionresult9);
    
    $religionrep10 = mysqli_query($conn, "SELECT count(*) FROM resident_q where religion = 'Buddhist' AND YEAR(date) = '$year'");
    $religionresult10 = mysqli_fetch_array($religionrep10);
    $totalreligionrep10 = array_shift($religionresult10);

    $housingrep1 = mysqli_query($conn, "SELECT count(*) FROM resident_q where stat_house = 'Own House and Lot' AND YEAR(date) = '$year'");
    $housingresult1 = mysqli_fetch_array($housingrep1);
    $totalhousingrep1 = array_shift($housingresult1);

    $housingrep2 = mysqli_query($conn, "SELECT count(*) FROM resident_q where stat_house = 'Rent Room and Lot included' AND YEAR(date) = '$year'");
    $housingresult2 = mysqli_fetch_array($housingrep2);
    $totalhousingrep2 = array_shift($housingresult2);

    $housingrep3 = mysqli_query($conn, "SELECT count(*) FROM resident_q where stat_house = 'Own House Rent Lot with owner consent' AND YEAR(date) = '$year'");
    $housingresult3 = mysqli_fetch_array($housingrep3);
    $totalhousingrep3 = array_shift($housingresult3);

    $housingrep4 = mysqli_query($conn, "SELECT count(*) FROM resident_q where stat_house = 'Own House Rent Lot without owner consent' AND YEAR(date) = '$year'");
    $housingresult4 = mysqli_fetch_array($housingrep4);
    $totalhousingrep4 = array_shift($housingresult4);

    $housingrep5 = mysqli_query($conn, "SELECT count(*) FROM resident_q where stat_house = 'Rent House and Lot with owner consent' AND YEAR(date) = '$year'");
    $housingresult5 = mysqli_fetch_array($housingrep5);
    $totalhousingrep5 = array_shift($housingresult5);

    $housingrep6 = mysqli_query($conn, "SELECT count(*) FROM resident_q where stat_house = 'Rent House and Lot without owner consent' AND YEAR(date) = '$year'");
    $housingresult6 = mysqli_fetch_array($housingrep6);
    $totalhousingrep6 = array_shift($housingresult6);

    $educationalrep1 = mysqli_query($conn, "SELECT count(*) FROM resident_q where educ_stat = 'Day Care' AND YEAR(date) = '$year'");
    $educationalresult1 = mysqli_fetch_array($educationalrep1);
    $totaleducationalrep1 = array_shift($educationalresult1);

    $educationalrep2 = mysqli_query($conn, "SELECT count(*) FROM resident_q where educ_stat = 'Preparatory' AND YEAR(date) = '$year'");
    $educationalresult2 = mysqli_fetch_array($educationalrep2);
    $totaleducationalrep2 = array_shift($educationalresult2);

    $educationalrep3 = mysqli_query($conn, "SELECT count(*) FROM resident_q where educ_stat = 'Elementary Graduate' AND YEAR(date) = '$year'");
    $educationalresult3 = mysqli_fetch_array($educationalrep3);
    $totaleducationalrep3 = array_shift($educationalresult3);

    $educationalrep4 = mysqli_query($conn, "SELECT count(*) FROM resident_q where educ_stat = 'Elementary Undergrad' AND YEAR(date) = '$year'");
    $educationalresult4 = mysqli_fetch_array($educationalrep4);
    $totaleducationalrep4 = array_shift($educationalresult4);

    $educationalrep5 = mysqli_query($conn, "SELECT count(*) FROM resident_q where educ_stat = 'Secondary Graduate' AND YEAR(date) = '$year'");
    $educationalresult5 = mysqli_fetch_array($educationalrep5);
    $totaleducationalrep5 = array_shift($educationalresult5);

    $educationalrep6 = mysqli_query($conn, "SELECT count(*) FROM resident_q where educ_stat = 'Secondary Undergrad' AND YEAR(date) = '$year'");
    $educationalresult6 = mysqli_fetch_array($educationalrep6);
    $totaleducationalrep6 = array_shift($educationalresult6);

    $educationalrep7 = mysqli_query($conn, "SELECT count(*) FROM resident_q where educ_stat = 'Vocational Graduate' AND YEAR(date) = '$year'");
    $educationalresult7 = mysqli_fetch_array($educationalrep7);
    $totaleducationalrep7 = array_shift($educationalresult7);

    $educationalrep8 = mysqli_query($conn, "SELECT count(*) FROM resident_q where educ_stat = 'College Undergrad' AND YEAR(date) = '$year'");
    $educationalresult8 = mysqli_fetch_array($educationalrep8);
    $totaleducationalrep8 = array_shift($educationalresult8);

    $educationalrep9 = mysqli_query($conn, "SELECT count(*) FROM resident_q where educ_stat = 'College Graduate' AND YEAR(date) = '$year'");
    $educationalresult9 = mysqli_fetch_array($educationalrep9);
    $totaleducationalrep9 = array_shift($educationalresult9);

    $educationalrep10 = mysqli_query($conn, "SELECT count(*) FROM resident_q where educ_stat = 'None' AND YEAR(date) = '$year'");
    $educationalresult10 = mysqli_fetch_array($educationalrep10);
    $totaleducationalrep10 = array_shift($educationalresult10);

    $healthrep1 = mysqli_query($conn, "SELECT sum(male_health_worker) FROM brgy_q WHERE YEAR(date) = '$year'");
    $healthresult1 = mysqli_fetch_array($healthrep1);
    $totalhealthrep1 = array_shift($healthresult1);

    $healthrep2 = mysqli_query($conn, "SELECT sum(female_health_worker) FROM brgy_q WHERE YEAR(date) = '$year'");
    $healthresult2 = mysqli_fetch_array($healthrep2);
    $totalhealthrep2 = array_shift($healthresult2);

    $nutritionrep1 = mysqli_query($conn, "SELECT sum(male_nutrition_scholar) FROM brgy_q WHERE YEAR(date) = '$year'");
    $nutritionresult1 = mysqli_fetch_array($nutritionrep1);
    $totalnutritionrep1 = array_shift($nutritionresult1);

    $nutritionrep2 = mysqli_query($conn, "SELECT sum(female_nutrition_scholar) FROM brgy_q WHERE YEAR(date) = '$year'");
    $nutritionresult2 = mysqli_fetch_array($nutritionrep2);
    $totalnutritionrep2 = array_shift($nutritionresult2);

    $purokrep1 = mysqli_query($conn, "SELECT sum(male_purok_leaders) FROM brgy_q WHERE YEAR(date) = '$year'");
    $purokresult1 = mysqli_fetch_array($purokrep1);
    $totalpurokrep1 = array_shift($purokresult1);

    $purokrep2 = mysqli_query($conn, "SELECT sum(female_purok_leaders) FROM brgy_q WHERE YEAR(date) = '$year'");
    $purokresult2 = mysqli_fetch_array($purokrep2);
    $totalpurokrep2 = array_shift($purokresult2);

    $librarianrep1 = mysqli_query($conn, "SELECT sum(male_librarian) FROM brgy_q WHERE YEAR(date) = '$year'");
    $librarianresult1 = mysqli_fetch_array($librarianrep1);
    $totallibrarianrep1 = array_shift($librarianresult1);

    $librarianrep2 = mysqli_query($conn, "SELECT sum(female_librarian) FROM brgy_q WHERE YEAR(date) = '$year'");
    $librarianresult2 = mysqli_fetch_array($librarianrep2);
    $totallibrarianrep2 = array_shift($librarianresult2);

    $daycarerep1 = mysqli_query($conn, "SELECT sum(male_day_care_worker) FROM brgy_q WHERE YEAR(date) = '$year'");
    $daycareresult1 = mysqli_fetch_array($daycarerep1);
    $totaldaycarerep1 = array_shift($daycareresult1);

    $daycarerep2 = mysqli_query($conn, "SELECT sum(female_day_care_worker) FROM brgy_q WHERE YEAR(date) = '$year'");
    $daycareresult2 = mysqli_fetch_array($daycarerep2);
    $totaldaycarerep2 = array_shift($daycareresult2);

    $utilityrep1 = mysqli_query($conn, "SELECT sum(male_utility_worker) FROM brgy_q WHERE YEAR(date) = '$year'");
    $utilitysult1 = mysqli_fetch_array($utilityrep1);
    $totalutilityrep1 = array_shift($utilitysult1);

    $utilityrep2 = mysqli_query($conn, "SELECT sum(female_utility_worker) FROM brgy_q WHERE YEAR(date) = '$year'");
    $utilityresult2 = mysqli_fetch_array($utilityrep2);
    $totalutilityrep2 = array_shift($utilityresult2);

    $bhealth = mysqli_query($conn, "SELECT sum(brgy_health_center) FROM brgy_q where type = 'official' AND YEAR(date) = '$year'" );
    $bhealthresult = mysqli_fetch_array($bhealth);
    $totalbhealth = array_shift($bhealthresult);

    $hospital = mysqli_query($conn, "SELECT sum(hospital) FROM brgy_q where type = 'official' AND YEAR(date) = '$year'" );
    $hospitalresult = mysqli_fetch_array($hospital);
    $totalhospital = array_shift($hospitalresult);

    $m_clinic = mysqli_query($conn, "SELECT sum(maternity_clinic) FROM brgy_q where type = 'official' AND YEAR(date) = '$year'" );
    $mclinicresult = mysqli_fetch_array($m_clinic);
    $totalmclinic = array_shift($mclinicresult);

    $c_clinic = mysqli_query($conn, "SELECT sum(child_clinic) FROM brgy_q where type = 'official' AND YEAR(date) = '$year'" );
    $cclinicresult = mysqli_fetch_array($c_clinic);
    $totalcclinic = array_shift($cclinicresult);

    $bbrgy = mysqli_query($conn, "SELECT sum(botika_brgy) FROM brgy_q where type = 'official' AND YEAR(date) = '$year'" );
    $bbrgyresult = mysqli_fetch_array($bbrgy);
    $totalbbrgy = array_shift($bbrgyresult);

    $dcenter = mysqli_query($conn, "SELECT sum(brgy_day_care_center) FROM brgy_q where type = 'official' AND YEAR(date) = '$year'" );
    $dcenterresult = mysqli_fetch_array($dcenter);
    $totaldcenter = array_shift($dcenterresult);

    $preschool = mysqli_query($conn, "SELECT sum(preschool) FROM brgy_q where type = 'official' AND YEAR(date) = '$year'" );
    $preschoolresult = mysqli_fetch_array($preschool);
    $totalpreschool = array_shift($preschoolresult);

    $elementary = mysqli_query($conn, "SELECT sum(elementary) FROM brgy_q where type = 'official' AND YEAR(date) = '$year'" );
    $elementaryresult = mysqli_fetch_array($elementary);
    $totalelem = array_shift($elementaryresult);

    $secondary = mysqli_query($conn, "SELECT sum(secondary) FROM brgy_q where type = 'official' AND YEAR(date) = '$year'" );
    $secondaryresult = mysqli_fetch_array($secondary);
    $totalsecondary = array_shift($secondaryresult);

    $vocational = mysqli_query($conn, "SELECT sum(vocational) FROM brgy_q where type = 'official' AND YEAR(date) = '$year'" );
    $vocationalresult = mysqli_fetch_array($vocational);
    $totalvocational = array_shift($vocationalresult);

    $college_university = mysqli_query($conn, "SELECT sum(college_university) FROM brgy_q where type = 'official' AND YEAR(date) = '$year'" );
    $colunresult = mysqli_fetch_array($college_university);
    $totalcolun = array_shift($colunresult);

    $post_office = mysqli_query($conn, "SELECT sum(post_office) FROM brgy_q where type = 'official' AND YEAR(date) = '$year'" );
    $pofficeresult = mysqli_fetch_array($post_office);
    $totalpoffice = array_shift($pofficeresult);

    $market = mysqli_query($conn, "SELECT sum(market) FROM brgy_q where type = 'official' AND YEAR(date) = '$year'" );
    $marketresult = mysqli_fetch_array($market);
    $totalmarket = array_shift($marketresult);

    $ricemill = mysqli_query($conn, "SELECT sum(ricemill) FROM brgy_q where type = 'official' AND YEAR(date) = '$year'" );
    $rmillresult = mysqli_fetch_array($ricemill);
    $totalrmill = array_shift($rmillresult);

    $cornmill = mysqli_query($conn, "SELECT sum(cornmill) FROM brgy_q where type = 'official' AND YEAR(date) = '$year'" );
    $cmillresult = mysqli_fetch_array($cornmill);
    $totalcmill = array_shift($cmillresult);

    $feedmill = mysqli_query($conn, "SELECT sum(feedmill) FROM brgy_q where type = 'official' AND YEAR(date) = '$year'" );
    $fmillresult = mysqli_fetch_array($feedmill);
    $totalfmill = array_shift($fmillresult);

    $amarket = mysqli_query($conn, "SELECT sum(agricultural_market) FROM brgy_q where type = 'official' AND YEAR(date) = '$year'" );
    $amarketresult = mysqli_fetch_array($amarket);
    $totalamarket = array_shift($amarketresult);

    $fdealer = mysqli_query($conn, "SELECT sum(fertilizer) FROM brgy_q where type = 'official' AND YEAR(date) = '$year'" );
    $fdealerresult = mysqli_fetch_array($fdealer);
    $totalfdealer = array_shift($fdealerresult);

    $pdealer = mysqli_query($conn, "SELECT sum(pesticide) FROM brgy_q where type = 'official' AND YEAR(date) = '$year'" );
    $pdealerresult = mysqli_fetch_array($pdealer);
    $totalpdealer = array_shift($pdealerresult);

    $sdealer = mysqli_query($conn, "SELECT sum(seeds) FROM brgy_q where type = 'official' AND YEAR(date) = '$year'" );
    $sdealerresult = mysqli_fetch_array($sdealer);
    $totalsdealer = array_shift($sdealerresult);

    $fddealer = mysqli_query($conn, "SELECT sum(feeds) FROM brgy_q where type = 'official' AND YEAR(date) = '$year'" );
    $fddealerresult = mysqli_fetch_array($fddealer);
    $totalfddealer = array_shift($fddealerresult);


    $alldealer = $totalbhealth + $totalhospital + $totalmclinic + $totalcclinic + $totalbbrgy + $totaldcenter + $totalpreschool + $totalelem + $totalsecondary + $totalcolun + $totalvocational + $totalpoffice + $totalmarket + $totalrmill + $totalcmill + $totalfmill + $totalamarket + $totalfdealer + $totalpdealer + $totalsdealer + $totalfddealer;


?>