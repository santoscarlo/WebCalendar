<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("location: login.php");
}
// count of brgy population
    $conn = mysqli_connect("localhost", "root", "", "pulilan");
    
    $querybrgypopulation = mysqli_query($conn, "SELECT count(*) FROM mainuser_acc where type = 'official'" );
    $approve_count = mysqli_fetch_array($querybrgypopulation);
    $totalCount = array_shift($approve_count);

    $querymalevoters = mysqli_query($conn, "SELECT count(*) FROM resident_q where registered_voters = 'Yes' and gender = 'Male'");
    $resultmalevoters = mysqli_fetch_array($querymalevoters); 
    $totalmalerep1 = array_shift($resultmalevoters);

    $queryfemalevoters = mysqli_query($conn, "SELECT count(*) FROM resident_q where registered_voters = 'Yes' and gender = 'Female'");
    $resultfemalevoters = mysqli_fetch_array($queryfemalevoters);
    $totalfemalerep1 = array_shift($resultfemalevoters);

    $queryhousehold = mysqli_query($conn, "SELECT SUM(no_household) FROM resident_q ");
    $resulthousehold = mysqli_fetch_array($queryhousehold);
    $totalhouseholdrep1 = array_shift($resulthousehold);

    $queryfamilies = mysqli_query($conn, "SELECT SUM(no_fam_house) FROM resident_q");
    $resultfamilies = mysqli_fetch_array($queryfamilies);
    $totalfamiliesrep1 = array_shift($resultfamilies);

    $queryresidentpopulation = mysqli_query($conn, "SELECT count(*) FROM resident_q");
    $result = mysqli_fetch_array($queryresidentpopulation);
    $residentcount = array_shift($result);

    $queryresidentmalepopulation = mysqli_query($conn, "SELECT count(*) FROM resident_q where gender = 'Male' || 'male'");
    $maleresult = mysqli_fetch_array($queryresidentmalepopulation);
    $residentmalecount = array_shift($maleresult);

    $queryresidentfemalepopulation = mysqli_query($conn, "SELECT count(*) FROM resident_q where gender = 'Female' || 'female'");
    $femaleresult = mysqli_fetch_array($queryresidentfemalepopulation);
    $residentfemalecount = array_shift($femaleresult);

    $civilrep1 = mysqli_query($conn, "SELECT count(*) FROM resident_q where civil_stat = 'Single'");
    $civilresult1 = mysqli_fetch_array($civilrep1);
    $totalcivilrep1 = array_shift($civilresult1);

    $civilrep2 = mysqli_query($conn, "SELECT count(*) FROM resident_q where civil_stat = 'Legally Married'");
    $civilresult2 = mysqli_fetch_array($civilrep2);
    $totalcivilrep2 = array_shift($civilresult2);

    $civilrep3 = mysqli_query($conn, "SELECT count(*) FROM resident_q where civil_stat = 'Widowed'");
    $civilresult3 = mysqli_fetch_array($civilrep3);
    $totalcivilrep3 = array_shift($civilresult3);

    $civilrep4 = mysqli_query($conn, "SELECT count(*) FROM resident_q where civil_stat = 'Divorced/Separated'");
    $civilresult4 = mysqli_fetch_array($civilrep4);
    $totalcivilrep4 = array_shift($civilresult4);

    $civilrep5 = mysqli_query($conn, "SELECT count(*) FROM resident_q where civil_stat = 'Common Law/Live in'");
    $civilresult5 = mysqli_fetch_array($civilrep5);
    $totalcivilrep5 = array_shift($civilresult5);

    $religionrep1 = mysqli_query($conn, "SELECT count(*) FROM resident_q where religion = 'Catholic'");
    $religionresult1 = mysqli_fetch_array($religionrep1);
    $totalreligionrep1 = array_shift($religionresult1);

    $religionrep2 = mysqli_query($conn, "SELECT count(*) FROM resident_q where religion = 'Protestant'");
    $religionresult2 = mysqli_fetch_array($religionrep2);
    $totalreligionrep2 = array_shift($religionresult2);

    $religionrep3 = mysqli_query($conn, "SELECT count(*) FROM resident_q where religion = 'Iglesia ni Kristo'");
    $religionresult3 = mysqli_fetch_array($religionrep3);
    $totalreligionrep3 = array_shift($religionresult3);

    $religionrep4 = mysqli_query($conn, "SELECT count(*) FROM resident_q where religion = 'Aglipay'");
    $religionresult4 = mysqli_fetch_array($religionrep4);
    $totalreligionrep4 = array_shift($religionresult4);

    $religionrep5 = mysqli_query($conn, "SELECT count(*) FROM resident_q where religion = 'Islam'");
    $religionresult5 = mysqli_fetch_array($religionrep5);
    $totalreligionrep5 = array_shift($religionresult5);

    $religionrep6 = mysqli_query($conn, "SELECT count(*) FROM resident_q where religion = 'Evangelicals'");
    $religionresult6 = mysqli_fetch_array($religionrep6);
    $totalreligionrep6 = array_shift($religionresult6);

    $religionrep7 = mysqli_query($conn, "SELECT count(*) FROM resident_q where religion = 'Seventh-day Adventist'");
    $religionresult7 = mysqli_fetch_array($religionrep7);
    $totalreligionrep7 = array_shift($religionresult7);

    $religionrep8 = mysqli_query($conn, "SELECT count(*) FROM resident_q where religion = 'Seventh-day Adventist'");
    $religionresult8 = mysqli_fetch_array($religionrep8);
    $totalreligionrep8 = array_shift($religionresult8);

    $religionrep9 = mysqli_query($conn, "SELECT count(*) FROM resident_q where religion = 'Jesus is Lord Church'");
    $religionresult9 = mysqli_fetch_array($religionrep9);
    $totalreligionrep9 = array_shift($religionresult9);
    
    $religionrep10 = mysqli_query($conn, "SELECT count(*) FROM resident_q where religion = 'Jesus is Lord Church'");
    $religionresult10 = mysqli_fetch_array($religionrep10);
    $totalreligionrep10 = array_shift($religionresult10);

    $housingrep1 = mysqli_query($conn, "SELECT count(*) FROM resident_q where stat_house = 'Own House and Lot'");
    $housingresult1 = mysqli_fetch_array($housingrep1);
    $totalhousingrep1 = array_shift($housingresult1);

    $housingrep2 = mysqli_query($conn, "SELECT count(*) FROM resident_q where stat_house = 'Rent Room and Lot included'");
    $housingresult2 = mysqli_fetch_array($housingrep2);
    $totalhousingrep2 = array_shift($housingresult2);

    $housingrep3 = mysqli_query($conn, "SELECT count(*) FROM resident_q where stat_house = 'Own House Rent Lot with owner consent'");
    $housingresult3 = mysqli_fetch_array($housingrep3);
    $totalhousingrep3 = array_shift($housingresult3);

    $housingrep4 = mysqli_query($conn, "SELECT count(*) FROM resident_q where stat_house = 'Own House Rent Lot without owner consent'");
    $housingresult4 = mysqli_fetch_array($housingrep4);
    $totalhousingrep4 = array_shift($housingresult4);

    $housingrep5 = mysqli_query($conn, "SELECT count(*) FROM resident_q where stat_house = 'Rent House and Lot with owner consent'");
    $housingresult5 = mysqli_fetch_array($housingrep5);
    $totalhousingrep5 = array_shift($housingresult5);

    $housingrep6 = mysqli_query($conn, "SELECT count(*) FROM resident_q where stat_house = 'Rent House and Lot without owner consent'");
    $housingresult6 = mysqli_fetch_array($housingrep6);
    $totalhousingrep6 = array_shift($housingresult6);

    $educationalrep1 = mysqli_query($conn, "SELECT count(*) FROM resident_q where educ_stat = 'Day Care'");
    $educationalresult1 = mysqli_fetch_array($educationalrep1);
    $totaleducationalrep1 = array_shift($educationalresult1);

    $educationalrep2 = mysqli_query($conn, "SELECT count(*) FROM resident_q where educ_stat = 'Preparatory'");
    $educationalresult2 = mysqli_fetch_array($educationalrep2);
    $totaleducationalrep2 = array_shift($educationalresult2);

    $educationalrep3 = mysqli_query($conn, "SELECT count(*) FROM resident_q where educ_stat = 'Elementary Graduate'");
    $educationalresult3 = mysqli_fetch_array($educationalrep3);
    $totaleducationalrep3 = array_shift($educationalresult3);

    $educationalrep4 = mysqli_query($conn, "SELECT count(*) FROM resident_q where educ_stat = 'Elementary Undergrad'");
    $educationalresult4 = mysqli_fetch_array($educationalrep4);
    $totaleducationalrep4 = array_shift($educationalresult4);

    $educationalrep5 = mysqli_query($conn, "SELECT count(*) FROM resident_q where educ_stat = 'Secondary Graduate'");
    $educationalresult5 = mysqli_fetch_array($educationalrep5);
    $totaleducationalrep5 = array_shift($educationalresult5);

    $educationalrep6 = mysqli_query($conn, "SELECT count(*) FROM resident_q where educ_stat = 'Secondary Undergrad'");
    $educationalresult6 = mysqli_fetch_array($educationalrep6);
    $totaleducationalrep6 = array_shift($educationalresult6);

    $educationalrep7 = mysqli_query($conn, "SELECT count(*) FROM resident_q where educ_stat = 'Vocational Graduate'");
    $educationalresult7 = mysqli_fetch_array($educationalrep7);
    $totaleducationalrep7 = array_shift($educationalresult7);

    $educationalrep8 = mysqli_query($conn, "SELECT count(*) FROM resident_q where educ_stat = 'College Undergrad'");
    $educationalresult8 = mysqli_fetch_array($educationalrep8);
    $totaleducationalrep8 = array_shift($educationalresult8);

    $educationalrep9 = mysqli_query($conn, "SELECT count(*) FROM resident_q where educ_stat = 'College Graduate'");
    $educationalresult9 = mysqli_fetch_array($educationalrep9);
    $totaleducationalrep9 = array_shift($educationalresult9);

    $educationalrep10 = mysqli_query($conn, "SELECT count(*) FROM resident_q where educ_stat = 'None'");
    $educationalresult10 = mysqli_fetch_array($educationalrep10);
    $totaleducationalrep10 = array_shift($educationalresult10);
?>