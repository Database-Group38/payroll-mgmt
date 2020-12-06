<style>
.center {
    margin: auto;
    width: 90%;
    border: 1px solid black;
    padding: 0px;
}

.l{
    margin-left:15em;
}
.ll{
    margin-left:9em;
}

.lll{
    margin-left:5.3em;
}

.t{
    margin-top:2em;
}

.b{
    margin-bottom:15em;
}
</style>

<html>
<head>
    <title> Login & Sign-Up </title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<div class="center">
<div class="container">
    
    <div class="t">
    <div class="b">
    <div class="l">
    <div class="login-box">
    <div class="row">
    <div class="col-md-6 login-left">
        <br><br><br><br>
        <form action="validation.php" method="post">
            <div class="form-group">
                <b><label>⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀User-Name</label></b>
                <input type="text" name="username" class="form-control" required placeholder="Enter Your Unique Username">
            </div>

            <div class="form-group">

                <b><label>⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀Password</label></b>
                <input type="password" name="password" class="form-control" requried placeholder="Enter Password">
            </div>

            <div class="form-group">
                
                <b><label>⠀⠀⠀⠀⠀⠀⠀Your Post</label></b>
                <select name="field">
                    <option value="admin">Admin</option>
                    <option value="accountant">Accountant</option>
                    <option value="employee">Employee</option>
                </select>
            </div>
            
            <div class="ll">
                <button type="submit" class="btn btn-primary"> Login </button>
            </div>
            <br>
            <br>
            <br>
            <b>
            <label style="color:black">⠀⠀⠀⠀⠀⠀New User? Create an Account!</label>
            </b>
            <br>
            <div class="lll">
                <a href="signup_screen.php"><buttom class="btn btn-primary">Create a New Account</buttom></a>
            </div>

        </form>

 
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>



</body>
</html>