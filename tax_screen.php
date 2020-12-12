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
        <title> Tax calculation </title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </header>
    <body>
    <h2><b> Calculate Tax for specific employee and enter </b></h2>
    <div class="col-md-6">
    <form action="tax.php" method="post">
        <div class="form-group">
            <div class="l">
                <b><label> Enter employee id: </b><p>
                <input type="number" name="employeeid" class="form-control" placeholder="Employee Id">
                <br>
                <input type="number" name="employeetax" class="form-control" placeholder="Tax amount">
                <br>
                <a href="tax.php"><button class="btn btn-primary">Submit</button></a>
        </div>
        </div>
</form>
</div>
        
    </body>
</html>