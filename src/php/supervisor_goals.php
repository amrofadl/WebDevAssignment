<?php
    require 'config.php';

    if (isset($_POST['title'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $date = $_POST['date'];
        $participants = $_POST['participants'];
    } else {
        $title = "";
        $description = "";
        $date = "";
        $participants = "";
    }

    if ($title == "" || $description == "" || $date == "" || $participants == "") {
        echo "Field empty.";
    } else {
        $students = $link->query("SELECT * FROM student WHERE email_address = '$participants'");
        $participant = $students->fetch_assoc();
        $student_id = $participant['student_id'];
        $default = 0;

        $sql = "INSERT INTO goal VALUES ('$student_id', '$title', '$description', '$date', '$default')";

        if (mysqli_query($link, $sql)) {
            echo "Query complete.";
        } else {
            echo mysqli_error($link);
        }
    }
?>