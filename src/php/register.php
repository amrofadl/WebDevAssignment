<?php
    require 'config.php';

    $registermssg = "";

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // if ($username == '' or $email == '' or $password == '') {
    //     echo "Empty";
    // }

    $email_student = $link->query("SELECT * FROM student WHERE stud_email = '$email'");
    $email_supervisor = $link->query("SELECT * FROM supervisor WHERE sv_email = '$email'");

    if ($email_student->num_rows > 0 || $email_supervisor->num_rows > 0) {
        $registermssg = "You already registered";
    } else {
        $stmt = $link->prepare("insert into student(username, email_address, password) VALUES (?, ?, ?)");
        $stmt->bind_param($username, $email, $password);
        $execval = $stmt->execute();
        $registermssg = "Registeration success!";
    }
?>