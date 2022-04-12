<?php
    require 'config.php';

    $student_assessment = $link->query("SELECT * FROM assessment");

    while ($assessment = $student_assessment->fetch_assoc()) {
        $student_id = $assessment['student_id'];
        $criteriaA = $assessment['criteriaA'];
        $criteriaB = $assessment['criteriaB'];
        $criteriaC = $assessment['criteriaC'];
        $criteriaD = $assessment['criteriaD'];
        $total = $criteriaA + $criteriaB + $criteriaC + $criteriaD;

        $students = $link->query("SELECT * FROM student WHERE student_id = '$student_id'");
        $student = $students->fetch_assoc();
        $student_name = $student['username'];
        $button = '<td><button class="table-edit-button" type="button" name="button_1"><span class="icon"><i class="fa-solid fa-eye"></i></span>View</button></td>';
        echo "<tr><td>$student_name</td><td>$total</td>$button</tr>";
    }
?>