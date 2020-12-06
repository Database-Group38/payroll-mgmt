<!DOCTYPE html>
<style>
.center {
    margin: auto;
    width: 50%;
    border: 3px solid black;
    padding: 10px;
}

.l{
    margin-left:3em;
}

.r{
    margin-right:3em;
}

</style>
<html>
<header>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

</header>
<body>
    <br>
    <div class="r">
        <a href="logout.php" class="float-right"><button class="btn btn-primary" style="background-color: red">Logout</button></a>
    </div>
    <div class="center">
    
        <h1 style="color:blue">⠀⠀⠀⠀⠀Welcome Back !</h1>
        <br>
    </div>
    <br> <br>
    <h3>⠀What Would You Like to do? </h3>
    <div class="col-md-12">
        <br>
        <div class="l">
            <a href="employee_attendance.php"><p style="color: blue"><b>1. Submit Attendance</b></p><a>
            <a href="salaryslip.php"><p style="color: blue"><b>2. View Salary Slip</b></p><a>
            <a href="salaryslip.php"><p style="color: blue"><b>3. Submit Overtime Hours</b></p><a>
            <a href="salaryslip.php"><p style="color: blue"><b>4. Submit Leave Application</b></p><a>
        </div>

    </div>

</body>
</html>