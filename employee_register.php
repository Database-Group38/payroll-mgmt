<?php
session_start();

$name = $_POST['name'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$gender = $_POST['gender'];
$usernamedb = $_POST['username'];

$servername = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'payroll management system';

if($password!=$password2){
    echo "Passwords do not match. Try Again!";
    header('Location:index.php?passwordFailure=1');
}else{

    $con = mysqli_connect($servername, $username, $pass);
    mysqli_select_db($con, $dbname);

    if($con == false){
        echo "connection failed !";
    }else{
        echo " connection established ";
    
        $sql = "SELECT `employee_id` FROM `employees` WHERE `user_name`='$usernamedb'";
        $result = mysqli_query($con,$sql);

        if (mysqli_num_rows($result)==0) {

            $sql2 = "INSERT INTO `employees` (`employee_id`, `name`, `password`, `final_amount`, `gender`, `user_name`) VALUES (NULL, '$name', '$password', NULL, '$gender', '$usernamedb')";
            mysqli_query($con, $sql2);
    
            
        } else {
            echo "user name already exists!";
        }

    }

}




?>

