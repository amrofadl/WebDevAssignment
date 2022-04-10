<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/nav-bar.css">
    <link rel="stylesheet" href="./css/supervisor_goals.css">
    <script src="https://kit.fontawesome.com/3d7a902bb5.js" crossorigin="anonymous"></script>
    <script src="./js/supervisor_goals.js"></script>
    <script src="./js/nav-bar.js"></script>
    <title>Goals</title>
</head>
<body>
    <?php include 'includes/../php/supervisor_nav-bar.inc.php'; ?>    

    <div id="goalsContainer" class="container__content">
        <div class="container__goals">
            <h1 class="content-title">Goals</h1>
            <div class="wrapper__button">
                <div>
                    <button id="goalsBtn" class="button button-active">Goals</button>
                </div>
                <div>
                    <button id="addGoalsBtn" class="button button-add"><span class="icon"><i class="fa-solid fa-plus"></i></span></i>Add Goal</button>
                </div>
            </div>
            <hr>
            <div id="goalsList" class="content__goals">
                <div class="goals-list">
                    <div>
                        <h3 class="goals-list__header">Goals List</h3>
                    </div>
                    <div class="container__card--goals">
                        <div class="card">
                            <div>
                                <h3 class="card__title"><i class="fa-solid fa-bullseye icon card__icon"></i>Complete Introduction</h3>
                            </div>
                            <p class="card_detail">Descriptionnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn</p>
                            <p class="card_detail card__duedate">Deadline/Duedate</p>
                        </div>

                        <div class="card">
                            <div>
                                <h3 class="card__title"><i class="fa-solid fa-bullseye icon card__icon"></i>Complete Literature Review</h3>
                            </div>
                            <p class="card_detail">Description</p>
                            <p class="card_detail card__duedate">Deadline/Duedate</p>
                        </div>

                        <div class="card">
                            <div>
                                <h3 class="card__title"><i class="fa-solid fa-bullseye icon card__icon"></i>Complete C</h3>
                            </div>
                            <p class="card_detail">Description</p>
                            <p class="card_detail card__duedate">Deadline/Duedate</p>
                        </div>

                        <div class="card">
                            <div>
                                <h3 class="card__title"><i class="fa-solid fa-bullseye icon card__icon"></i>Complete D</h3>
                            </div>
                            <p class="card_detail">Description</p>
                            <p class="card_detail card__duedate">Deadline/Duedate</p>
                        </div>

                        <div class="card">
                            <div>
                                <h3 class="card__title"><i class="fa-solid fa-bullseye icon card__icon"></i>Complete E</h3>
                            </div>
                            <p class="card_detail">Description</p>
                            <p class="card_detail card__duedate">Deadline/Duedate</p>
                        </div>

                        <div class="card">
                            <div>
                                <h3 class="card__title"><i class="fa-solid fa-bullseye icon card__icon"></i>Complete F</h3>
                            </div>
                            <p class="card_detail">Description</p>
                            <p class="card_detail card__duedate">Deadline/Duedate</p>
                        </div>

                        <div class="card">
                            <div>
                                <h3 class="card__title"><i class="fa-solid fa-bullseye icon card__icon"></i>Complete G</h3>
                            </div>
                            <p class="card_detail">Description</p>
                            <p class="card_detail card__duedate">Deadline/Duedate</p>
                        </div>

                        <div class="card">
                            <div>
                                <h3 class="card__title"><i class="fa-solid fa-bullseye icon card__icon"></i>Complete H</h3>
                            </div>
                            <p class="card_detail">Description</p>
                            <p class="card_detail card__duedate">Deadline/Duedate</p>
                        </div>

                        <div class="card">
                            <div>
                                <h3 class="card__title"><i class="fa-solid fa-bullseye icon card__icon"></i>Complete I</h3>
                            </div>
                            <p class="card_detail">Description</p>
                            <p class="card_detail card__duedate">Deadline/Duedate</p>
                        </div>

                        <div class="card">
                            <div>
                                <h3 class="card__title"><i class="fa-solid fa-bullseye icon card__icon"></i>Complete J</h3>
                            </div>
                            <p class="card_detail">Description</p>
                            <p class="card_detail card__duedate">Deadline/Duedate</p>
                        </div>
                    </div>
                </div>

                <div class="container__progress">
                    <table class="table">
                        <caption>Progress</caption>
                        <thead>
                            <tr>
                                <th>Student</th>
                                <th>Progress</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Albert Lim</td>
                                <td>
                                    <progress max="100" value="100"></progress>
                                </td>
                            </tr>

                            <tr>
                                <td>Chris Rock</td>
                                <td>
                                    <progress max="100" value="20"></progress>
                                </td>
                            </tr>

                            <tr>
                                <td>CWK</td>
                                <td>
                                    <progress max="100" value="50"></progress>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="addGoals" class="content__goals--add hidden">
                <form  action="" method="post" class="form form__goals--add ">
                    <h3 class="form__title">Add Goal</h3>
                    <!-- <div class="form__message form__message--error">Incorrect username/password combination</div> -->

                    <div class="form__input-group">
                        <label class="form__input-label" for="title">Title</label><br>
                        <i class="fa-solid fa-square-pen form__input-icon"></i>
                        <input type="text" id="title" class="form__input" autofocus placeholder="Enter goal's title...">
                        <div class="form__input-error-message"></div>
                    </div>

                    <div class="form__input-group">
                        <label class="form__input-label" for="description">Description</label><br>
                        <i class="fa-solid fa-file-lines form__input-icon"></i>
                        <input type="textarea" id="description" class="form__input" autofocus placeholder="Enter goal's description...">
                        <div class="form__input-error-message"><!--This is an error message --></div>
                    </div>
                    
                    <div class="form__input-group">
                        <label class="form__input-label" for="date">Due Date</label><br>
                        <i class="fa-solid fa-clock form__input-icon"></i>
                        <input type="date" id="date" class="form__input" autofocus>
                        <div class="form__input-error-message"></div>
                    </div>

                    <div class="form__input-group">
                        <label class="form__input-label" for="participants">Assign to</label><br>
                        <i class="fa-solid fa-users form__input-icon"></i>
                        <input type="text" id="participants" class="form__input" autofocus placeholder="Assign to students...">
                        <div class="form__input-error-message"><!--This is an error message --></div>
                    </div>

                    <div class="container__button">
                        <button class="form__button form__button--create" type="submit"><span class="icon"><i class="fa-solid fa-circle-plus"></i></span>Add</button>
                        <button class="form__button form__button--clear" type="reset" value="Clear Form"><span class="icon"><i class="fa-solid fa-delete-left"></i></span>Clear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>