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
                <label>Name</label>
                <input type="text" name="name" class="form-control" required placeholder="Enter Your Full Name">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" requried placeholder="Enter Password">
            </div>
            <button type="submit" class="btn btn-primary"> Login </button>
        </form>
</div>

<div class="col-md-6">
    <h2> Sign-Up Here </h2>
    <form action="signup.php" method="post">
        <div class="form-group">
            <label>Enter Full Name</label>
            <input type="text" name="name" class="form-control" required placeholder="Enter Your Full Name">
        </div>

        
            <form action="signup.php" method="post">
                <label>Select Post</label>
                <select name="field">
                    <option value="admin">Admin</option>
                    <option value="accountant">Accountant</option>
                    <option value="employee">Employee</option>
                </select>


            </form>

        


        <div>
            <form action="form-group">
                <label>Enter Password</label>
                <input type="password" name="password" class="form-control" requried placeholder="Enter Password">
            </form>
        </div>

        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="password2" class="form-control" requried placeholder="Enter Password Again">
        </div>

        <button type="submit" class="btn btn-primary">Sign</button>
    </form>
    
    </div>
    </div>
    </div>



</body>
</html>