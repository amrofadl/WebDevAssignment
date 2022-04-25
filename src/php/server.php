<?php 
    require 'config.php';
    session_start();

    $usernameErr = $emailErr = $passwordErr = $loginErr = $registerErr = $supervisorListErr = "";
    $username = $email = "";
    $errors = array(); 

    // REGISTER USER
    if (isset($_POST['reg_user'])) {
        // receive all input values from the form
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password_1 = $_POST['password_1'];
        $password_2 = $_POST['password_2'];
    
        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array

        if(empty($username)) {
            $usernameErr = "Username is required!";
            array_push($errors, "Username is required");
        }

        if (empty($email)){
            $emailErr = "Email is empty!";
            array_push($errors, "Email is required");
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format!";
                array_push($errors, "Invalid email format!");
            }
        }
        
        if ($password_1 != $password_2) {
            $passwordErr = "The two passwords do not match";
            array_push($errors, "The two passwords do not match");
        }
    
        // first check the database to make sure 
        // a user does not already exist with the same username and/or email

        $user_check_query = "SELECT * FROM student WHERE stud_username = '$username' OR stud_email = '$email' LIMIT 1";
        $result = mysqli_query($link, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        $username_check_query = "SELECT * FROM student WHERE stud_username = '$username'";
        $email_check_query = "SELECT * FROM student WHERE stud_email = '$email'";
        $username_result = mysqli_query($link, $username_check_query);
        $email_result = mysqli_query($link, $email_check_query);

        if (mysqli_num_rows($username_result) > 0 || mysqli_num_rows($email_result) > 0) { // if user exists
            array_push($errors, "Username or email already exists");
            $usernameErr = "Username or email already exists";

        }

        if (empty($_POST['supervisor-list'])) {
            array_push($errors, "Select your supervisor!");
            $supervisorListErr = "Select your supervisor!";
        }

        // Finally, register user if there are no errors in the form
        if (count($errors) == 0) {

            if(!empty($_POST['usertype'])) {
                $selected = $_POST['usertype'];

                //if register as student
                if ($_POST['usertype'] === 'student') {
                    $password = md5($password_1);//encrypt the password before saving in the database
                    $sv_id = $_POST['supervisor-list'];
                    $query = "INSERT INTO student (stud_username, stud_email, stud_password, sv_id) 
                            VALUES('$username', '$email', '$password', '$sv_id')";
                    mysqli_query($link, $query);
                    $_SESSION['username'] = $username;
                    $_SESSION['success'] = "You are now logged in";
                    header('location: Student_Dashboard.php');

                } else {
                    $selected = $_POST['usertype'];
                    $password = md5($password_1);//encrypt the password before saving in the database
        
                    $query = "INSERT INTO supervisor (sv_username, sv_email, sv_password) 
                            VALUES('$username', '$email', '$password')";
                    mysqli_query($link, $query);
                    $_SESSION['username'] = $username;
                    $_SESSION['success'] = "You are now logged in";
                    header('location: Supervisor_Dashboard.php');
                }
            }
        }
    }

    // LOGIN USER
    if (isset($_POST['login_user'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        if (empty($username)) {
            array_push($errors, "Username is required");
            $usernameErr = "Username is required";
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
            $passwordErr = "Password is required";
        }
    
        if (count($errors) == 0) {

            if (!empty($_POST['usertypeSignin'])) {
                if ($_POST['usertypeSignin'] === 'student') {
                    $password = md5($password);
                    $query = "SELECT * FROM student WHERE stud_username='$username' AND stud_password='$password'";
                    $results = mysqli_query($link, $query);

                    if (mysqli_num_rows($results) == 1) {
                        $_SESSION['username'] = $username;
                        $_SESSION['success'] = "You are now logged in";
                        header('location: Student_Dashboard.php');

                    } else {
                        array_push($errors, "Wrong username/password combination");
                        $loginErr = "Wrong username/password combination";
                    }

                } else {
                    $password = md5($password);
                    $query = "SELECT * FROM supervisor WHERE sv_username='$username' AND sv_password='$password'";
                    $results = mysqli_query($link, $query);
                    if (mysqli_num_rows($results) == 1) {
                        $_SESSION['username'] = $username;
                        $_SESSION['success'] = "You are now logged in";
                        header('location: Supervisor_Dashboard.php');
                    } else {
                        array_push($errors, "Wrong username/password combination");
                        $loginErr = "Wrong username/password combination";
                    }
                }
            }

            
        }
    }
    

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>