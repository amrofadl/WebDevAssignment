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
    <script src="./js/supervisor_project.js"></script>
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
                        <button id="myProjectBtn" class="button button-active">My Project</button>
                    </div>
                    <div>
                        <button id="proposalBtn" class="button">Proposal Status</button>
                    </div>
                </div>
                <div class="button--right-group">
                    <div>
                        <button id="addProposalBtn" class="button button-add"><span class="icon"><i class="fa-solid fa-plus"></i></span></i>Add Proposal</button>
                    </div>
                </div>
            </div>
            <hr>

            <div id="myProject" class="card card__project">
                <h3 class="title">Projects</h3>
                <table class="table table--proposal">
                    <thead>
                        <tr>
                            <th>Project Title</th>
                            <th>Student</th>
                            <th>Proposal File</th>
                            <th>Published Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Project FYP 2</td>
                            <td>Oliver</td>
                            <td><a href="">Project_Proposal.pdf</a></td>
                            <td>May 1, 2022</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="proposal" class="card card__proposal hidden">
                <h3 class="title">Proposal Status</h3>

                <table class="table proposal-status--table">
                    <thead>
                        <tr>
                            <th>Project Title</th>
                            <th>Description</th>
                            <th>Student</th>
                            <th>Proposal</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <form id="form1" action="" method="post">
                            <tr>
                                <td>Hotel Management System Project</td>
                                <td>Project about managing hotel</td>
                                <td>Sam</td>
                                <td><a href="">Project_Proposal.pdf</a></td>
                                <td>
                                    <!-- <span class="status status-pending">Pending</span> -->
                                    <select name="status" id="status">
                                        <option value="1">Pending</option>
                                        <option value="2">Accepted</option>
                                        <option value="3">Rejected</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="table-edit-button" form="form1" type="submit"><span class="icon table-edit-icon"><i class="fa-solid fa-floppy-disk"></i></span>Save</button>
                                </td>
                            </tr>
                        </form>

                        <form id="form2" action="" method="post">
                            <tr>
                                <td>Project 2</td>
                                <td>Desc about project 2</td>
                                <td>Student name</td>
                                <td><a href="">Project_Proposal.pdf</a></td>
                                <td>
                                    <!-- <span class="status status-accepted">Accepted</span> -->
                                    <select name="status" id="status">
                                        <option value="1">Pending</option>
                                        <option value="2">Accepted</option>
                                        <option value="3">Rejected</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="table-edit-button" form="form2" type="submit"><span class="icon table-edit-icon"><i class="fa-solid fa-floppy-disk"></i></span>Save</button>
                                </td>
                            </tr>
                        </form>

                        <form id="form3" action="" method="post">
                            <tr>
                                <td>Project 3</td>
                                <td>Desc about project 3</td>
                                <td>Student name</td>
                                <td><a href="">Project_Proposal.pdf</a></td>
                                <td>
                                    <!-- <span class="status status-rejected">Rejected</span> -->
                                    <select name="status" id="status">
                                        <option value="1">Pending</option>
                                        <option value="2">Accepted</option>
                                        <option value="3">Rejected</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="table-edit-button" form="form3" type="submit"><span class="icon table-edit-icon"><i class="fa-solid fa-floppy-disk"></i></span>Save</button>
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>

            </div>

            <div id="addProposal" class="card card__add-proposal hidden">
                <h3 class="title form__title">Add Proposal</h3>
                <form  action="" method="post" class="form form__proposal">
                    <!-- <div class="form__message form__message--error">Incorrect username/password combination</div> -->

                    <div class="form__input-group">
                        <label class="form__input-label" for="title">Project Title</label><br>
                        <i class="fa-solid fa-square-pen form__input-icon"></i>
                        <input type="text" id="title" class="form__input" autofocus placeholder="Enter proposal title...">
                        <div class="form__input-error-message"></div>
                    </div>

                    <div class="form__input-group">
                        <label class="form__input-label" for="description">Description</label><br>
                        <i class="fa-solid fa-file-lines form__input-icon textarea-icon"></i>
                        <!-- <input type="textarea" id="description" class="form__input" autofocus placeholder="Enter goal's description..."> -->
                        <textarea class="form__textarea" name="description" id="description" cols="50" rows="10" placeholder="Enter Proposal Description...."></textarea>
                        <div class="form__input-error-message"><!--This is an error message --></div>
                    </div>
                    
                    <div class="form__file">
                        <label class="form__input-label" for="file">File Upload</label><br>
                        <i class="fa-solid fa-clock form__input-icon"></i>
                        <input type="file" id="file" class="" autofocus>
                        <div class="form__input-error-message"></div>
                    </div>

                    <div class="">
                        <label class="form__input-label" for="student">Student</label><br>
                        <i class="fa-solid fa-users form__input-icon"></i>
                        <select name="student" id="student">
                            <option value="1">Sam</option>
                            <option value="2">Oliver</option>
                            <option value="3" >Student Name 3</option>
                        </select>
                        <div class="form__input-error-message"><!--This is an error message --></div>
                    </div>

                    <div class="container__button">
                        <button class="form__button form__button--submit" type="submit"><span class="icon"><i class="fa-solid fa-circle-plus"></i></span>Submit</button>
                        <button class="form__button form__button--clear" type="reset" value="Clear Form"><span class="icon"><i class="fa-solid fa-delete-left"></i></span>Clear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>