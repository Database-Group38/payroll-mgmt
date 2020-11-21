<?php

$name=$_GET['name'];
$gender=$_GET['gender'];
$position=$_GET['position'];
$age=$_GET['age'];
$password1=$_GET['password1'];
$password2=$_GET['password2'];
$contactid=$_GET['contactid'];
$salaryid=$_GET['salaryid'];

if ($password1!=$password2) {
    echo "Error: Passwords do not match! Try again.";
    header('Location:index.php?passwordFailure=1');
} else {

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'payroll management system';

    $conn = mysqli_connect($servername, $username, $password, $dbname);


    if ($conn==false) {
        echo "Connection Failed";
    }
    
    //do anything to the database, you have access
    if($position == "admin"){
        
        $sql = "INSERT INTO `admin` (`Name`, `Password`,`Contact_Id`) VALUES ('$name','$password1',$contactid)";

    }

    if($position == "accountant"){
        echo "empty";
    }

    if($position == "employee"){
        echo "empty";
    }    
    
    if (mysqli_query($conn, $sql)) {
        echo "Query Successful";
    } else {
        echo "Query failed";
    }
    

    mysqli_close($conn);
}




?>
