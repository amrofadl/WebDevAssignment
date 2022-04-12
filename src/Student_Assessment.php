<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/nav-bar.css">
    <link rel="stylesheet" href="./css/student_assessment.css">
    <link rel="stylesheet" href="./css/hamburger.css">
    <script src="https://kit.fontawesome.com/3d7a902bb5.js" crossorigin="anonymous"></script>
    <script src="./js/nav-bar.js"></script>
    <script src="./js/hamburger.js"></script>
    <title>Assessment</title>
</head>
<body>
    
    <?php include 'includes/../php/student_nav-bar.inc.php'; ?>
    <?php include 'includes/../php/hamburger.inc.php'; ?>
    <?php include './php/student_assessment.php'; ?>

    <div class="container__content">
        <div class="container__assessment">
            <h1 class="content-title">Assessment</h1>

            <hr>
            <div class="container__marksheet">
                <div>
                    <h3 class="title">Marksheet</h3>
                </div>
                <div class="details">
                    <p>Name: <?php echo $_SESSION['username']; ?></p>
                    <p>Project Title: <?php echo $projectName; ?></p> 
                </div>
                <div class="container__table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Criteria</th>
                                <th>Max Mark</th>
                                <th>Mark</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="criteria">Definition of Problem</td>
                                <td>25</td>
                                <td><?php echo $criteriaA; ?></td>
                            </tr>
                            <tr>
                                <td class="criteria">Narrative and Flow Charts or Pseudocode</td>
                                <td>25</td>
                                <td><?php echo $criteriaB; ?></td>
                            </tr>
                            <tr>
                                <td class="criteria">Coding of Program</td>
                                <td>25</td>
                                <td><?php echo $criteriaC; ?></td>
                            </tr>
                            <tr>
                                <td class="criteria">Testing and Presentation</td>
                                <td>25</td>
                                <td><?php echo $criteriaD; ?></td>
                            </tr>
                            <tr class="total">
                                <td class="total-td">Total</td>
                                <td>100</td>
                                <td><?php echo $criteriaA + $criteriaB + $criteriaC + $criteriaD ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>