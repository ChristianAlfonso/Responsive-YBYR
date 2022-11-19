<?php 

    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userMessage = $_POST['userMessage'];

    $conn = new mysqli('localhost','root','','mybodyrules_regform');

    if ($conn->connect_error) {
        die("connection failed: ".$conn->connect_error);
    }
    else {
        $stmt = $conn->prepare("insert into ybyr_contact(name,email,message) 
        values(?,?,?)");

        $stmt->bind_param("sss",$userName,$userEmail,$userMessage);

        $stmt->execute();
        echo "<script> alert('Thanks for contacting us! Your message was submitted.');window.location='main.php' </script>";

        $stmt->close();
        $conn->close();
        

    }

?> 


