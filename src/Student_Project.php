<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/nav-bar.css">
    <link rel="stylesheet" href="./css/student_project.css">
    <script src="https://kit.fontawesome.com/3d7a902bb5.js" crossorigin="anonymous"></script>
    <script src="./js/student_project.js"></script>
    <title>Project</title>
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
                    <li><a class="page-button active" href="./Student_Project.php"><span class="page-icon"><i class="fa-solid fa-briefcase"></i></span>Projects</a></li>
                    <li><a class="page-button" href="./Student_Meeting.php"><span class="page-icon"><i class="fa-solid fa-calendar-days"></i></span>Meetings</a></li>
                    <li><a class="page-button" href="./Student_Goals.php"><span class="page-icon"><i class="fa-solid fa-bullseye"></i></span>Goals</a></li>
                    <li><a class="page-button" href="./Student_Assessment.php"><span class="page-icon"><i class="fa-solid fa-clipboard-list"></i></span>Assessment</a></li>
                </ul>
            </div>
            <div class="wrapper__sign-out">
                <a id="signout" href="login.php">Sign Out</a>
            </div>
        </div>
    </div>

    <div class="container__content">
        <div class="container__project">
            <h1 class="content-title">Projects</h1>
            <div class="wrapper__button">
                <div class="button--left-group">
                    <div>
                        <button id="proposalsBtnStud" class="button button-active">Proposals</button>
                    </div>
                    <div>
                        <button id="projectsBtnStud" class="button">My Project</button>
                    </div>
                </div>
                <div class="button--right-group">
                    <div>
                        <button id="addProposal" class="button button-add"><span class="icon"><i class="fa-solid fa-plus"></i></span></i>Add Proposal</button>
                    </div>
                </div>
            </div>

            <div id="proposalTableStud" class="card card__proposal-card">
                <table class="table table--proposal">
                    <thead>
                        <caption>Proposals</caption>
                        <tr>
                            <th>Project Title</th>
                            <th>Owner</th>
                            <th>Proposal</th>
                            <th>Published Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Test</td>
                            <td>Text</td>
                            <td><a href="">Project_Proposal.pdf</a></td>
                            <td>May 1, 2022</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- TODO: form? table? -->
            <div id="myProjects" class="card__my-project card-hidden">
                <div class="card wrapper__my-project">
                    <form class="form__my-project" action="" method="POST">
                        <h2>My Project</h2>
                        <hr>
                        <div class="project-info">
                            <p>Name: <span>Albert Lim</span></p>
                            <p>Project Title: <span>Hotel Management System Project</span></p>
                            <p>Supervisor: <span>Raman Khurana</span></p>
                            <div class="wrapper__file-upload">
                                <p>Project Plan: </p>
                                <input type="file" name="file" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple  />
                                <label for="file">Choose a file...</label>
                            </div>
                            <div class="wrapper__button-card">
                                <button class="button button-card button-card--upload" type="submit"><span class="icon"><i class="fa-solid fa-upload"></i></span> Upload</button>
                                <button class="button button-card button-card--remove"><span class="icon"><i class="fa-solid fa-trash"></i></span> Remove</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>
</html>