<!DOCTYPE html>

<?php

 $feedback_message = isset($_GET["msg"]) ? $_GET["msg"] : "";

include "../config/connection.php";

session_start();

// For logout

if(isset($_GET["sign"]))
{
    $sign=$_GET["sign"];
    if($sign=="out")
    {
        unset($_SESSION["parent_student_twis_data_2020"]);
        
        header("location:../login.php");}
    }
    

// For checking if the user logged in

if(isset($_SESSION['parent_student_twis_data_2020']) == false){
    header("Location:../login.php");
}else{
    ?>


                                <?php

                                $sql1="SELECT * from student where student_username='$_SESSION[parent_student_twis_data_2020]'";
                                $result1=$conn->query($sql1);


                                while ($row1 = $result1->fetch_assoc()) {
                                $s_id=$row1['student_id'];
                                $s_username=$row1['student_username'];
                                $s_Fname=$row1['student_Fname'];
                                $s_Lname=$row1['student_Lname'];
                                $school=$row1['parent_id'];
                                $s_gender=$row1['student_gender'];
                                $s_level=$row1['level_id'];
                                $s_pass=$row1['student_password'];
                                $s_profile=$row1['student_profile'];

                                $sql2="SELECT * FROM parent where parent_id='$school' ";
                                $result2=$conn->query($sql2);


                                while ($row2 = $result2->fetch_assoc()) {

                                    $sub_plan=$row2['sub_id'];

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
    <title>Twisomere :: Parent Child</title>

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
    <link href="../assets/vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="../assets/images/icon/logo.png" alt="Twisomere" />
                </a>
            </div>
                                                        <?php
                                                            if (empty($s_profile)) {
                                                                $fileName = "avatar.png";
                                                            } else {
                                                                $fileName = "$s_profile";
                                                            }
                                                            
                                                        ?>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="student_profiles/<?php echo $fileName ?>" alt="<?php echo $s_username ?>" style="width:100%;height: 100%;" />
                    </div>
                    <h4 class="name"><?php echo $s_username ?></h4>
                    <a href="?sign=out" id="logout">Sign out</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>My Panel
                            </a>
                        </li>
                        <li>
                            <a href="index.php?view_book">
                                <i class="fas fa-book"></i>Books</a>
                            
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-file"></i>Book Data
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="table.html">
                                        <i class="fas fa-file-text"></i>Test</a>
                                </li>
                                <li>
                                    <a href="form.html">
                                        <i class="fa fa-tasks"></i>Remarks</a>
                                </li>
                            </ul>
                        </li><!-- 
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-trophy"></i>Trophies
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="table.html">
                                        <i class="fas fa-video"></i>Videos</a>
                                </li>
                                <li>
                                    <a href="form.html">
                                        <i class="far fa-game"></i>Games</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="index.php">
                                <i class="fas fa-users"></i>Friends</a>
                        </li> -->
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="../assets/images/icon/logo.png" alt="Twisomere" />
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">
                                    <i class="zmdi zmdi-search"></i>
                                    <div class="search-dropdown js-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-button-item has-noti js-item-menu">
                                    <i class="zmdi zmdi-notifications"></i>
                                    <div class="notifi-dropdown js-dropdown">
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
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
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
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="../assets/images/icon/logo.png" alt="Twisomere" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            <img src="student_profiles/<?php echo $fileName ?>" alt="<?php echo $s_username ?>" style="width:100%;height: 100%;" />
                        </div>
                        <h4 class="name"><?php echo $s_username ?></h4>
                        <a href="?sign=out" id="logout">Sign out</a>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            <li>
                                <a class="js-arrow" href="index.php">
                                    <i class="fas fa-tachometer-alt"></i>My Panel
                                </a>
                            </li>
                            <li>
                                <a href="index.php?view_book">
                                    <i class="fas fa-book"></i>Books</a>
                                
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-file"></i>Book Data
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="table.html">
                                            <i class="fas fa-file-text"></i>Test</a>
                                    </li>
                                    <li>
                                        <a href="form.html">
                                            <i class="fa fa-tasks"></i>Remarks</a>
                                    </li>
                                    </ul>
                            </li>
                            <li>
                                <a href="index.php?profile">
                                    <i class="zmdi zmdi-account"></i>Account
                                </a>
                            </li>
                            <li>
                                <a href="index.php?settings">
                                    <i class="zmdi zmdi-settings"></i>Setting
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
            <section >
                <br>
                <br>
                <br>
            </section>
            <!-- END BREADCRUMB-->



    <?php

        $check_data=0;

        if ($sub_plan == $check_data) {
            ?>
                <div style="width: 100%;padding: 30px;">
                    <div class="sufee-alert alert with-close alert-info alert-dismissible fade show">
                        <span class="badge badge-pill badge-info">Warning</span>
                        Dear <?php echo $s_Fname; ?> , You Dont Have Active Subscrprtion , Please Ask Your Parent To Make Another New Subscription In Order To Read Your Books.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                </div>
            <?php
        }
        
        if(isset($_GET['home']))
        {
            include("home.php");
        }

         elseif(isset($_GET['view_book']))
        {           
            include("view_books.php");
        }

         elseif(isset($_GET['read_book_content']))
        {           
            include("read_book.php");
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

         else
        {
            include("home.php");
        }

        ?> 

            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2020 Twisomere. All rights reserved by <a href="#">Twisomere</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
    <script src="../assets/vendor/vector-map/jquery.vmap.js"></script>
    <script src="../assets/vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="../assets/vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="../assets/vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="../assets/js/main.js"></script>

</body>

</html>
<!-- end document-->
<?php
}
}
}
?>
<!-- end document-->