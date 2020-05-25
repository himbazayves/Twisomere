<!DOCTYPE html>
<html lang="en">
<?php
include "config/connection.php";
?>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="East Africa Reservation">
    <meta name="author" content="Prince NP">
    <meta name="keywords" content="East Africa Hotel">
  <!-- Title -->
    <title>Twisomere :: School</title>

    <!-- Favicon -->
    <link rel="icon" href="assets/images/icon/logo.jpg">
    <link rel="apple-touch-icon" href="assets/images/logo.jpg">
    <link rel="shortcut icon" href="assets/images/logo.jpg"> 

    <!-- Fontfaces CSS-->
    <link href="assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition" style="overflow:auto;" bgcolor="red">
    <div class="page-content--bge5">
        <div class="page-content">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="assets/images/icon/test.png" alt="Twisomere" style="width: 70%;">
                            </a>
                        </div>
                        <div id="new_client_message">
                        </div>
                        <div class="login-form">
                            <form action="#/" onsubmit="new_school();return false;" method="post">
                                
        
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" id="username" name="username" placeholder="Your UserName" required autofocus >
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="au-input au-input--full" type="text" id="email" name="email" placeholder="Your Email" required autofocus >
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" id="password" name="password" placeholder="Password" required autofocus  >
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input class="au-input au-input--full" type="password" id="confirm_password" name="password" placeholder="Password" required autofocus onkeyup='check();'>
                                    <span id='message'></span>


                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree">Agree the terms and policy
                                    </label>
                                </div>
                                <span id='reg_button'></span>
                            </form>
                            <div class="register-link">
                                <p>
                                    Do you have account?
                                    <a href="login.php">Sign In</a>
                                </p>
                                <p>
                                    Go Back
                                    <a href="../index.php">Home</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        var check = function() {
          if (document.getElementById('password').value ==
            document.getElementById('confirm_password').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'Password Match';
            document.getElementById('reg_button').innerHTML = '<button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>';

          } else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'Password is Not Matching';
          }
        }
    </script>

    <!-- Jquery JS-->
    <script src="assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="assets/vendor/slick/slick.min.js">
    </script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/vendor/animsition/animsition.min.js"></script>
    <script src="assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
<!-- end document-->