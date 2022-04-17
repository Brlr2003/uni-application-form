<?php
session_start();
if (isset($_POST['continue'])) {

    $school = $_POST['school'];
    $graduated_country = $_POST['graduated_country'];
    $certification = $_POST['certification'];

    if (empty($_POST['school_average']))
        $school_average = '-';
    else
        $school_average = $_POST['school_average'];


    $_SESSION['school'] = $school;
    $_SESSION['graduated_country'] = $graduated_country;
    $_SESSION['school_average'] = $school_average;
    $_SESSION['certification'] = $certification;
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WBU Application</title>
</head>

<body>


    <div class="container">
        <div class="logo">
            <div class="bar">
                <img src="wbu.png" alt="">
            </div>
        </div>
        <div class="title">
            Address Information
        </div>

        <form action="studentAdded.php" method="post">
            <div class="user-details">

                <div class="input-box">
                    <span class="details">City <span class="star">*</span></span>
                    <input type="text" name="city" size="30" placeholder="The city where you live" required>

                </div>
                <div class="input-box">
                    <span class="details">Address <span class="star">*</span></span>
                    <input type="text" name="address" size="30" placeholder="Enter your full address" required>
                </div>


                <div class="check-box">
                    <h3>Applicant's Declaration:</h3>
                    <br />
                    <h6>
                        I certify that all information on this application is complete, factual,
                        accurate and honestly presented. I further understand that my admission and
                        subsequent registration may be canceled if this information is found to be
                        false or if anything has been intentionally omitted. If I enroll at Western
                        Balkans University, I agree to familiarize myself with the rules and
                        regulations of the University and abide by them. In addition, I understand
                        that application documents submitted in support of an application for
                        admission become the permanent possession of the Western Balkans University
                        and will not be returned.
                    </h6>
                    <br />
                    <span class="details">I have read the Conditions and Accept <span class="star">*</span></span>
                    <input type="checkbox" name="checkbox_name" value="checkox_value" required />
                </div>

            </div>



            <div class="button">
                <input type="submit" class="submit" name="submit" value="Submit">
            </div>
        </form>
        <div class="button">
            <form action="educationForm.php" method="post">
                <input type="submit" class="return" value="Back" name="back">

            </form>
        </div>
    </div>
</body>



</html>