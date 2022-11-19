<?php 
    require 'need.php';
    if(isset($_POST["submit"])) {
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];
        $duplicate = mysqli_query($conn, "SELECT * FROM ybyr_signup WHERE username = '$username' OR email = '$email'");
        if(mysqli_num_rows($duplicate) > 0) {
            echo
                "<script> alert('Username or Email Has Already Taken'); </script>"; 
        }
    else {
        if($password == $confirmpassword){
            $query = "INSERT INTO ybyr_signup VALUES('','$fullname','$email','$username','$password')";
            mysqli_query($conn,$query);
            echo
                "<script> alert('Sign Up Successful');window.location='login.php' </script>";
            }
            else {
                echo
                "<script> alert('Password Does Not Match'); </script>"; 
            }
        }
    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YBYR Sign Up</title>
    <link rel="stylesheet" href="sign.css">
    <link rel="icon" type="image/x-icon" href="image/logo.jpeg">    

</head>
<body>
    <div class="container">
        <div class="reg-form">
            <div class="title">
                <h2><span>YBYR</span> SIGN UP</h2>
            </div>

            <div class="sign">
                <form action="#" method="post">

                    <div class="sign-child">
                        <label>Fullname</label>
                        <input type="text" name="fullname" id="fullname" class="inp" required>
                    </div>
                    <div class="sign-child">
                        <label>Email</label>
                        <input type="email" name="email" id="email" class="inp" required>
                    </div>
                    <div class="sign-child">
                        <label>Username</label>
                        <input type="text" name="username" id="username" class="inp" required>
                    </div>
                    <div class="sign-child">
                        <label>Password</label>
                        <input type="password" name="password" id="password" class="inp" required>
                    </div>
                    <div class="sign-child">
                        <label>Confirm Password</label>
                        <input type="password" name="confirmpassword" id="confirmpassword" class="inp" required>
                    </div>
                    <div class="btn">
                        <input type="submit" value="Sign" name="submit" id="btn">
                    </div>
                </form>
                <div class="acc">
                    <a href="login.php">Already an account?</a>
                </div>
            </div>

        </div>
    </div>
</body>
</html>