
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">


    <!-- Favicon -->
    <link rel="icon" href="../../img/core-img/favicon.png">

    <!-- Fontfaces CSS-->
    <link href="../../assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../../assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../assets/css/theme.css" rel="stylesheet" media="all">

</head>


<body>

<?php
    
    include "../config/connection.php";

    $s_id = $_POST['s_id'];
    $s_Fname = $_POST['s_Fname'];
    $s_Lname = $_POST['s_Lname'];
    $s_pass = $_POST['s_pass'];


if(empty($_FILES['profile']['name'])||empty($s_Lname)||empty($s_Fname)||empty($s_id)||empty($s_pass)) {

    header("Location:index.php?settings&msg=<div class='sufee-alert alert with-close alert-danger alert-dismissible fade show'> <span class='badge badge-pill badge-danger'>Alert</span> Dear ,You have not filled all fields .<button type='button' class='close' data-dismiss='alert' aria-label='Close' style=' onclick='location.reload();'>X</button><br></div>"); 
        exit; 
}
else
{

    
    $profile=$_FILES['profile'];
    $file_name = $_FILES['profile']['name'];    
    $file_location = $_FILES['profile']['tmp_name'];
    $new_file_name = "$file_name";


    if(move_uploaded_file($file_location, "student_profiles/" . $new_file_name)){
                        
        $sql="UPDATE student set student_Fname='$s_Fname',student_Lname='$s_Lname',student_password='$s_pass',student_profile='$new_file_name' where student_id='$s_id'";

                if ($conn->query($sql)===TRUE) 
                {

                    header("Location:index.php?settings&msg=<div class='sufee-alert alert with-close alert-success alert-dismissible fade show'><span class='badge badge-pill badge-success'>Done</span> Darling , You have succeffuly update Profile and Settings Data .<button type='button' class='close' data-dismiss='alert' aria-label='Close' style=' onclick='location.reload();'>X</button><br></div>"); 
                        exit;

                }
                else
                {
                    header("Location:index.php?settings&msg=<div class='sufee-alert alert with-close alert-success alert-dismissible fade show'><span class='badge badge-pill badge-success'>Done</span> Darling ,Sorry Something went wrong. Please try again .<button type='button' class='close' data-dismiss='alert' aria-label='Close' style=' onclick='location.reload();'>X</button><br></div>"); 
                        exit;
                }
    }
}
                        
 ?>



 <!-- Jquery JS-->
    <script src="../../assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../../assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../../assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../../assets/vendor/slick/slick.min.js">
    </script>
    <script src="../../assets/vendor/wow/wow.min.js"></script>
    <script src="../../assets/vendor/animsition/animsition.min.js"></script>
    <script src="../../assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../../assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../../assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../../assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../../assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../../assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../../assets/js/main.js"></script>
    <script src="../../js/main.js"></script>

</body>
</html>