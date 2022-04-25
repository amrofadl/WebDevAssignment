<?php include('./php/server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/login_register.css">
    <script src="https://kit.fontawesome.com/3d7a902bb5.js" crossorigin="anonymous"></script>
    <script src="./js/jquery-3.2.1.min.js"></script>
    <script src="./js/login_register.js"></script>
    <title>FYP Management System</title>
</head>
<body>
    <header>
        <div class="container__header">
                <img class="header__logo" src="./images/thesis.png" alt="FYP Logo">
                <h1>FYP Management and Monitoring System</h1>
        </div>
    </header>

    <div class="container__form">
        <form class="form"  id="register" method="POST" action="register.php">
            <h3 class="form__title">Sign Up</h3>
            <div class="form__message form__message--error"><?php echo $registerErr;?></div>
            
            <div class="form__input-group">
                <i class="fa-solid fa-user form__input-icon"></i>
                <input type="text" id="signupUsername" class="form__input" autofocus placeholder="Username" name="username">
                <div class="form__input-error-message">
                    <?php echo $username; ?>
                    <?php echo $usernameErr;?>
                </div>
            </div>
            
            <div class="form__input-group">
                <i class="fa-solid fa-envelope form__input-icon"></i>
                <input type="text" id="signupEmail" class="form__input" autofocus placeholder="Email Address" name="email">
                <div class="form__input-error-message">
                    <?php echo $email;?>
                    <?php echo $emailErr;?>
                </div>
            </div>

            <div class="form__input-group">
                <i class="fa-solid fa-unlock-keyhole form__input-icon"></i>
                <input type="password" id="signupPassword" class="form__input" autofocus placeholder="Password" name="password_1">
                <div class="form__input-error-message">
                    <!-- <?php $password;?> -->
                </div>
            </div>

            <div class="form__input-group">
                <i class="fa-solid fa-unlock-keyhole form__input-icon"></i>
                <input type="password" id="signupPassword" class="form__input" autofocus placeholder="Enter the password again" name="password_2">
                <div class="form__input-error-message">
                    <!-- <?php $password;?> -->
                    <?php echo $passwordErr;?>
                </div>
            </div>

            <div id="select-usertype" class="form__input-group">
                <label for="usertype">Register as..</label><br>
                <div class="container__dropdown">
                    <i class="fa-solid fa-user-group"></i>
                    <select name="usertype" id="usertype">
                        <option value="student">Student</option>
                        <option value="supervisor">Supervisor</option>
                    </select>
                </div>
            </div>

            <div id="select-supervisor" class="form__input-group">
                <label for="supervisor-list">Select your supervisor</label><br>
                <div class="container__dropdown">
                    <i class="fa-solid fa-user-tie"></i>
                    <select name="supervisor-list" id="supervisor-list">
                        <?php 
                            echo "<option value=''>Select Supervisor</option>";

                            $query = "SELECT `sv_id`,concat(COALESCE(`sv_fname`,\"\"),\" \",COALESCE(`sv_lname`, \"\")) AS FullName FROM `supervisor`";
                            $result = mysqli_query($link, $query);

                            while ($row = mysqli_fetch_array($result)) {
                                echo "<option value='".$row['sv_id']."'>" .$row['FullName']. "</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="form__input-error-message"><?php echo $supervisorListErr;?></div>
            </div>

            <div class="container__button">
                <button class="form__button" type="submit" value="signup" name="reg_user">Sign Up</button>
            </div>

            <p class="form__text">
                Already have an account? 
                <a class="form__link" href="login.php">Sign In</a>
            </p>
        </form>
    </div>
</body>
</html>