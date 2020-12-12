<?php

session_start();
$eid = $_POST['employeeid'];
$etaxrate = $_POST['employeetax'];

$servername = 'localhost';
$username = 'root';
$pass = 'root';
$dbname = 'payroll management system';


$con = mysqli_connect($servername, $username, $pass);
mysqli_select_db($con, $dbname);

if(!$con)
{
    echo "connection failed ";
}

else
{
    echo "connected";
    $sql = "SELECT * FROM `salary` WHERE `Employee_Id`='$eid' ";

    $reslut = mysqli_query($con,$sql);

    $row = mysqli_fetch_assoc($result);

  	e#cho "size of array is ";
    #echo sizeof($result);

   # $sid = $row['Salary_Id'];

   # $samount = $row['Amount'];

   
   # $ttax = $samount*$etaxrate;

   # $sql2 = "DELETE FROM `tax` WHERE `Employee_Id`='$eid'";

    #$sql3 = "INSERT INTO `tax` (`Salary_Id`, `Tax_Rate`, `Tax_Paid`) VALUES ('$sid', '$etaxrate', '$ttax')";

    #mysqli_query($con,$sql2);

   # mysqli_query($con,$sql3);

    $echo "end";
    
  
}
mysqli_close($con);

?>