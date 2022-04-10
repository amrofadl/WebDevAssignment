<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/nav-bar.css">
    <link rel="stylesheet" href="./css/student_dashboard.css" type="text/css">
    
    <script src="https://kit.fontawesome.com/3d7a902bb5.js" crossorigin="anonymous"></script>
    <script src="./js/nav-bar.js"></script>
    <title>Dashboard</title>
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
                    <li><a class="page-button active" href="./Student_Dashboard.php"><span class="page-icon"><i class="fa-brands fa-trello"></i></span>Dashboard</a></li>
                    <li><a class="page-button" href="./Student_Project.php"><span class="page-icon"><i class="fa-solid fa-briefcase"></i></span>Projects</a></li>
                    <li><a class="page-button" href="./Student_Meeting.php"><span class="page-icon"><i class="fa-solid fa-calendar-days"></i></span>Meetings</a></li>
                    <li><a class="page-button" href="./Student_Goals.php"><span class="page-icon"><i class="fa-solid fa-bullseye"></i></span>Goals</a></li>
                    <li><a class="page-button" href="./Student_Assessment.php"><span class="page-icon"><i class="fa-solid fa-clipboard-list"></i></span>Assessment</a></li>
                </ul>
            </div>
            <div class="wrapper__sign-out">
                <a id="signout" href="Login_Register.php">Sign Out</a>
            </div>
        </div>
    </div>
        
    <div class="container__content">
        <div class="container__dashboard">
            <h1>Dashboard</h1>
            <hr>
            <div class="container__card">
                <div class="card card-left">
                    <h2 class="card__title">My Projects</h2>
                    <div class="container__table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Supervisor</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Project X</td>
                                    <td>Mr. Euwern</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card card-right">
                    <h2 class="card__title">Upcoming Meetings</h2>
                    <div class="container__table">
                        <table class="table table-upcoming">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Location</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Meeting</td>
                                    <td>May 1, 2022</td>
                                    <td>11:00AM</td>
                                    <td>Meeting Room</td>
                                </tr>

                                <tr>
                                    <td>Meeting</td>
                                    <td>May 7, 2022</td>
                                    <td>10:00AM</td>
                                    <td>Meeting Room</td>
                                </tr>

                                <tr>
                                    <td>Meeting</td>
                                    <td>May 6, 2022</td>
                                    <td>12:00AM</td>
                                    <td>FCI001</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>