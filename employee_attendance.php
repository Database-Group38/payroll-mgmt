<style>
.center {
    margin: auto;
    width: 50%;
    border: 3px solid black;
    padding: 10px;
}

.l{
    margin-left:5em;
}
</style>

<html>
    <header>
        <title> Attendance </title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </header>

    <body>
    <h2><b> Please Submit your attendance for the day ! </b></h2>
    <div class="col-md-6">
    <form action="attendance.php" method="post">
        <div class="form-group">
            <div class="l">
                <b><label> Enter your employee id: </b><p>
                <input type="number" name="employeeid" class="form-control" required placeholder="Enter Your Employee Id.">
                <br>
                <a href="attendance.php"><button class="btn btn-primary">Submit Attendance</button></a>
        </div>
        </div>


</form>
</div>

        
    </body>
</html>
