<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }

  $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/nav-bar.css">
    <link rel="stylesheet" href="./css/supervisor_dashboard.css">
    <link rel="stylesheet" href="./css/hamburger.css">
    <script src="https://kit.fontawesome.com/3d7a902bb5.js" crossorigin="anonymous"></script>
    <script src="./js/nav-bar.js"></script>
    <script src="./js/hamburger.js"></script>
    <title>Dashboard</title>
</head>
<body>

    <?php include 'includes/../php/supervisor_nav-bar.inc.php'; ?>
    <?php include 'includes/../php/hamburger.inc.php'; ?>
        
    <div class="container__content">
        <div class="container__dashboard">
            <h1 class="content-title">Dashboard</h1>
            <hr>
            <div class="container__card">
                <div class="card card-left">
                    <h2 class="card__title">Projects</h2>
                    <div class="container__table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Student</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Project X</td>
                                    <td>Sam smith</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="card card-right">
                    <h2 class="card__title">Upcoming Meetings</h2>
                    <div class="container__table">
                        <table class="table table-upcoming">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Location</th>
                                    <th>Students</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Meeting</td>
                                    <td>May 1, 2022</td>
                                    <td>11:00AM</td>
                                    <td>Meeting Room</td>
                                    <td>Albert Lim</td>
                                </tr>

                                <tr>
                                    <td>Meeting</td>
                                    <td>May 1, 2022</td>
                                    <td>11:00AM</td>
                                    <td>Meeting Room</td>
                                    <td>Albert Lim</td>
                                </tr>
                                
                                <tr>
                                    <td>Meeting</td>
                                    <td>May 1, 2022</td>
                                    <td>11:00AM</td>
                                    <td>Meeting Room</td>
                                    <td>Albert Lim</td>
                                </tr>

                                <tr>
                                    <td>Meeting</td>
                                    <td>May 1, 2022</td>
                                    <td>11:00AM</td>
                                    <td>Meeting Room</td>
                                    <td>Albert Lim</td>
                                </tr>

                                <tr>
                                    <td>Meeting</td>
                                    <td>May 1, 2022</td>
                                    <td>11:00AM</td>
                                    <td>Meeting Room</td>
                                    <td>Albert Lim</td>
                                </tr>

                                <tr>
                                    <td>Meeting</td>
                                    <td>May 1, 2022</td>
                                    <td>11:00AM</td>
                                    <td>Meeting Room</td>
                                    <td>Albert Lim</td>
                                </tr>

                                <tr>
                                    <td>Meeting</td>
                                    <td>May 1, 2022</td>
                                    <td>11:00AM</td>
                                    <td>Meeting Room</td>
                                    <td>Albert Lim</td>
                                </tr>

                                <tr>
                                    <td>Meeting</td>
                                    <td>May 1, 2022</td>
                                    <td>11:00AM</td>
                                    <td>Meeting Room</td>
                                    <td>Albert Lim</td>
                                </tr>

                                <tr>
                                    <td>Meeting</td>
                                    <td>May 1, 2022</td>
                                    <td>11:00AM</td>
                                    <td>Meeting Room</td>
                                    <td>Albert Lim</td>
                                </tr>
                                <tr>
                                    <td>Meeting</td>
                                    <td>May 1, 2022</td>
                                    <td>11:00AM</td>
                                    <td>Meeting Room</td>
                                    <td>Albert Lim</td>
                                </tr>

                                <tr>
                                    <td>Meeting</td>
                                    <td>May 1, 2022</td>
                                    <td>11:00AM</td>
                                    <td>Meeting Room</td>
                                    <td>Albert Lim</td>
                                </tr>

                                <tr>
                                    <td>Meeting</td>
                                    <td>May 1, 2022</td>
                                    <td>11:00AM</td>
                                    <td>Meeting Room</td>
                                    <td>Albert Lim</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>