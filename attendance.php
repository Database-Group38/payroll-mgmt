<?php

session_start();
$eid = $_POST['employeeid'];

$servername = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'payroll management system';

$con = mysqli_connect($servername, $username, $pass);
mysqli_select_db($con, $dbname);

if($con == false)
{
    echo "connection failed ";
}

else
{
    $date = date("d/m/y");
    $time = date("h:i:sa");

    $sql = "INSERT INTO `attendance` (`date`, `time`, `employee_id`) VALUES ('$date', '$time', '$eid')";
    if(mysqli_query($con, $sql))
    {
        echo "done";
    }
    else
    {
        echo "not done";
    }

    

}

?>