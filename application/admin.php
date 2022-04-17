    <html>

    <head>
        <title>
            Admin Page
        </title>
    </head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <body>
        <style>
            body {
                background: white;
            }

            .content-table {
                border-collapse: collapse;
                margin-top: 25px;
                margin-bottom: 5px;
                font-size: 0.9em;
                min-width: 400px;
                border-radius: 5px 5px 0 0;
                overflow: hidden;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);

            }

            ::-webkit-scrollbar {
                width: 10px;
            }

            ::-webkit-scrollbar-track {
                border-radius: 10px;
                box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.25);
            }

            ::-webkit-scrollbar-thumb {
                border-radius: 10px;
                background: linear-gradient(130deg, #00b1ae, #6ec4c3);
            }

            .content-table th {
                background-color: #00b1ae;
                color: #ffffff;
                text-align: left;
                font-weight: bold;
                white-space: nowrap;

            }

            .content-table td {
                padding: 12px 9px;
                border-bottom: 1px solid #dddddd;
                white-space: nowrap;
            }

            .content-table tr:nth-of-type(odd) {
                background-color: #f3f3f3;
            }

            .content-table tr:last-of-type {
                border-bottom: 2px solid #00b1ae;
            }

            div {
                scrollbar-width: 2px;

            }

            .submit {
                margin-top: 10px;
                margin-bottom: -20px;
                padding: 5px 15px;
                font-weight: bold;
                background: linear-gradient(90deg, #00b1ae, #28d1ce);
                color: #fff;
                border: 0 none;
                cursor: pointer;
                -webkit-border-radius: 5px;
                border-radius: 5px;
            }

            #myInput {
                margin-bottom: -15px;
                position: relative;
                width: 200px;
                height: 20px;
                border: 3px solid #00b1ae;
                border-radius: 50px;
            }

            .search {
                border: none;
                height: 100%;
                width: 100%;
                padding: 0px 10px;
                border-radius: 50px;
                font-size: 15px;
                font-family: "Poppins";
                color: black;
                font-weight: 500;

            }

            .search:focus {
                outline: none;
            }
        </style>


        <?php
        require_once('mysql_connect.php');

        $query = "SELECT id, Primary_program, Secondary_program, Year, Name, Surname, Gender, Birthday, place_birth, Mobile, Email, Passport, Father_Name, father_phone, father_profession, father_work, mother_name, mother_phone, mother_profession, mother_work, graduated_country, school, school_average, certification, City, Address FROM student";
        $response = @mysqli_query($dbc, $query);

        if ($response) {
        ?>
            <form action="index.php" align="center">
                <input type="submit" value="Home" class="submit">
            </form>
            <div id="myInput">
                <input type="text" class="search" name="search" id="search" onkeyup="myFunction()" placeholder="Search for names...">
            </div>
            <div style="overflow-x:auto">

                <table class="content-table" id="myTable" align="left" cellspacing="5" cellpadding="8">

                    <tr class="header">
                        <th align="left"><b>Action</b></th>
                        <th align="left"><b>No.</b></th>
                        <th align="left"><b>Primary Program</b></th>
                        <th align="left"><b>Secondary Program</b></th>
                        <th align="left"><b>Year</b></th>
                        <th align="left"><b>First Name</b></th>
                        <th align="left"><b>Last Name</b></th>
                        <th align="left"><b>Gender</b></th>
                        <th align="left"><b>Birthday</b></th>
                        <th align="left"><b>Place of Birth</b></th>
                        <th align="left"><b>Mobile Phone</b></th>
                        <th align="left"><b>Email</b></th>
                        <th align="left"><b>Passport No</b></th>
                        <th align="left"><b>Father Name</b></th>
                        <th align="left"><b>Father Phone</b></th>
                        <th align="left"><b>Father Profession</b></th>
                        <th align="left"><b>Father Work</b></th>
                        <th align="left"><b>Mother Name</b></th>
                        <th align="left"><b>Mother Phone</b></th>
                        <th align="left"><b>Mother Profession</b></th>
                        <th align="left"><b>Mother Work</b></th>
                        <th align="left"><b>Graduated Country</b></th>
                        <th align="left"><b>High School</b></th>
                        <th align="left"><b>School Average</b></th>
                        <th align="left"><b>Certification</b></th>
                        <th align="left"><b>City</b></th>
                        <th align="left"><b>Address</b></th>
                    </tr>



                    <?php
                    $i = 1;
                    while ($row = mysqli_fetch_array($response)) { ?>
                        <tr>
                            <td align="left"><a href="print.php?id=<?php echo $row['id'] ?>">
                            <?php
                            echo  'Print</a></td><td align="left">' .
                                $i . '</td><td align="left">' .
                                $row['Primary_program'] . '</td><td align="left">' .
                                $row['Secondary_program'] . '</td><td align="left">' .
                                $row['Year'] . '</td><td align="left">' .
                                $row['Name'] . '</td><td align="left">' .
                                $row['Surname'] . '</td><td align="left">' .
                                $row['Gender'] . '</td><td align="left">' .
                                $row['Birthday'] . '</td><td align="left">' .
                                $row['place_birth'] . '</td><td align="left">' .
                                $row['Mobile'] . '</td><td align="left">' .
                                $row['Email'] . '</td><td align="left">' .
                                $row['Passport'] . '</td><td align="left">' .
                                $row['Father_Name'] . '</td><td align="left">' .
                                $row['father_phone'] . '</td><td align="left">' .
                                $row['father_profession'] . '</td><td align="left">' .
                                $row['father_work'] . '</td><td align="left">' .
                                $row['mother_name'] . '</td><td align="left">' .
                                $row['mother_phone'] . '</td><td align="left">' .
                                $row['mother_profession'] . '</td><td align="left">' .
                                $row['mother_work'] . '</td><td align="left">' .
                                $row['graduated_country'] . '</td><td align="left">' .
                                $row['school'] . '</td><td align="left">' .
                                $row['school_average'] . '</td><td align="left">' .
                                $row['certification'] . '</td><td align="left">' .
                                $row['City'] . '</td><td align="left">' .
                                $row['Address'] . '</td>';
                            echo '</tr>';
                            $i = $i + 1;
                        }
                        echo '</table> </div>';
                    } else
                        echo mysqli_error($dbc);

                    mysqli_close($dbc);
                            ?>
                            <script>
                                function myFunction() {
                                    var input, filter, table, tr, td, i, txtValue;
                                    input = document.getElementById("search");
                                    filter = input.value.toUpperCase();
                                    table = document.getElementById("myTable");
                                    tr = table.getElementsByTagName("tr");
                                    for (i = 0; i < tr.length; i++) {
                                        td = tr[i].getElementsByTagName("td")[5];
                                        if (td) {
                                            txtValue = td.textContent || td.innerText;
                                            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                                tr[i].style.display = "";
                                            } else {
                                                tr[i].style.display = "none";
                                            }
                                        }
                                    }
                                }
                            </script>
    </body>

    </html>