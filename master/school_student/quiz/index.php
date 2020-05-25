 <?php include "database.php";
 session_start();
 $_SESSION['trial']=2;
 $_SESSION['limit']=0;
 
 
 ?>

<?php
  //Get the total questions
  $limit=$_SESSION['limit'];
  
  $book_id = $_GET['b_id'];
  
	$query="select * from questions WHERE book_id=$book_id";
	//Get Results
	$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
    $_SESSION['total']=$results->num_rows;
    $total = $_SESSION['total'];
    $_SESSION['number']=1;
  
  
  //SELECT officer_name   FROM officers  LIMIT 1;  
  
  
  //$query = "select * from `questions` where book_id = $book_id LIMIT 1";
  $query = "select * from `questions` where book_id = $book_id LIMIT $limit,1";

	//Get results
	$data = $mysqli->query($query) or die($mysqli->error.__LINE__);
  $row=$data->fetch_assoc() ;
  
  
  

 ?>
<!DOCTYPE html>
<!DOCTYPE html>

<?php

include "connection.php";



// For logout

if(isset($_GET["sign"]))
{
    $sign=$_GET["sign"];
    if($sign=="out")
    {
        unset($_SESSION["school_student_twis_data_2020"]);
        
        header("location:../login.php");}
    }
    

// For checking if the user logged in

if(isset($_SESSION['school_student_twis_data_2020']) == false){
    header("Location:.../login.php");
}else{
    ?>


                                <?php

                                $sql1="SELECT * from student where student_username='$_SESSION[school_student_twis_data_2020]'";
                                $result1=$conn->query($sql1);


                                while ($row1 = $result1->fetch_assoc()) {
                                $s_id=$row1['student_id'];
                               
                                $s_username=$row1['student_username'];
                                $s_Fname=$row1['student_Fname'];
                                $s_Lname=$row1['student_Lname'];
                                $school=$row1['school_id'];
                                $s_mail=$row1['student_gender'];
                                $s_level=$row1['level_id'];
                                $s_pass=$row1['student_password'];
                                $s_profile=$row1['student_profile'];

                                $sql2="SELECT * FROM school where school_id='$school' ";
                                $result2=$conn->query($sql2);


                                while ($row2 = $result2->fetch_assoc()) {

                                    $sub_plan=$row2['sub_id'];

                                    ?>
                                    <?php 
                                    
                                $_SESSION['student_id']=$row1['student_id'];
                                    
                                    
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
    <title>Twisomere ::School Student</title>

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
    <link href="assets/vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/css/theme.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" />

</head>

<body class="animsition">

<?php
if (empty($s_profile)) {
$fileName = "avatar.png";
} 
else {
        $fileName = "$s_profile";
 }
                                                            
?>
 

        


            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="images/icon/logo-white.png" alt="Cool Admin" />
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
                                <a href="#">
                                    <i class="zmdi zmdi-account"></i>Account
                                </a>
                            </li>
                            <li>
                                <a href="#">
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

        
        ?> 
    <div id="container">
     




<?php

$student_id=$_SESSION['student_id'];
    $sql= "select * from quiz_result WHERE student_id=$student_id and book_id=$book_id";
 
 $results = $mysqli->query($sql) or die ($mysqli->error.__LINE__);
 
 $count=mysqli_num_rows($results);
 $row = $results->fetch_assoc()

 ?>

 
<?php if ($count>0) :?>

<div class="alert alert-warning" role="alert">
    Munyeshuli wakoze ikizamini kuri iki gitabo  ,amanota wabonye ni <strong> <?php echo  $row['score'] ?> </strong>!
     <a href="../index.php"> Kanda hano usubire inyuma</a>
   </div>
   <?php else:?>

      <div class="card">

  


          

            <div class="card-header">
                                      
                                      <div class="alert alert-warning" role="alert">
                                          Mbere yuko utangira banza usome neza amabwiriza!
                                      </div>
                                  </div>
                                  <div class="card-body">
                                      <div class="alert alert-success" role="alert">
                                          <h4 class="alert-heading">Iri ni igereza ryoroshye ku gitabo umaze gusoma!</h4>
                                          <p><div class="alert alert-light" role="alert">
                                          <strong>Umubare w'ibibazo: </strong><?php echo $total; ?>
                                      </div>
                                  </p>


                                  <p><div class="alert alert-light" role="alert">
                                  <strong>Ubwoko bw'ibibazo: </strong> Guhitamo
                                      </div>
                                  </p>
                                          
                                  <p><div class="alert alert-light" role="alert">
                                  <strong>Igihe kigenwe : </strong><?php echo $total*0.5; ?> minutes
                                      </div>
                                  </p>

                                  <p><div class="alert alert-light" role="alert">
                                  <strong>Inshuro wemerewe gukora: </strong>  3 (Igihe cyose wumva udashimishijwe na matona yawe ushobora gusubiramo inshuro ibyeri ariko ayanyuma niyo yandikwa )
                                      </div>
                                  </p>
                                  
                                  <hr>
                                          <p class="mb-0"><a href="question.php?n=<?php echo $row['question_number'] ?>&book_id=<?php echo $book_id ?>"  class="btn btn-success">
      <i class="fa fa-magic"></i>&nbsp; Tangira igerageza </a>
  </p>
                                      </div>
                                      </div>

        <?php endif ?>

								
                                        
        </div>

     

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
    <script src="assets/vendor/vector-map/jquery.vmap.js"></script>
    <script src="assets/vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="assets/js/main.js"></script>

</body>

</html>
<!-- end document-->
<?php
}
}
}
?>
<!-- end document-->