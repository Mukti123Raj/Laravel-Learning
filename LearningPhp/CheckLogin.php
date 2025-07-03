<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <?php
        $user = $_POST["username"];
        $pass = $_POST["password"];

        // echo "<h1>Login Successful</h1>";
        // echo "<h2>Welcome, $user!</h2>";
        // echo "<h3>Your password is: $pass</h3>";
        if(strcmp($user, "Mukti") == 0 and strcasecmp($pass, "Sagar") == 0){
            echo "<h1>Login Successful</h1>";
            echo "<h2>Welcome, $user!</h2>";
           
        } else {
            echo "<h1>Login Failed</h1>";
            echo "<h2>Invalid Username or Password</h2>";
            echo "<a href='Login.php'>Try Again</a>";
        }


        ?>

    </center>
</body>
</html>