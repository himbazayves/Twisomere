<!DOCTYPE html>
<html lang="en">
<?php

    include "../config/connection.php";

    session_start();

    // For logout

    if(isset($_GET["sign"]))
    {
        $sign=$_GET["sign"];
        if($sign=="out")
        {
            unset($_SESSION["school_twis_data_2020"]);
            
            header("location:../login.php");}
        }
        

    // For checking if the user logged in

    if(isset($_SESSION['school_twis_data_2020']) == false){
        header("Location:../login.php");
    }else{
?>

                            <?php

                                $sql5="SELECT * from school where school_name='$_SESSION[school_twis_data_2020]'";
                                $result5=$conn->query($sql5);


                                while ($row5 = $result5->fetch_assoc()) {
                                $s_id=$row5['school_id'];
                                $sub_id=$row5['sub_id'];
                                $s_username=$row5['school_name'];
                                $s_mail=$row5['school_email'];
                                $s_password=$row5['school_password'];
                                $s_tel=$row5['school_tel'];
                                $s_stat=$row5['school_status'];
                                $s_profile=$row5['school_profile'];

                                if ($s_stat == 0) {
                                    # the first time of hotels registration

                            ?>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Twisomere :: School Admin</title>

    <link rel="icon" href="../assets/images/icon/logo.jpg">
    <link rel="apple-touch-icon" href="../assets/images/logo.jpg">
    <link rel="shortcut icon" href="../assets/images/logo.jpg"> 

    <!-- Fontfaces CSS-->
    <link href="../assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="index.php">
                            <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub">
                                <a href="index.php">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li>
                                <a href="index.php?complete_profile">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span class="bot-line"></span>Complete Profile</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="header-button-item js-item-menu">
                            <i class="zmdi zmdi-settings"></i>
                            <div class="setting-dropdown js-dropdown">
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="profile_data/avatar.xPadding" alt="<?php echo $s_username ?>" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#"><?php echo $s_username ?></a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="profile_data/avatar.xPadding" alt="<?php echo $s_username ?>" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#"><?php echo $s_username ?></a>
                                            </h5>
                                            <span class="email"><?php echo $s_mail ?></span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="?sign=out" id="logout">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="index.php?complete_profile">
                                <i class="fas fa-chart-bar"></i>Complete Profile</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                <div class="header-button-item js-item-menu">
                    <i class="zmdi zmdi-settings"></i>
                    <div class="setting-dropdown js-dropdown">
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-account"></i>Account</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="profile_data/avatar.xPadding" alt="John Doe" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#"><?php echo $s_username ?></a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="profile_data/avatar.xPadding" alt="John Doe" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#"><?php echo $s_username ?></a>
                                    </h5>
                                    <span class="email"><?php echo $s_mail ?></span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="?sign=out" id="logout">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

                <?php
                    if(isset($_GET['complete_profile']))
                        {
                            include("complete_profile.php");
                        }


                         else
                        {
                            include("complete_profile.php");
                        }

                    ?> 

            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © <?php echo date('Y');?> Twisomere. All rights reserved by <a href="#">Twisomere</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="../assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../assets/vendor/slick/slick.min.js">
    </script>
    <script src="../assets/vendor/wow/wow.min.js"></script>
    <script src="../assets/vendor/animsition/animsition.min.js"></script>
    <script src="../assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../assets/js/main.js"></script>
    <script src="../js/main.js"></script>

</body>

</html>
<!-- end document-->

<?php
                                } else {
                                    # the normal school running
                                    ?>

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Twisomere :: School Admin</title>


    <link rel="icon" href="../assets/images/icon/logo.jpg">
    <link rel="apple-touch-icon" href="../assets/images/logo.jpg">
    <link rel="shortcut icon" href="../assets/images/logo.jpg"> 

    <!-- Fontfaces CSS-->
    <link href="../assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub">
                                <a href="index.php">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-inbox"></i>
                                    <span class="bot-line"></span>Subscription</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="index.php?new_subscribe">New Subscription</a>
                                    </li>
                                    <li>
                                        <a href="index.php?view_subscription">View Subscription</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-user"></i>
                                    <span class="bot-line"></span>Teachers</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="index.php?teacher">New Teacher</a>
                                    </li>
                                    <li>
                                        <a href="index.php?view_teacher">Manage Teachers</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-users"></i>
                                    <span class="bot-line"></span>Students</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="index.php?view_students_list">All Students</a>
                                    </li>
                                    <!-- <li>
                                        <a href="#">Manage Students</a>
                                    </li> -->
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="header-button-item has-noti js-item-menu">
                            <i class="zmdi zmdi-notifications"></i>
                            <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                                <div class="notifi__title">
                                    <p>You have 3 Notifications</p>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a email notification</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c2 img-cir img-40">
                                        <i class="zmdi zmdi-account-box"></i>
                                    </div>
                                    <div class="content">
                                        <p>Your account has been blocked</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c3 img-cir img-40">
                                        <i class="zmdi zmdi-file-text"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a new file</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__footer">
                                    <a href="#">All notifications</a>
                                </div>
                            </div>
                        </div>
                        <div class="header-button-item js-item-menu">
                            <i class="zmdi zmdi-settings"></i>
                            <div class="setting-dropdown js-dropdown">
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="index.php?profile">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="index.php?settings">
                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <?php

                                        if (empty($s_profile)) {
                                            $fileName = "profile.jpg";
                                        } else {
                                            $fileName = "$s_profile";
                                        }

                                    ?>
                                    <img src="profile_data/<?php echo $fileName ?>" alt="<?php echo $s_username ?>" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#"><?php echo $s_username ?></a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="profile_data/<?php echo $fileName ?>" alt="<?php echo $s_username ?>" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#"><?php echo $s_username ?></a>
                                            </h5>
                                            <span class="email"><?php echo $s_mail ?></span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="index.php?profile">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="index.php?settings">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="?sign=out" id="logout">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="index.php">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="bot-line"></span>
                                </a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-inbox"></i>
                                    <span class="bot-line"></span>Subscription</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.php?new_subscribe">New Subscription</a>
                                </li>
                                <li>
                                    <a href="index.php?view_subscription">View Subscription</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>
                                    <span class="bot-line"></span>Teachers</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.php?teacher">New Teacher</a>
                                </li>
                                <li>
                                    <a href="index.php?view_teacher">Manage Teachers</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-users"></i>
                                    <span class="bot-line"></span>Students</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.php?view_students_list">All Students</a>
                                </li>
                                <!-- <li>
                                    <a href="#">Manage Students</a>
                                </li> -->
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                <div class="header-button-item has-noti js-item-menu">
                    <i class="zmdi zmdi-notifications"></i>
                    <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                        <div class="notifi__title">
                            <p>You have 3 Notifications</p>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c1 img-cir img-40">
                                <i class="zmdi zmdi-email-open"></i>
                            </div>
                            <div class="content">
                                <p>Your subscrption is about to end</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c2 img-cir img-40">
                                <i class="zmdi zmdi-account-box"></i>
                            </div>
                            <div class="content">
                                <p>New Student in your School</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c3 img-cir img-40">
                                <i class="zmdi zmdi-file-text"></i>
                            </div>
                            <div class="content">
                                <p>You got a new file</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__footer">
                            <a href="#">All notifications</a>
                        </div>
                    </div>
                </div>
                <div class="header-button-item js-item-menu">
                    <i class="zmdi zmdi-settings"></i>
                    <div class="setting-dropdown js-dropdown">
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-account"></i>Account</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                            </div>
                        </div>
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-notifications"></i>Notifications</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="profile_data/<?php echo $fileName ?>" alt="<?php echo $s_username ?>" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#"><?php echo $s_username ?></a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="profile_data/<?php echo $fileName ?>" alt="<?php echo $s_username ?>" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#"><?php echo $s_username ?></a>
                                    </h5>
                                    <span class="email"><?php echo $s_mail ?></span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="?sign=out" id="logout">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="au-breadcrumb-content">
                                <!-- <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Dashboard</li>
                                    </ul>
                                </div> -->
                                <form class="au-form-icon--sm" action="" method="post">
                                    <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for datas &amp; reports...">
                                    <button class="au-btn--submit2" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

                <?php
                    if(isset($_GET['home']))
                        {
                            include("home.php");
                        }

                         elseif(isset($_GET['view_subscription']))
                        {           
                            include("view_subscription_data.php");
                        }

                         elseif(isset($_GET['teacher']))
                        {           
                            include("new_teacher.php");
                        }

                         elseif(isset($_GET['view_teacher']))
                        {           
                            include("view_teacher_list.php");
                        }

                         elseif(isset($_GET['view_students_list']))
                        {           
                            include("view_students.php");
                        }

                         elseif(isset($_GET['new_subscribe']))
                        {           
                            include("new_subscription.php");
                        }

                         elseif(isset($_GET['settings']))
                        {           
                            include("settings.php");
                        }

                         elseif(isset($_GET['profile']))
                        {           
                            include("profile.php");
                        }

                         elseif(isset($_GET['']))
                        {           
                            include("");
                        }

                         elseif(isset($_GET['']))
                        {           
                            include("");
                        }
                         elseif(isset($_GET['']))
                        {           
                            include("");
                        }

                         elseif(isset($_GET['']))
                        {           
                            include("");
                        }

                         elseif(isset($_GET['']))
                        {           
                            include("");
                        }
                         else
                        {
                            include("home.php");
                        }

                    ?> 

            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © <?php echo date('Y');?> Twisomere. All rights reserved by <a href="#">Twisomere</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="../assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../assets/vendor/slick/slick.min.js">
    </script>
    <script src="../assets/vendor/wow/wow.min.js"></script>
    <script src="../assets/vendor/animsition/animsition.min.js"></script>
    <script src="../assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../assets/js/main.js"></script>
    <script src="../js/main.js"></script>

</body>

</html>
<?php
}
}
}
?>

