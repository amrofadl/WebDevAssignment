<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }

  $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/nav-bar.css">
    <link rel="stylesheet" href="./css/supervisor_assessment.css">
    <link rel="stylesheet" href="./css/hamburger.css">
    <script src="https://kit.fontawesome.com/3d7a902bb5.js" crossorigin="anonymous"></script>
    <script src="./js/supervisor_assessment.js"></script>
    <script src="./js/nav-bar.js"></script>
    <script src="./js/hamburger.js"></script>
    <title>Assessment</title>
</head>
<body>
    <?php include 'includes/../php/supervisor_nav-bar.inc.php'; ?>
    <?php include 'includes/../php/hamburger.inc.php'; ?>

    <div class="container__content">
        <div class="container__assessment">
            <h1 class="content-title">Assessment</h1>

            <hr>
            <div class="container__table-view">
                <div class="container__student-table">
                    <h2 class="title">Students List</h2>
                    <div class="container__table">
                        <table class="table student-table">
                            <thead>
                                <tr>
                                    <th>Student</th>
                                    <th>Total Mark</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <?php 
                                    // require_once './php/supervisor_assessment.php' 
                                    ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
               
                <div class="container__marksheet">
                    <form class="form form__marksheet" action="" method="post" id="markForm">
                        <h3 class="title container__title">Student Marksheet</h3>
                        <!-- <div class="form__message form__message--error">Incorrect username/password combination</div> -->
                        <div class="details">
                            <h3 class="-title">Details</h3>
                            <hr>
                            <p>Name: 
                                <span>
                                    <?php
                                        echo $student_name;
                                    ?>
                                    <!-- Euwern -->
                                </span>
                            </p>
                            <p>Project Title: 
                                <span>
                                    <!-- <?php
                                        // echo $project_title
                                    ?> -->
                                    XXXXXS
                                </span>
                            </p>
                        </div>

                        <div class="container__evaluation-table">
                            <h3 class="">Evaluation Criteria</h3>
                            <hr>
                            <div class="container__table">
                                <table class="table evaluation-table">
                                    <thead>
                                        <tr>
                                            <th>Criteria</th>
                                            <th>Mark</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Definition of Problem</td>
                                            <td>
                                                <?php 
                                                    echo '<input class="mark" type="number" value="'.$criteriaA. '" min="0" max="25" name="criteriaA" disabled>';
                                                ?>
                                                <!-- <input class="mark" type="number" value="0" min="0" max="25" id="criteriaA" disabled> -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Narrative and Flow Charts or Pseudocode</td>
                                            <td>
                                                <?php 
                                                    echo '<input class="mark" type="number" value="'.$criteriaB. '" min="0" max="25" name="criteriaB" disabled>';
                                                ?>
                                                <!-- <input class="mark" type="number" value="0" min="0" max="25" disabled> -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Coding of Program</td>
                                            <td>
                                                <?php 
                                                    echo '<input class="mark" type="number" value="'.$criteriaC. '" min="0" max="25" name="criteriaC" disabled>';
                                                ?>
                                                <!-- <input class="mark" type="number" value="0" min="0" max="25" disabled> -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Testing and Presentation</td>
                                            <td>
                                                <?php 
                                                    echo '<input class="mark" type="number" value="'.$criteriaD. '" min="0" max="25" name="criteriaD" disabled>';
                                                ?>
                                                <!-- <input class="mark" type="number" value="0" min="0" max="25" disabled> -->
                                            </td>
                                        </tr>
                                        <tr class="total">
                                            <td>Total Mark</td>
                                            <td> 
                                                <?php 
                                                    echo $criteriaA + $criteriaB + $criteriaC + $criteriaD;
                                                ?>
                                                <!-- <input type="text" placeholder="enter mark" value="12" maxlength="2" size="2" disabled> -->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="container__button">
                            <div class="button__left-group">
                                <button id="editBtn" class="button evaluation-button button-edit" form="markForm" value="Edit"><span class="icon"><i class="fa-solid fa-pen-to-square"></i></span>Edit</button>
                                <button id="cancelBtn" class="button evaluation-button button-cancel" type="reset" form="markForm" value="Reset"><span class="icon"><i class="fa-solid fa-ban"></i></span>Cancel</button>
                            </div>
                            <div class="button__right-group">
                                <button class="button evaluation-button button-save" type="submit" form="markForm"><span class="icon"><i class="fa-solid fa-floppy-disk"></i></span>Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>