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
            unset($_SESSION["master_twis_data_2020"]);
            
            header("location:../login.php");}
        }
        

    // For checking if the user logged in

    if(isset($_SESSION['master_twis_data_2020']) == false){
        header("Location:../login.php");
    }else{
?>

                            <?php

                                $sql5="SELECT * from admin where admin_username='$_SESSION[master_twis_data_2020]'";
                                $result5=$conn->query($sql5);


                                while ($row5 = $result5->fetch_assoc()) {
                                $m_id=$row5['admin_id'];
                                $m_username=$row5['admin_username'];
                                $m_Fname=$row5['admin_Fname'];
                                $m_Lname=$row5['admin_Lname'];
                                $m_mail=$row5['admin_email'];
                                $m_password=$row5['admin_password'];
                                $m_tel=$row5['admin_tel'];
                                $m_stat=$row5['admin_status'];
                                $m_profile=$row5['admin_profile'];


                            ?>


<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Twisomere :: Master Admin</title>

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
                            <img src="../assets/images/icon/logo_white" alt="Twisomere" style="width: 23%;display: inline-block;" />
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
                                    <span class="bot-line"></span>Subscrption</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="index.php?new_subscription">New Subscrption</a>
                                    </li>
                                    <li>
                                        <a href="index.php?view_subscription">Manage Subscrption</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-tasks"></i>
                                    <span class="bot-line"></span>Level</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="index.php?new_level">New Level</a>
                                    </li>
                                    <li>
                                        <a href="index.php?view_level">Manage Level</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-book"></i>
                                    <span class="bot-line"></span>Books</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="index.php?new_book">New Book</a>
                                    </li>
                                    <li>
                                        <a href="index.php?view_books">Manage Books</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-file"></i>
                                    <span class="bot-line"></span>Quiz</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="index.php?add_quiz">New Quiz</a>
                                    </li>
                                    <li>
                                        <a href="register.html">Manage Quiz</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-building"></i>
                                    <span class="bot-line"></span>Schools</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="index.php?all_schools">All Schools</a>
                                    </li>
                                    <li>
                                        <a href="#">Manage Schools</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-users"></i>
                                    <span class="bot-line"></span>Parents</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="index.php?all_parents">All Parents</a>
                                    </li>
                                    <li>
                                        <a href="#">Manage Parents</a>
                                    </li>
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
                            </div>
                        </div>
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <?php

                                        if (empty($m_profile)) {
                                            $fileName = "profile.jpg";
                                        } else {
                                            $fileName = "$m_profile";
                                        }

                                    ?>
                                    <img src="profile_data/<?php echo $fileName ?>" alt="<?php echo $m_username ?>" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#"><?php echo $m_username ?></a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="profile_data/<?php echo $fileName ?>" alt="<?php echo $m_username ?>"/>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#"><?php echo $m_username ?></a>
                                            </h5>
                                            <span class="email"><?php echo $m_mail ?></span>
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
                            <img src="../assets/images/icon/logo_white.png" alt="Twisomere" style="width: 50%;"  />
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
                                </a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-inbox"></i>
                                    <span class="bot-line"></span>Subscrption</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.php?new_subscription">New Subscrption</a>
                                </li>
                                <li>
                                    <a href="index.php?view_subscription">Manage Subscrption</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tasks"></i>
                                    <span class="bot-line"></span>Level</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.php?new_level">New Level</a>
                                </li>
                                <li>
                                    <a href="index.php?view_level">Manage Level</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-book"></i>
                                    <span class="bot-line"></span>Books</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.php?new_book">New Book</a>
                                </li>
                                <li>
                                    <a href="index.php?view_books">Manage Books</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-file"></i>
                                    <span class="bot-line"></span>Quiz</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.php?add_quiz">New Quiz</a>
                                </li>
                                <li>
                                    <a href="register.html">Manage Quiz</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-building"></i>
                                    <span class="bot-line"></span>Schools</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.php?all_schools">All Schools</a>
                                </li>
                                <li>
                                    <a href="#">Manage Schools</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-users"></i>
                                    <span class="bot-line"></span>Parents</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.php?all_parents">All Parents</a>
                                </li>
                                <li>
                                    <a href="#">Manage Parents</a>
                                </li>
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
                        </div>
                    </div>
                </div>
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="profile_data/<?php echo $fileName ?>" alt="<?php echo $m_username ?>" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#"><?php echo $m_username ?></a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="profile_data/<?php echo $fileName ?>" alt="<?php echo $m_username ?>" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#"><?php echo $m_username ?></a>
                                    </h5>
                                    <span class="email"><?php echo $m_mail ?></span>
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

                         elseif(isset($_GET['new_subscription']))
                        {           
                            include("new_subscription.php");
                        }

                         elseif(isset($_GET['view_subscription']))
                        {           
                            include("view_subscription.php");
                        }

                         elseif(isset($_GET['new_book']))
                        {           
                            include("new_book.php");
                        }

                         elseif(isset($_GET['view_books']))
                        {           
                            include("view_books.php");
                        }

                         elseif(isset($_GET['new_level']))
                        {           
                            include("new_level_data.php");
                        }

                         elseif(isset($_GET['view_level']))
                        {           
                            include("view_level.php");
                        }

                         elseif(isset($_GET['all_schools']))
                        {           
                            include("view_schools.php");
                        }

                         elseif(isset($_GET['all_parents']))
                        {           
                            include("view_parents.php");
                        }

                         elseif(isset($_GET['settings']))
                        {           
                            include("settings.php");
                        }

                         elseif(isset($_GET['profile']))
                        {           
                            include("profile.php");
                        }

                         elseif(isset($_GET['new_quiz']))
                        {           
                            include("new_quiz.php");
                        }

                         elseif(isset($_GET['add_quiz']))
                        {           
                            include("create_quiz.php");
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
                                <p>Copyright © <?php echo date('Y') ; ?> Twisomere. All rights reserved by <a href="#">Twisomere</a>.</p>
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
                        $sql1="SELECT COUNT(*) AS student_number FROM student where parent_id=0";
                        $result1=$conn->query($sql1);
                        while ($row1 = $result1->fetch_assoc()) {
                            $stu_nbr=$row1['student_number'];
                        }
                    ?>
                     // end school select 

                    // Parent Childrens select
                    <?php
                        $sql2="SELECT COUNT(*) AS child_number FROM student where school_id=0 ";
                        $result2=$conn->query($sql2);
                        while ($row2 = $result2->fetch_assoc()) {
                            $chil_nbr=$row2['child_number'];
                        }
                    ?>
                     // end school select 

                        try {

                                // Percent Chart 2
                                var ctx = document.getElementById("test_2");
                                if (ctx) {
                                  ctx.height = 209;
                                  var myChart = new Chart(ctx, {
                                    type: 'doughnut',
                                    data: {
                                      datasets: [
                                        {
                                          label: "All Childrens",
                                          data: [<?php echo $stu_nbr ?>, <?php echo $chil_nbr ?>],
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
                                        'Students',
                                        'Parent Childrens'
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

</body>

</html>
<?php
}
}
?>