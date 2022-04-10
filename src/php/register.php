<?php
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($username == '' or $email == '' or $password = '') {
        echo "Error: Empty field";
        echo "<script>setTimeout(\"location.href = '../login_register.php';\",2000);</script>";
    } else {
        // Database
        $conn = mysqli_connect('localhost', 'root', '', 'fypmanagement');
        if($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }else{
            try {
                $stmt = $conn->prepare("insert into student(username, email_address, password) VALUES(?, ?, ?)");
                $stmt->bind_param("sss", $username, $email, $password);
                $execval = $stmt->execute();
                $stmt->close();
                $conn->close();
            }catch (Exception $e) {
                echo "Error: " .$e->getMessage();
            }
            echo "<script>setTimeout(\"location.href = '../login_register.php';\",2000);</script>";
        }
    }
?>