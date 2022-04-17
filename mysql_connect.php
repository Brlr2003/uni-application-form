<?php

$host = 'localhost';
$user = 'root';
$pass = 'root';
$db = 'application';

$dbc = mysqli_connect($host, $user, $pass, $db);

if (!$dbc)
    die("Connection failed!" . mysqli_connect_error());
//admin - admin123