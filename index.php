<html>
<head>
    <title> Login & Sign-Up </title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<div class="container">
    <div class="login-box">
    <div class="row">
    <div class="col-md-6">
        <h2> Login Here </h2>
        <form action="validation.php" method="post">
            <div class="form-group">
                <b><label>User-Name</label></b>
                <input type="text" name="username" class="form-control" required placeholder="Enter Your Unique Username">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" requried placeholder="Enter Password">
            </div>

            <div class="form-group">
                <label>Your Post</label>
                <select name="field">
                    <option value="admin">Admin</option>
                    <option value="accountant">Accountant</option>
                    <option value="employee">Employee</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary"> Login </button>

            <br>
            <br>
            <label>New User? Create an Account!</label>
            <br>
            <a href="signup_screen.php"><buttom class="btn btn-primary">Create a New Account</buttom></a>
        </form>

 

</div>
</div>
</div>
</div>



</body>
</html>