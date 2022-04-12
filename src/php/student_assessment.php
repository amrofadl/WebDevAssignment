<?php
    require 'config.php';

    $id = $_SESSION['student_id'];
    $projectName = $_SESSION['project_title'];
    $student_assessment = $link->query("SELECT * FROM assessment WHERE student_id = '$id'");

    $assessment = $student_assessment->fetch_assoc();
    $criteriaA = $assessment['criteriaA'];
    $criteriaB = $assessment['criteriaB'];
    $criteriaC = $assessment['criteriaC'];
    $criteriaD = $assessment['criteriaD'];
?>