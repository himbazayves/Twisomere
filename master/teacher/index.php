<!DOCTYPE html>

<?php

include "../config/connection.php";

session_start();

// For logout

if(isset($_GET["sign"]))
{
    $sign=$_GET["sign"];
    if($sign=="out")
    {
        unset($_SESSION["teacher_twis_data_2020"]);
        
        header("location:../login.php");}
    }
    

// For checking if the user logged in

if(isset($_SESSION['teacher_twis_data_2020']) == false){
    header("Location:../login.php");
}else{
    ?>


                                <?php

                                $sql5="SELECT * from teacher where teacher_username='$_SESSION[teacher_twis_data_2020]'";
                                $result5=$conn->query($sql5);


                                while ($row5 = $result5->fetch_assoc()) {
                                $t_id=$row5['teacher_id'];
                                $t_username=$row5['teacher_username'];
                                $t_Fname=$row5['teacher_Fname'];
                                $t_Lname=$row5['teacher_Lname'];
                                $s_id=$row5['school_id'];
                                $t_mail=$row5['teacher_email'];
                                $t_tel=$row5['teacher_tel'];
                                $t_level=$row5['level_id'];
                                $t_pass=$row5['teacher_password'];
                                $t_status=$row5['teacher_status'];
                                $t_profile=$row5['teacher_profile'];


                                if ($t_status == 0) {
                                    # the first time of hotels registration
                                    ?>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Twisomere :: Teacher </title>

    <!-- Favicon -->
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
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="../assets/images/icon/logo.png" alt="Twisomere">
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
                                <i class="fas fa-tachometer-alt"></i>My Panel</a>
                        </li>                
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                    <img src="../assets/images/icon/logo.png" alt="Twisomere">
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list"> 
                        <li>
                            <a href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="index.php?complete_profile">
                                <i class="fas fa-building"></i>Complete Profile</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="index.php?search" method="POST">
                                <input class="au-input au-input--xl" type="text" name="valueToSearch" placeholder="Search for anything" />
                                <button class="au-btn--submit" name="search" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                                        <?php
                                                            if (empty($t_profile)) {
                                                                $fileName = "avatar.png";
                                                            } else {
                                                                $fileName = "$profile_pic";
                                                            }
                                                            
                                                        ?>
                                           <img src="teacher_profile/<?php echo $fileName ?>" alt="<?php echo $t_username ?>" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $t_username ?></a></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="teacher_profile/<?php echo $fileName ?>" alt="<?php echo $t_username ?>" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $t_username ?></a></a>
                                                    </h5>
                                                    <span class="email"><?php echo $t_mail ?> </a></span>
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
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    
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

                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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
                                } else {
                                    # the normal hotels running
                                    ?>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Twisomere :: Teacher </title>

    <!-- Favicon -->
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
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="../assets/images/icon/logo.png" alt="Twisomere">
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

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-users"></i>Student</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.php?add_student">New Student</a>
                                </li>
                                <li>
                                    <a href="index.php?view_my_students">Manage Student</a>
                                </li>
                            </ul>
                        </li>  

                        <li class="has-sub">
                            <a href="index.php?remarks">
                                <i class="fas fa-file-text"></i>Remarks</a>
                        </li>

                        <li class="has-sub">
                            <a href="index.php">
                                <i class="fas fa-comments"></i>Comments</a>
                        </li>                
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                    <img src="../assets/images/icon/logo.png" alt="Twisomere">
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list"> 
                        <li>
                            <a href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-users"></i>Student</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.php?add_student">New Student</a>
                                </li>
                                <li>
                                    <a href="index.php?view_my_students">Manage Student</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="index.php?remarks">
                                <i class="fas fa-file-text"></i>Remarks</a>
                        </li>
                        <li>
                            <a href="index.php">
                                <i class="fas fa-comments"></i>Comments</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="index.php?search" method="POST">
                                <input class="au-input au-input--xl" type="text" name="valueToSearch" placeholder="Search for anything" />
                                <button class="au-btn--submit" name="search" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news comment</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno">
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers">
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Notification</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey">
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey">
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey">
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                                        <?php
                                                            if (empty($t_profile)) {
                                                                $fileName = "avatar.png";
                                                            } else {
                                                                $fileName = "$t_profile";
                                                            }
                                                            
                                                        ?>
                                           <img src="teacher_profile/<?php echo $fileName ?>" alt="<?php echo $t_username ?>" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $t_username ?></a></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="teacher_profile/<?php echo $fileName ?>" alt="<?php echo $t_username ?>" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $t_username ?></a></a>
                                                    </h5>
                                                    <span class="email"><?php echo $t_mail ?> </a></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="index.php?profile ">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="index.php?settings">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
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
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    
                    <?php
    if(isset($_GET['home']))
        {
            include("home.php");
        }

         elseif(isset($_GET['add_student']))
        {           
            include("new_student.php");
        }

         elseif(isset($_GET['view_my_students']))
        {           
            include("view_students.php");
        }

         elseif(isset($_GET['profile']))
        {           
            include("profile.php");
        }

         elseif(isset($_GET['settings']))
        {           
            include("settings.php");
        }

         elseif(isset($_GET['view_marks']))
        {           
            include("view_student_marks.php");
        }

         elseif(isset($_GET['remarks']))
        {           
            include("remarks.php");
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

                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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
                    <?php
                        $sql1="SELECT COUNT(*) AS male_student FROM student WHERE school_id='$s_id' AND level_id='$t_level' AND student_gender='male' ";
                        $result1=$conn->query($sql1);
                        while ($row1 = $result1->fetch_assoc()) {
                            $male=$row1['male_student'];
                        }
                    ?>
                     // end school select 

                    // Parent Childrens select
                    <?php
                        $sql2="SELECT COUNT(*) AS female_student FROM student WHERE school_id='$s_id' AND level_id='$t_level' AND student_gender='female'  ";
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
</body>

</html>
                                    <?php
                                }
                                

                                }

                                ?>


<!-- end document-->
<?php

}
?>