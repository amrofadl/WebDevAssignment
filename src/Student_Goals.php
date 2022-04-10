<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/nav-bar.css">
    <link rel="stylesheet" href="./css/student_goals.css">
    <script src="https://kit.fontawesome.com/3d7a902bb5.js" crossorigin="anonymous"></script>

    <title>Goals</title>
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
                    <li><a class="page-button active" href="./Student_Goals.php"><span class="page-icon"><i class="fa-solid fa-bullseye"></i></span>Goals</a></li>
                    <li><a class="page-button" href="./Student_Assessment.php"><span class="page-icon"><i class="fa-solid fa-clipboard-list"></i></span>Assessment</a></li>
                </ul>
            </div>
            <div class="wrapper__sign-out">
                <a id="signout" href="login.php">Sign Out</a>
            </div>
        </div>
    </div>

    <div class="container__content">
        <div class="container__goals">
            <h1 class="content-title">Goals</h1>
            <hr>
            <div class="container__goals-list">
                <h3 class="title">Goals List</h3>
                <div class="container__card">
                    <div class="card">
                        <div>
                            <h3 class="card__title"><i class="fa-solid fa-bullseye card__icon"></i>Goal Title</h3>
                        </div>
                        <p class="card_detail">Descriptionnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn</p>
                        <p class="card_detail card__duedate">Deadline/Duedate</p>
                    </div>

                    <div class="card">
                        <div>
                            <h3 class="card__title"><i class="fa-solid fa-bullseye card__icon"></i>Goal Title A</h3>
                        </div>
                        <p class="card_detail">Descriptionnnnnnnnnnnn</p>
                        <p class="card_detail card__duedate">Deadline/Duedate</p>
                    </div>

                    <div class="card">
                        <div>
                            <h3 class="card__title"><i class="fa-solid fa-bullseye card__icon"></i>Goal Title B</h3>
                        </div>
                        <p class="card_detail">Descriptionnnnnnnnnnnn</p>
                        <p class="card_detail card__duedate">Deadline/Duedate</p>
                    </div>

                    <div class="card">
                        <div>
                            <h3 class="card__title"><i class="fa-solid fa-bullseye card__icon"></i>Goal Title C</h3>
                        </div>
                        <p class="card_detail">Descriptionnnnnnnnnnnn</p>
                        <p class="card_detail card__duedate">Deadline/Duedate</p>
                    </div>

                    <div class="card">
                        <div>
                            <h3 class="card__title"><i class="fa-solid fa-bullseye card__icon"></i>Goal Title D</h3>
                        </div>
                        <p class="card_detail">Descriptionnnnnnnnnnnn</p>
                        <p class="card_detail card__duedate">Deadline/Duedate</p>
                    </div>

                    <div class="card">
                        <div>
                            <h3 class="card__title"><i class="fa-solid fa-bullseye card__icon"></i>Goal Title E</h3>
                        </div>
                        <p class="card_detail">Descriptionnnnnnnnnnnn</p>
                        <p class="card_detail card__duedate">Deadline/Duedate</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>