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

            <div id="myProject" class="card card__my-project">
                <h2 class="title">My Project</h2>
                <div class="container__project">
                    <div>
                        <div class="message">~~ No project ~~</div>
                    </div>
                    <div class="container__details">
                        <p class="details">Project Title: <br>
                        <span class="details__output">Project X</span></p>
                        <p class="details">Supervisor: <br>
                        <span class="details__output">Dr. Gadget</span></p>
                    </div>
                </div>
            </div>

            <div id="proposal" class="card card__proposal hidden">
                <h2 class="title">Proposal Status</h2>
                <div class="container__proposal">
                    <div>
                        <div class="message">~~ No proposal ~~</div>
                    </div>
                    <div class="container__details">
                        <p class="details">Project Title: <br>
                            <span class="details__output">Hotel Management System Project</span>
                        </p>
                        <p class="details">Supervisor: <br>
                            <span class="details__output">Dr. Gadget</span>
                        </p>
                        <p class="details">File: <br>
                            <span class=""><a href="#">Proposal.pdf</a></span>
                        </p>
                        <p class="details"> Status: <br>
                            <span class="status status-pending">Pending</span>
                        </p>
                        <!-- <div class="wrapper__file-upload">
                            <p>Project Plan: </p> <br>
                            <input type="file" name="file" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple/>
                            <label for="file">Choose a file...</label>
                        </div>
                        <div class="wrapper__button-card">
                            <button class="button button-card button-card--upload" type="submit"><span class="icon"><i class="fa-solid fa-upload"></i></span> Upload</button>
                            <button class="button button-card button-card--remove"><span class="icon"><i class="fa-solid fa-trash"></i></span> Remove</button>
                        </div> -->
                    </div>
                </div>
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
                    
                    <div class="">
                        <label class="form__input-label" for="file">File Upload</label><br>
                        <i class="fa-solid fa-clock form__input-icon"></i>
                        <input type="file" id="file" class="" autofocus>
                        <div class="form__input-error-message"></div>
                    </div>

                    <div class="">
                        <label class="form__input-label" for="supervisor">Supervisor</label><br>
                        <i class="fa-solid fa-users form__input-icon"></i>
                        <select name="supervisor" id="supervisor">
                            <option value="1" option="selected">Dr. Gadget</option>
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