<script>
    $('#month').change(function(){
       var span = document.getElementById("student").value;
       var money = document.getElementById("plan").value;
       var time = document.getElementById("month").value;
       document.getElementById("result").innerHTML = span * time * money;
   })

    (function() {
    
        // get references to select list and display text box
        var sel = document.getElementById('plan');
        var el = document.getElementById('plan_name');


        document.getElementById('plan').onchange = function () {
            el.value = sel.options[sel.selectedIndex].text;  
        }    
    }());
    // immediate function to preserve global namespac
</script>
    <script>
                  try {
                        //WidgetChart 5
                        var ctx = document.getElementById("test_1");
                        if (ctx) {
                          ctx.height = 220;
                          var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                              labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                              datasets: [
                                {
                                  label: "Books Published",
                                  data: [2, 81, 80, 64, 65, 80, 70, 75, 67, 85, 66, 68],
                                  borderColor: "transparent",
                                  borderWidth: "0",
                                  backgroundColor: "#00b5e9",
                                }
                              ]
                            },
                            options: {
                              maintainAspectRatio: true,
                              legend: {
                                display: false
                              },
                              scales: {
                                xAxes: [{
                                  display: false,
                                  categoryPercentage: 1,
                                  barPercentage: 0.65
                                }],
                                yAxes: [{
                                  display: false
                                }]
                              }
                            }
                          });
                        }

                      } catch (error) {
                        console.log(error);
                      }

                      // donut zero chart by red and blue

                      // school student select
                    <?php
                        $sql1="SELECT COUNT(*) AS male_student FROM student where school_id='$s_id' AND student_gender='male' ";
                        $result1=$conn->query($sql1);
                        while ($row1 = $result1->fetch_assoc()) {
                            $male=$row1['male_student'];
                        }
                    ?>
                     // end school select 

                    // Parent Childrens select
                    <?php
                        $sql2="SELECT COUNT(*) AS female_student FROM student where school_id='$s_id' AND student_gender='female'  ";
                        $result2=$conn->query($sql2);
                        while ($row2 = $result2->fetch_assoc()) {
                            $female=$row2['female_student'];
                        }
                    ?>
                     // end school select 

                        try {

                                // Percent Chart 2
                                var ctx = document.getElementById("students");
                                if (ctx) {
                                  ctx.height = 209;
                                  var myChart = new Chart(ctx, {
                                    type: 'doughnut',
                                    data: {
                                      datasets: [
                                        {
                                          label: "All Childrens",
                                          data: [<?php echo $male ?>, <?php echo $female ?>],
                                          backgroundColor: [
                                            '#00b5e9',
                                            '#fa4251'
                                          ],
                                          hoverBackgroundColor: [
                                            '#00b5e9',
                                            '#fa4251'
                                          ],
                                          borderWidth: [
                                            0, 0
                                          ],
                                          hoverBorderColor: [
                                            'transparent',
                                            'transparent'
                                          ]
                                        }
                                      ],
                                      labels: [
                                        'Male',
                                        'Female'
                                      ]
                                    },
                                    options: {
                                      maintainAspectRatio: false,
                                      responsive: true,
                                      cutoutPercentage: 87,
                                      animation: {
                                        animateScale: true,
                                        animateRotate: true
                                      },
                                      legend: {
                                        display: false,
                                        position: 'bottom',
                                        labels: {
                                          fontSize: 14,
                                          fontFamily: "Poppins,sans-serif"
                                        }

                                      },
                                      tooltips: {
                                        titleFontFamily: "Poppins",
                                        xPadding: 15,
                                        yPadding: 10,
                                        caretPadding: 0,
                                        bodyFontSize: 16,
                                      }
                                    }
                                  });
                                }

                              } catch (error) {
                                console.log(error);
                              }
    </script>