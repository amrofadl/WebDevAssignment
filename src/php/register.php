<?php
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Database
    $conn = new mysqli('localhost', 'root', '', 'fypmanagement');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        echo $username;
        echo $email;
        echo $password;
        $stmt = $conn->prepare("insert into student(username, email_address, password) VALUES(?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);
        $execval = $stmt->execute();
        $stmt->close();
        $conn->close();
        header("Location: ../login_register.html");
        exit;
    }
?>