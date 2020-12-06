<?php
session_start();

$usernamedb = $_POST['username'];
$passwd = $_POST['password'];
$field = $_POST['field'];


$servername = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'payroll management system';

$con = mysqli_connect($servername, $username, $pass);
mysqli_select_db($con, $dbname);


if($con == false){
    echo "connection failed !";
}else{

    echo " connection established ";

    if($field == "admin"){

        $sql = "SELECT `admin_id` FROM `admin` WHERE `user_name`='$usernamedb' AND `password`='$passwd'";
        $result = mysqli_query($con,$sql);

        if(mysqli_num_rows($result)==0){
            header("Location:invalid.php");
        }else{
            header('Location:welcome_admin.php');
        }

        
    }elseif($field == "accountant"){


        $sql = "SELECT `accountant_id` FROM `accountants` WHERE `user_name`='$usernamedb' AND `password`='$passwd'";
        $result = mysqli_query($con,$sql);

        if(mysqli_num_rows($result)==0){
            header("Location:invalid.php");
        }else{
            header('Location:welcome_accountant.php');
        }


    }else{

        $sql = "SELECT `employee_id` FROM `employees` WHERE `user_name`='$usernamedb' AND `password`='$passwd'";
        $result = mysqli_query($con,$sql);

        if(mysqli_num_rows($result)==0){
            header("Location:invalid.php");
        }else{
            header('Location:welcome_employee.php');
        }



    }
    
}




?>

