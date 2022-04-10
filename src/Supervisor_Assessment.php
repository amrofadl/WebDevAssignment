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
                    <table class="table student-table">
                        <caption>Students List</caption>
                        <thead>
                            <tr>
                                <th>Student</th>
                                <th>Total Mark</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Sam</td>
                                <td>98</td>
                                <td>
                                    <button class="table-edit-button" type="button"><span class="icon"><i class="fa-solid fa-eye"></i></span>View</button>
                                </td>
                            </tr>

                            <tr>
                                <td>Oak</td>
                                <td>29</td>
                                <td>
                                    <button class="table-edit-button" type="button"><span class="icon"><i class="fa-solid fa-eye"></i></span>View</button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
               
                <div class="container__marksheet">
                    <form class="form form__marksheet" action="" method="post">
                        <h3 class="title container__title">Student Marksheet</h3>
                        <!-- <div class="form__message form__message--error">Incorrect username/password combination</div> -->
                        <div class="details">
                            <h3 class="title">Details</h3>
                            <hr>
                            <p>Name: Sam Willy</p>
                            <p>Project Title: XXXXXS</p>
                        </div>

                        <div class="container__evaluation-table">
                            <h3 class="title">Evaluation Criteria</h3>
                            <hr>
                            <table class="table evaluation-table">
                                <thead>
                                    <tr>
                                        <th>Criteria</th>
                                        <th>Mark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Criteria A</td>
                                        <td>
                                            <input class="mark" type="text" placeholder="enter mark" value="32" maxlength="2" size="2" disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Criteria B</td>
                                        <td>
                                            <input class="mark" type="text" placeholder="enter mark" value="32" maxlength="2" size="2" disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Criteria C</td>
                                        <td>
                                            <input class="mark" type="text" placeholder="enter mark" value="32" maxlength="2" size="2" disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Criteria D</td>
                                        <td>
                                            <input class="mark" type="text" placeholder="enter mark" value="31" maxlength="2" size="2" disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Total Mark</td>
                                        <td> 98
                                            <!-- <input type="text" placeholder="enter mark" value="12" maxlength="2" size="2" disabled> -->
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="container__button">
                            <div class="button__left-group">
                                <button id="editBtn" class="button evaluation-button button-edit"><span class="icon"><i class="fa-solid fa-pen-to-square"></i></span>Edit</button>
                                <button id="cancelBtn" class="button evaluation-button button-cancel"><span class="icon"><i class="fa-solid fa-ban"></i></span>Cancel</button>
                            </div>
                            <div class="button__right-group">
                                <button class="button evaluation-button button-save" type="submit"><span class="icon"><i class="fa-solid fa-floppy-disk"></i></span>Save</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
</html>