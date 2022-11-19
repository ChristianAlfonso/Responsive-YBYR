<?php 
require 'need.php';
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM ybyr_signup WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0 ){
        if ($password == $row["password"]) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("location: main.php");
        }
        else {
            echo 
            "<script> alert('Wrong Password'); </script>"; 
        }
    }
    else {
        echo 
        "<script> alert('User Not Registered'); </script>"; 
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YBYR Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" type="image/x-icon" href="image/logo.jpeg">    
</head>
<body>

    <div class="container">
        <div class="form">
            <div class="title">
                <h3><span>YBYR</span> Login</h3>
            </div>
                <form action="#" method="post">
                    <input type="text" name="username" id="username" placeholder="Username" class="inp" required>
                    <input type="password" name="password" id="password" placeholder="Password" class="inp" required>
                <div class="btn">
                    <input type="submit" value="Login" name="submit" id="btn">
                </div>
                <div class="acc">
                    <h5>Don't have a account? <a href="sign.php">Sign Here </a></h5>
                </div>
                </form>
        </div>
    </div>
    
</body>
</html>