<!DOCTYPE html>



<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">


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

    </head>

<body>


<?php
include "../../config/connection.php";
?>

<?php 

    $plan=$_POST['plan'];
    $plan_name=$_POST['plan_name'];
    $month=$_POST['month'];
    $student=$_POST['student'];
    $school=$_POST['school'];
    $starting_date=date('Y-m-d');
    $end_time=date('Y-m-d',strtotime("+".$month." month"));
    $total_amount= $student * $plan *$month;

if(empty($plan)||empty($month)||empty($student)||empty($school)||empty($starting_date)){
?>
<div style="width: 100%;float: left;padding: 10px;">
    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show" >
        <span class="badge badge-pill badge-danger">Error</span>
            Sorry you Have not filled all fields.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>
</div>
<?php
    }else{

                    $sql="INSERT INTO subscription( `sub_parent`,`plan_name`, `sub_start_date`, `sub_end_time`,`sub_student_number`,`sub_total_price`,`sub_status`)
                    VALUE('$school','$plan_name','$starting_date','$end_time','$student','$total_amount','processed')";

                    $sql1=" UPDATE parent SET sub_id=1 WHERE parent_id='$school'";
                    if ($conn->query($sql)&&$conn->query($sql1)==TRUE) {
                        ?>
                    <div style="width: 100%;float: left;padding: 10px;">    
                        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                            <span class="badge badge-pill badge-success">Done</span>
                                You have Succefully Created Your Childrens Subscription.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="" onclick="location.reload();">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <br>
                        </div>
                    </div>
                        <?php
                    }
                    else
                    {
                        ?>
                        <div style="width: 100%;float: left;padding: 10px;">
                            <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                <span class="badge badge-pill badge-danger">Error</span>
                                Something went wrong. Please try again and try to refresh the page please.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                        </div>
                        <?php
                    }
}
         
    ?>

</body>
</html>