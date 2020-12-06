<?php
session_start();

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'payroll management system';

$con = mysqli_connect($servername, $username, $password);
mysqli_select_db($con, $dbname);




?>