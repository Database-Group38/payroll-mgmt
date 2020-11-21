<!DOCTYPE html>
<html>

<head>
    <title>Sign Up Form</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <?php
        if (isset( $_GET['passwordFailure']) ) {
            echo "<p>Enter the same password please.</p>";
        }
    ?>

    <form action="register.php" method="get">
        <br>
        <br>
        
        <label for="name">Please enter your full name: </label>
        <input type="name" name="name" placeholder="Enter your full name">
        <br>
        <br>
    <br>
    

        <label>Please select your gender:</label>
        <select name="gender">
            <option value="Select">-Select Gender-</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="nonbinary">Non-binary</option>
            <option value="na">Prefer not to say</option>
        </select>
        <br>
        <br>
        <label>Please select your position in the company:</label>
        <select name="positon" >
            <option value="Select">-Select Position-</option>
            <option value="admin">Admin</option>  
            <option value="accountant">Accountant</option>
            <option value="employee">Employee</option>
        </select>

        <br>
        <br>
        <label for="number">Please enter your age:</label>
        <input type="number" name="age" placeholder="Enter Age">
        <br>
        <br>
        <input type="text" class="form-control" name="contactid" placeholder="Please enter your contact ID.">
        <br>
        <br>
        <input type="text" class="form-control" name="salaryid" placeholder="Please input your salary id.">
        <br>
        <br>
        <input type="password" name="password1" placeholder="Enter password">
        <br>
        <br>
        <input type="password" name="password2" placeholder="Enter password again">
        <br>
        <br>
        <button class = "btn btn-primary">Sign Up</button>
    </form>

</body>
</html>