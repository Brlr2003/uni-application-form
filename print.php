<html>
<title>Print</title>
<style>
    img {
        width: 100px;
        height: 50px;
        float: right;
    }
</style>

<body>
    <img src="wbu.png" alt="university logo">
    <br><br>
    <?php
    require('mysql_connect.php');
    $id = $_GET['id'];


    $query = "SELECT id, Primary_program, Secondary_program, Year, Name, Surname, Gender, Birthday, place_birth, Mobile, Email, Passport,
 Father_Name, father_phone, father_profession, father_work, mother_name, mother_phone, mother_profession, mother_work, graduated_country, school, school_average, certification, City, Address FROM student WHERE id='$id'";
    $response = @mysqli_query($dbc, $query);


    while ($row = mysqli_fetch_array($response)) {
        echo '<b>Primary Program:</b> ' . $row['Primary_program'] . '<br>' .
            '<b>Secondary Program:</b> ' . $row['Secondary_program'] . '<br>' .
            '<b>Academic Year:</b> ' . $row['Year'] . '<br><hr>' .
            '<b>First Name:</b> ' . $row['Name'] . '<br>' .
            '<b>Last Name:</b> ' . $row['Surname'] . '<br>' .
            '<b>Gender:</b> ' . $row['Gender'] . '<br>' .
            '<b>Birthday:</b> ' . $row['Birthday'] . '<br>' .
            '<b>Place of Birth:</b> ' . $row['place_birth'] . '<br>' .
            '<b>Phone Number:</b> ' . $row['Mobile'] . '<br>' .
            '<b>Email:</b> ' . $row['Email'] . '<br>' .
            '<b>Passport/ID Number:</b> ' . $row['Passport'] . '<br><hr>' .
            '<b>Father Name:</b> ' . $row['Father_Name'] . '<br>' .
            '<b>Father Phone:</b> ' . $row['father_phone'] . '<br>' .
            '<b>Father Profession:</b> ' . $row['father_profession'] . '<br>' .
            '<b>Father Work:</b> ' . $row['father_work'] . '<br>' .
            '<b>Mother Name:</b> ' . $row['mother_name'] . '<br>' .
            '<b>Mother Phone:</b> ' . $row['mother_phone'] . '<br>' .
            '<b>Mother Profession:</b> ' . $row['mother_profession'] . '<br>' .
            '<b>Mother Work:</b> ' . $row['mother_work'] . '<br><hr>' .
            '<b>Graduated Country:</b> ' . $row['graduated_country'] . '<br>' .
            '<b>High School:</b> ' . $row['school'] . '<br>' .
            '<b>School Average:</b> ' . $row['school_average'] . '<br>' .
            '<b>Certifications:</b> ' . $row['certification'] . '<br><hr>' .
            '<b>City:</b> ' . $row['City'] . '<br>' .
            '<b>Address:</b> ' . $row['Address'] . '<br>';
    }
    ?>
</body>

</html>