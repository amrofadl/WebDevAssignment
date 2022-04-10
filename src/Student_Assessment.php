<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/nav-bar.css">
    <link rel="stylesheet" href="./css/student_assessment.css">
    <script src="https://kit.fontawesome.com/3d7a902bb5.js" crossorigin="anonymous"></script>

    <title>Assessment</title>
</head>
<body>
    <div class="nav-bar">
        <div class="nav-bar__user-div">
            <div>
                <img class="" src="./images/User.png" alt="User Icon">
            </div>
            <div id="userType">UserType - Student</div>
        </div>
        <div class="wrapper__page-button">
            <div class="nav-bar__page-list">
                <ul id="myDiv">
                    <li><a class="page-button" href="./Student_Dashboard.php"><span class="page-icon"><i class="fa-brands fa-trello"></i></span>Dashboard</a></li>
                    <li><a class="page-button" href="./Student_Project.php"><span class="page-icon"><i class="fa-solid fa-briefcase"></i></span>Projects</a></li>
                    <li><a class="page-button" href="./Student_Meeting.php"><span class="page-icon"><i class="fa-solid fa-calendar-days"></i></span>Meetings</a></li>
                    <li><a class="page-button" href="./Student_Goals.php"><span class="page-icon"><i class="fa-solid fa-bullseye"></i></span>Goals</a></li>
                    <li><a class="page-button active" href="./Student_Assessment.php"><span class="page-icon"><i class="fa-solid fa-clipboard-list"></i></span>Assessment</a></li>
                </ul>
            </div>
            <div class="wrapper__sign-out">
                <a id="signout" href="login.php">Sign Out</a>
            </div>
        </div>
    </div>

    <div class="container__content">
        <div class="container__assessment">
            <h1 class="content-title">Assessment</h1>

            <hr>
            <div class="container__marksheet">
                <div>
                    <h3 class="title">Marksheet</h3>
                </div>
                <div class="details">
                    <p>Name: Sam</p>
                    <p>Project Title: Something2</p> 
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
                                <td class="criteria">Criteria A</td>
                                <td>25</td>
                                <td>score..</td>
                            </tr>
                            <tr>
                                <td class="criteria">Criteria B</td>
                                <td>25</td>
                                <td>score..</td>
                            </tr>
                            <tr>
                                <td class="criteria">Criteria C</td>
                                <td>25</td>
                                <td>score..</td>
                            </tr>
                            <tr>
                                <td class="criteria">Criteria D</td>
                                <td>25</td>
                                <td>score..</td>
                            </tr>
                            <tr class="total">
                                <td class="total-td">Total</td>
                                <td>100</td>
                                <td>score..</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>