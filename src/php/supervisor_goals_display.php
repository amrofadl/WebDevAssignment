<?php
    $goals = $link->query("SELECT * FROM goal");

    while ($goal = $goals->fetch_assoc()) {

        $goal_title = $goal['goal_title'];
        $description = $goal['goal_description'];
        $goal_duedate = $goal['goal_duedate'];
        $goal_status = $goal['goal_status'];
        
        $one = '<div class="container__card--goals"><div class="card"><div><h3 class="card__title"><i class="fa-solid fa-bullseye icon card__icon"></i>';
        $two = '</h3></div><p class="card_detail">';
        $three = '</p><p class="card_detail card__duedate">';
        $four = '</p></div></div>';
        echo $one.$goal_title.$two.$description.$three.$goal_duedate.$four;
    }
?>