<?php 

    $Fullname = $_POST['fName'];
    $Email = $_POST['Email'];
    $Age = $_POST['Age'];
    $Address = $_POST['Address'];
    $Promo = $_POST['promo'];

    $conn = new mysqli('localhost','root','','mybodyrules_regform');

    if ($conn->connect_error) {
        die("connection failed: ".$conn->connect_error);
    }
    else {
        $stmt = $conn->prepare("insert into ybyr_client(FullName,Email,Age,Address,promo) 
        values(?,?,?,?,?)");

        $stmt->bind_param("ssiss",$Fullname,$Email,$Age,$Address,$Promo);

        $stmt->execute();
        echo "<script> alert('Your info was submitted. Wait for the admin to contact you. Thankyou! Have a nice day.. ');window.location='main.php' </script>";

        $stmt->close();
        $conn->close();
        
    }

?> 