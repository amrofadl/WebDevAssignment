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
        <form class="form"  id="register" method="POST">
            <h3 class="form__title">Sign Up</h3>
            <div class="form__message form__message--error"><!--Incorrect username/password combination --></div>
            
            <div class="form__input-group">
                <i class="fa-solid fa-user form__input-icon"></i>
                <input type="text" id="signupUsername" class="form__input" autofocus placeholder="Username" name="username">
                <div class="form__input-error-message"></div>
            </div>
            
            <div class="form__input-group">
                <i class="fa-solid fa-envelope form__input-icon"></i>
                <input type="text" id="signupEmail" class="form__input" autofocus placeholder="Email Address" name="email">
                <div class="form__input-error-message"></div>
            </div>

            <div class="form__input-group">
                <i class="fa-solid fa-unlock-keyhole form__input-icon"></i>
                <input type="password" id="signupPassword" class="form__input" autofocus placeholder="Password" name="password">
                <div class="form__input-error-message"><!--This is an error message --></div>
            </div>
            <div class="container__button">
                <button class="form__button" type="submit" value="signup">Sign Up</button>
            </div>

            <p class="form__text">
                Already have an account? 
                <a class="form__link" href="login.php">Sign In</a>
            </p>
        </form>
    </div>
    <script src="js/register.js"></script>
</body>
</html>