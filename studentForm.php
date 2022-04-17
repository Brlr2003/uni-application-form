<?php
session_start();
if (isset($_POST['master']) || isset($_POST['undergraduate'])) {
    $program = $_POST['program'];
    if (empty($_POST['secondary_program']))
        $secondary_program = '-';
    else
        $secondary_program = $_POST['secondary_program'];
    $year = $_POST['year'];
    $_SESSION['program'] = $program;
    $_SESSION['secondary_program'] = $secondary_program;
    $_SESSION['year'] = $year;
    $maxage =  date('Y-m-d', strtotime("-5840 days"));

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
                Student Information
            </div>

            <form action="familyForm.php" method="post">
                <div class="user-details">

                    <div class="input-box">
                        <span class="details">First Name <span class="star">*</span></span>
                        <input type="text" name="first_name" size="30" placeholder="Enter your first name" maxlength="45" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Last Name <span class="star">*</span></span>
                        <input type="text" name="last_name" size="30" placeholder="Enter your last name" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Birthday <span class="star">*</span></span>
                        <input type="date" name="birthday" value="" min="1960-12-01" max="<?php echo $maxage ?>" step="1" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Place of Birth <span class="star">*</span></span>
                        <input type="text" name="place_birth" size="30" placeholder="As it is written in the ID Card or Passport" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Mobile Phone <span class="star">*</span></span>
                        <input type="text" name="phone" size="30" maxlength="45" placeholder="Enter your phone" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Email <span class="star">*</span></span>
                        <input type="text" name="email" size="30" placeholder="Enter your email" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Passport / ID</span>
                        <input type="text" name="passport" size="30" placeholder="Enter your passport/ID number">
                    </div>



                </div>

                <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1" value="Male" required>
                    <input type="radio" name="gender" id="dot-2" value="Female" required>
                    <span class="gender-title">Gender <span class="star">*</span></span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Female</span>
                        </label>
                    </div>
                </div>


                <div class="button">
                    <input type="submit" class="continue" name="continue" value="Continue">
                </div>
            </form>
            <div class="button">
                <form action="index.php">
                    <input type="submit" class="return" name="return" value="Return">

                </form>
            </div>
        </div>
    </body>



    </html>
<?php

} elseif (isset($_POST['back'])) {
    $fname = $_SESSION['first_name'];
    $lname = $_SESSION['last_name'];
    $gender = $_SESSION['gender'];
    $birthday = $_SESSION['birthday'];
    $place_birth = $_SESSION['place_birth'];
    $phone = $_SESSION['phone'];
    $email = $_SESSION['email'];
    $passport = $_SESSION['passport'];
    $maxage =  date('Y-m-d', strtotime("-5840 days"));
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
                Student Information

            </div>

            <form action="familyForm.php" method="post">
                <div class="user-details">

                    <div class="input-box">
                        <span class="details">First Name <span class="star">*</span></span>
                        <input type="text" name="first_name" size="30" value="<?php echo $fname ?>" maxlength="45" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Last Name <span class="star">*</span></span>
                        <input type="text" name="last_name" size="30" value="<?php echo $lname ?>" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Birthday <span class="star">*</span></span>
                        <input type="date" name="birthday" min="1960-01-01" max="2007-31-01" step="1" value="<?php echo $birthday ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Place of Birth <span class="star">*</span></span>
                        <input type="text" name="place_birth" size="30" value="<?php echo $place_birth ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Mobile Phone <span class="star">*</span></span>
                        <input type="text" name="phone" size="30" maxlength="45" value="<?php echo $phone ?>" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Email <span class="star">*</span></span>
                        <input type="text" name="email" size="30" value="<?php echo $email ?>" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Passport / ID</span>
                        <input type="text" name="passport" size="30" value="<?php echo $passport ?>">
                    </div>



                </div>

                <div class="gender-details">
                    <?php
                    $year = $_SESSION['gender'];
                    if ($year == 'Male') { ?>
                        <input type="radio" name="gender" id="dot-1" value="Male" required checked>
                        <input type="radio" name="gender" id="dot-2" value="Female" required>
                    <?php
                    } else {
                    ?>
                        <input type="radio" name="gender" id="dot-1" value="Male" required>
                        <input type="radio" name="gender" id="dot-2" value="Female" required checked>
                    <?php }
                    ?>


                    <span class="gender-title">Gender <span class="star">*</span></span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Female</span>
                        </label>
                    </div>
                </div>


                <div class="button">
                    <input type="submit" class="continue" name="continue" value="Continue">
                </div>
            </form>
            <div class="button">
                <form action="index.php">
                    <input type="submit" class="return" value="Return">

                </form>
            </div>
        </div>
    </body>

    </html>
<?php

} else
    echo '<a href="index.php"><h3>You have to choose the program first.<h3></a>';
?>