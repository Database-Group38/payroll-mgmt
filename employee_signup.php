<html>
<header>

    <title> Sign-Up </title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

</header>

<body>
<div class="col-md-6">
    <h2> Sign-Up Here </h2>
    <form action="employee_register.php" method="post">
        <div class="form-group">
            <b><label>Enter Full Name</label></b>
            <input type="text" name="name" class="form-control" required placeholder="Enter Your Full Name">

        <br>
        <b><label>Please input a user-name.</label></b>
        <input type="text" name="username" class="form-control" required placeholder="please enter a username">
        <br>
        <b><label>Select your Gender: </label></b>
        <div class="dropdown">
            <select name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="prefer not to say">Prefer Not to Say</option>
            </select>
        </div>
        <br>

       <b><label>Select the department you want to sign up for:</label></b>
       <div class="dropdown">
        <select name="department">
            <option value="1">Operations</option>
            <option value="2">Marketing</option>
            <option value="3">Sales</option>
            <option value="4">Finance</option>
        </select>
        </div>

        <b><label>Please enter your contact number: </label></b>
        <input type="text" name="contactnumber" class="form-control" required placeholder="0300XXXXXXX" maxlength="11">

        <b><label>Please Enter your Email Address: </label></b>
        <input type="email" name="email" class="form-control" required placeholder="abc@gmail.com">
        <br>
        <b><label>House No: </label></b>
        <input type="number" name="housenumber" required placeholder="342">
        <br>
        <b><label>Block: </label></b>
        <input type="text" name="block" class="form-control" required>

        <b><label>Street Number:</label></b>
        <input type="number" name="streetnumber" class="form-control" required>

        <b><label style="color:black">Enter your Town, City, Country</label></b>
        <input type="text" name="town" class="form-control" required placeholder="town"><br>
        <input type="text" name="city" class="form-control" required placeholder="city"><br>
        <input type="text" name="country" class="form-control" required placeholder="country"><br>

    
        <b><label style="color:white">Bank Name:</label></b>
        <div class="dropdown">
            <select name="bankname">
                <option>Dubai Islamic Bank</option>
                <option>Allied Bank</option>
                <option>Habib Bank</option>
                <option>Meezan Bank</option>
                <option>Faisal Bank</option>
                <option>Alfalah Bank</option>
                <option>NIB Bank</option>
                <option>Askari Bank</option>
            </select>
        </div>
        <br>
        <b>
            <label style="color:white">Account number:</label>
        </b>
        <input type="text" name="accountnumber" class="form-control" required placeholder="1234-ABC-3456-XYZ" maxlength="17">


        <div class="form-group">
            <b><label style="color:white">Password</label></b>
            <input type="password" name="password" class="form-control" requried placeholder="Enter Password">
        </div>

        <div class="form-group">
            <b><label style="color:white"   >Confirm Password</label></b>
            <input type="password" name="password2" class="form-control" requried placeholder="Enter Password Again">
        </div>


            
    <button class="btn btn-primary">Sign Up</button>
    </form>
    </div>

</div>
</body>
</html>