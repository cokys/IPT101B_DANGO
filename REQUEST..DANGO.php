<html>
<head><title>FORM</title></head>
<body>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $pwdLen = strlen($_POST["pwd"]);


        echo "Helllooooo " .$_POST["fname"] ." ". $_POST["lname"] ."!!<br>Your email is ". $_POST["email"]."<br>";
        echo "Your password has ". $pwdLen ." characters<br><br><br>";

        if($pwdLen == strlen($_POST["c_pwd"])){
            echo "Your password is equal to confirm password :3";
        }else{
            echo "Sorry dud not equal >:3";
        }
    }else{
        echo "sorry dud can't access >:3";
    }

    ?>

</body>
</html>