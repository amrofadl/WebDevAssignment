<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/nav-bar.css">
    <link rel="stylesheet" href="./css/supervisor_project.css">
    <script src="https://kit.fontawesome.com/3d7a902bb5.js" crossorigin="anonymous"></script>
    <script src="./js/project.js"></script>
    <title>Project</title>
</head>
<body>
    <div class="nav-bar">
        <div class="nav-bar__user-div">
            <div>
                <img class="" src="./images/User.png" alt="User Icon">
            </div>
            <div id="userType">UserType - Supervisor</div>
        </div>
        <div class="wrapper__page-button">
            <div class="nav-bar__page-list">
                <ul id="myDiv">
                    <li><a class="page-button" href="./Supervisor_Dashboard.php"><span class="page-icon"><i class="fa-brands fa-trello"></i></span>Dashboard</a></li>
                    <li><a class="page-button active" href="./Supervisor_Project.php"><span class="page-icon"><i class="fa-solid fa-briefcase"></i></span>Projects</a></li>
                    <li><a class="page-button" href="./Supervisor_Meeting.php"><span class="page-icon"><i class="fa-solid fa-calendar-days"></i></span>Meetings</a></li>
                    <li><a class="page-button" href="./Supervisor_Goals.php"><span class="page-icon"><i class="fa-solid fa-bullseye"></i></span>Goals</a></li>
                    <li><a class="page-button" href="./Supervisor_Assessment.php"><span class="page-icon"><i class="fa-solid fa-clipboard-list"></i></span>Assessment</a></li>
                </ul>
            </div>
            <div class="wrapper__sign-out">
                <a id="signout" href="Login_Register.php">Sign Out</a>
            </div>
        </div>
    </div>

    <div class="container__content">
        <div class="container__project">
            <h1 class="content-title">Projects</h1>
            <div class="wrapper__button">
                <div class="button--left-group">
                    <div>
                        <button id="proposalsBtn" class="button button-active">Proposals</button>
                    </div>
                    <div>
                        <button id="projectsBtn" class="button">Projects Status</button>
                    </div>
                </div>
                <div class="button--right-group">
                    <div>
                        <button id="addProposal" class="button button-add"><span class="icon"><i class="fa-solid fa-plus"></i></span></i>Add Proposal</button>
                    </div>
                </div>
            </div>
            <hr>
            <div id="proposalTable" class="card card__proposal-card ">
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

            <!-- TODO: form? or no -->
            <div id="projStatusTable" class="card card__project-status card-hidden">
                <div>
                    <table class="table project-status--table">
                        <caption>Project Status</caption>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Project Title</th>
                                <th>Student</th>
                                <th>Proposal</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="table-checkbox">
                                    <input type="checkbox" id="" name="index[]" value="">
                                </td>
                                <td>Test</td>
                                <td>Text</td>
                                <td><a href="">Project_Proposal.pdf</a></td>
                                <td>
                                    <span class="status status-pending">Pending</span>
                                </td>
                                <td>
                                    <button class="table-edit-button" type="button"><span class="table-edit-icon"><i class="fa-solid fa-pencil"></i></span></button>
                                    <button class="table-edit-button" type="button"><span class="table-edit-icon"><i class="fa-solid fa-trash-can"></i></span></button>
                                </td>
                            </tr>

                            <tr>
                                <td class="table-checkbox">
                                    <input type="checkbox" id="" name="index[]" value="">
                                </td>
                                <td>Test</td>
                                <td>Text</td>
                                <td><a href="">Project_Proposal.pdf</a></td>
                                <td>
                                    <span class="status status-accepted">Accepted</span>
                                </td>
                                <td>
                                    <button class="table-edit-button" type="button"><span class="table-edit-icon"><i class="fa-solid fa-pencil"></i></span></button>
                                    <button class="table-edit-button" type="button"><span class="table-edit-icon"><i class="fa-solid fa-trash-can"></i></span></button>
                                </td>
                            </tr>

                            <tr>
                                <td class="table-checkbox">
                                    <input type="checkbox" id="" name="index[]" value="">
                                </td>
                                <td>Test</td>
                                <td>Text</td>
                                <td><a href="">Project_Proposal.pdf</a></td>
                                <td>
                                    <span class="status status-rejected">Rejected</span>
                                </td>
                                <td>
                                    <button class="table-edit-button" type="button"><span class="table-edit-icon"><i class="fa-solid fa-pencil"></i></span></button>
                                    <button class="table-edit-button" type="button"><span class="table-edit-icon"><i class="fa-solid fa-trash-can"></i></span></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</body>
</html>