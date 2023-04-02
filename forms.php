<html>
<head><title>FORM</title></head>
<body>
<h1>PHP FORM ACTIVITY</h1>

    <form action="submitForm.php" method="POST">
    <label for="Firstname">Firstname</label>
        <input type="text" name="fname"><br>
    <label for="Lastname">Lastname</label>
        <input type="text" name="lname"><br>
    <label for="Email">Email</label>
        <input type="email" name="email"><br>
    <label for="Username">Username</label>
        <input type="text" name="username"><br>
    <label for="Password">Password</label>
        <input type="password" name="pwd"><br>
    <label for="Confirm Password">Confirm Password</label>
        <input type="password" name="c_pwd"><br>  
        <input type="submit" value="SUBMIT">      
    </form>
</body>
</html>