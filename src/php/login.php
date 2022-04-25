<?php
    require 'config.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_student = $link->query("SELECT * FROM student WHERE email_address = '$email'");
    $email_supervisor = $link->query("SELECT * FROM supervisor WHERE email_address = '$email'");

    if ($email_student->num_rows > 0) {
        $student = $email_student->fetch_assoc();
        if ($password == $student['password']) {
            session_start();
            $_SESSION['email'] = $student['email_address'];
            $_SESSION['username'] = $student['username'];
            $_SESSION['student_id'] = $student['student_id'];

            $id = $student['student_id'];

            $student_assessment =  $link->query("SELECT * FROM assessment WHERE student_id = '$id'");
            $student_project = $link->query("SELECT * FROM project WHERE student_id = '$id'");

            if ($student_assessment->num_rows == 0) {
                $stmt = $link->query("INSERT INTO assessment(student_id, criteriaA, criteriaB, criteriaC, criteriaD) VALUES ('$id', 0, 0, 0, 0)");
            }

            if ($student_project->num_rows != 0) {
                $project = $student_project->fetch_assoc();
                $_SESSION['project_title'] = $project['project_title'];
            } else {
                $_SESSION['project_title'] = "-";
            }

            echo "student";
        }
    }
    
    if ($email_supervisor->num_rows > 0) {
        $supervisor = $email_supervisor->fetch_assoc();
        if ($password == $supervisor['password']) {
            session_start();
            $_SESSION['email'] = $supervisor['email_address'];
            $_SESSION['username'] = $supervisor['username'];
            $_SESSION['supervisor_id'] = $supervisor['supervisor_id'];

            echo "supervisor";
        }
    }
?>