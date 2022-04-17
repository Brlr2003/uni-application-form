<?php
session_start();
if (isset($_POST['continue'])) {


    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $place_birth = $_POST['place_birth'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    if (empty($_POST['passport']))
        $passport = "-";
    else
        $passport = $_POST['passport'];

    $_SESSION['first_name'] = $fname;
    $_SESSION['last_name'] = $lname;
    $_SESSION['gender'] = $gender;
    $_SESSION['birthday'] = $birthday;
    $_SESSION['place_birth'] = $place_birth;
    $_SESSION['phone'] = $phone;
    $_SESSION['email'] = $email;
    $_SESSION['passport'] = $passport;

    $program = $_SESSION['program'];
    $secondary_program = $_SESSION['secondary_program'];
    $year = $_SESSION['year'];

    $_SESSION['program'] = $program;
    $_SESSION['secondary_program'] = $secondary_program;
    $_SESSION['year'] = $year;
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
                Family Information
            </div>

            <form action="educationForm.php" method="post">
                <div class="user-details">

                    <div class="input-box">
                        <span class="details">Father Name <span class="star">*</span></span>
                        <input type="text" name="father_name" size="30" placeholder="Enter your father's name" maxlength="45" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Father Phone</span>
                        <input type="text" name="father_phone" size="30" placeholder="Father Phone">
                    </div>

                    <div class="input-box">
                        <span class="details">Father Profession</span>
                        <input type="text" name="father_profession" placeholder="Father Profession">
                    </div>

                    <div class="input-box">

                        <span class="details">Father Work</span>
                        <input type="text" name="father_work" size="30" maxlength="45" placeholder="Father Work">
                    </div>
                    <div class="input-box">

                        <span class="details">Mother Name</span>
                        <input type="text" name="mother_name" size="30" maxlength="45" placeholder="Mother Name">
                    </div>
                    <div class="input-box">

                        <span class="details">Mother Phone</span>
                        <input type="text" name="mother_phone" size="30" maxlength="45" placeholder="Mother Phone">
                    </div>
                    <div class="input-box">

                        <span class="details">Mother Profession</span>
                        <input type="text" name="mother_profession" size="30" maxlength="45" placeholder="Mother Profession">
                    </div>
                    <div class="input-box">

                        <span class="details">Mother Work</span>
                        <input type="text" name="mother_work" size="30" maxlength="45" placeholder="Mother Work">
                    </div>





                </div>



                <div class="button">
                    <input type="submit" class="submit" name="continue" value="Continue">
                </div>
            </form>
            <div class="button">
                <form action="studentForm.php" method="post">
                    <input type="submit" class="return" value="Back" name="back">

                </form>
            </div>
        </div>
    </body>



    </html>

<?php
} elseif (isset($_POST['back'])) {

    $father = $_SESSION['father_name'];
    $fphone = $_SESSION['father_phone'];
    $fprofession = $_SESSION['father_profession'];
    $fwork = $_SESSION['father_work'];
    $mother = $_SESSION['mother_name'];
    $mphone = $_SESSION['mother_phone'];
    $mprofession = $_SESSION['mother_profession'];
    $mwork = $_SESSION['mother_work'];

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
                Family Information
            </div>

            <form action="educationForm.php" method="post">
                <div class="user-details">

                    <div class="input-box">
                        <span class="details">Father Name <span class="star">*</span></span>
                        <input type="text" name="father_name" size="30" value="<?php echo $father ?>" maxlength="45" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Father Phone</span>
                        <input type="text" name="father_phone" size="30" value="<?php echo $fphone ?>">
                    </div>

                    <div class="input-box">
                        <span class="details">Father Profession</span>
                        <input type="text" name="father_profession" value="<?php echo $fprofession ?>">
                    </div>

                    <div class="input-box">

                        <span class="details">Father Work</span>
                        <input type="text" name="father_work" size="30" maxlength="45" value="<?php echo $fwork ?>">
                    </div>
                    <div class="input-box">

                        <span class="details">Mother Name</span>
                        <input type="text" name="mother_name" size="30" maxlength="45" value="<?php echo $mother ?>">
                    </div>
                    <div class="input-box">

                        <span class="details">Mother Phone</span>
                        <input type="text" name="mother_phone" size="30" maxlength="45" value="<?php echo $mphone ?>">
                    </div>
                    <div class="input-box">

                        <span class="details">Mother Profession</span>
                        <input type="text" name="mother_profession" size="30" maxlength="45" value="<?php echo $mprofession ?>">
                    </div>
                    <div class="input-box">

                        <span class="details">Mother Work</span>
                        <input type="text" name="mother_work" size="30" maxlength="45" value="<?php echo $mwork ?>">
                    </div>





                </div>



                <div class="button">
                    <input type="submit" class="submit" name="continue" value="Continue">
                </div>
            </form>
            <div class="button">
                <form action="studentForm.php" method="post">
                    <input type="submit" class="return" value="Back" name="back">

                </form>
            </div>
        </div>
    </body>



    </html>

<?php
} else
    echo '<a href="index.php"><h3>You have to choose the program first.<h3></a>';
?>