<?php
    require 'config.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($username == '' or $email == '' or $password == '') {
        echo "Empty";
    }

    $email_student = $link->query("SELECT * FROM student WHERE email_address = '$email'");
    $email_supervisor = $link->query("SELECT * FROM supervisor WHERE email_address = '$email'");

    if ($email_student->num_rows > 0 || $email_supervisor->num_rows > 0) {
        echo "Existed";
    } else {
        $stmt = $link->prepare("insert into student(username, email_address, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);
        $execval = $stmt->execute();
        echo "Registered";
    }
?>