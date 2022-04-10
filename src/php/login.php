<?php
    require 'config.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_student = $link->query("SELECT * FROM student WHERE email_address = '$email'");
    $email_supervisor = $link->query("SELECT * FROM supervisor WHERE email_address = '$email'");

    if ($email_student->num_rows > 0) {
        $student = $email_student->fetch_assoc();

        if (strcmp($password, $student['password'] == 0)) {
            session_start();
            $_SESSION['email'] = $student['email_address'];
            $_SESSION['username'] = $student['username'];
            $_SESSION['student_id'] = $student['student_id'];

            echo "student";
        }else {
            echo "Wrong email or password";
        }
    }
    
    if ($email_supervisor->num_rows > 0) {
        $supervisor = $email_supervisor->fetch_assoc();
        
        if (strcmp($password, $supervisor['password'] == 0)) {
            session_start();
            $_SESSION['email'] = $supervisor['email_address'];
            $_SESSION['username'] = $supervisor['username'];
            $_SESSION['supervisor_id'] = $supervisor['supervisor_id'];

            echo "supervisor";
        }else {
            echo "Wrong email or password";
        }
    }
?>