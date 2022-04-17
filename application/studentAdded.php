<?php
if (isset($_POST['submit'])) {
    session_start();
    require_once('mysql_connect.php');

    //first form info
    $program = $_SESSION['program'];
    $secondary_program = $_SESSION['secondary_program'];
    $year = $_SESSION['year'];

    //second form info
    $fname = $_SESSION['first_name'];
    $lname = $_SESSION['last_name'];
    $gender = $_SESSION['gender'];
    $birthday = $_SESSION['birthday'];
    $place_birth = $_SESSION['place_birth'];
    $phone = $_SESSION['phone'];
    $email = $_SESSION['email'];
    $passport = $_SESSION['passport'];

    //third form info
    $father = $_SESSION['father_name'];
    $fphone = $_SESSION['father_phone'];
    $fprofession = $_SESSION['father_profession'];
    $fwork = $_SESSION['father_work'];
    $mother = $_SESSION['mother_name'];
    $mphone = $_SESSION['mother_phone'];
    $mprofession = $_SESSION['mother_profession'];
    $mwork = $_SESSION['mother_work'];

    //fourth form info
    $graduated_country = $_SESSION['graduated_country'];
    $school = $_SESSION['school'];
    $school_average = $_SESSION['school_average'];
    $certification = $_SESSION['certification'];

    //fifth form info
    $city = $_POST['city'];
    $address = $_POST['address'];

    $query = "INSERT INTO student (Primary_program, Secondary_program, Year, Name, Surname, Gender, Birthday, place_birth, Mobile, Email, Passport, Father_Name, 
    father_phone, father_profession, father_work, mother_name, mother_phone, mother_profession, mother_work, graduated_country, school, school_average, certification, City, Address)
            VALUES ('$program', '$secondary_program' ,'$year','$fname','$lname','$gender','$birthday', '$place_birth' ,'$phone','$email','$passport','$father',
            '$fphone', '$fprofession', '$fwork', '$mother', '$mphone', '$mprofession', '$mwork', '$graduated_country', '$school', '$school_average', '$certification', '$city', '$address')";
    $response = mysqli_query($dbc, $query);
    if ($response)
        header("Location:success.php");
    else
        echo mysqli_error($dbc);
}
