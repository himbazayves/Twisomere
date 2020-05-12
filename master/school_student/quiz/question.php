<?php include "database.php"; ?>
<?php session_start(); ?>
<?php
    //Set question number
    
    
    $n= $_SESSION['number'];
    $limit=$_SESSION['limit'];
	//$number = (int) $_GET['n'];
    $book_id = (int) $_GET['book_id'];
    $query = "select * from `questions` where book_id = $book_id LIMIT $limit,1";

    
	$data = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $row=$data->fetch_assoc() ;
    $number=$row['question_number'];

	//Get total number of questions
	$query = "select * from questions where book_id=$book_id";
	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total=$results->num_rows;

    // Get Question
    
    //$query = "select * from `questions` where book_id = $book_id LIMIT $_SESSION['limit'],1";
	$query = "select * from `questions` where question_number = $number and book_id=$book_id";

	//Get result
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$question = $result->fetch_assoc();
    

	// Get Choices
    $query = "select * from `choices` where question_number = $number";
//$query = "select * from `questions` where book_id = $book_id LIMIT $_SESSION['limit'],1";

	//Get results
	$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

 ?>
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
    header("Location:../login.php");
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
    <?php //include "header.php" ?>
          



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
      <header>
        <div class="container">
          <h1>Ibibazo ku gitabo</h1>
	</div>
      </header>


      <main>
      <div class="container">
        <div class="current"> <div class="alert alert-dark" role="alert">
            Ikibazo <?php echo $n; ?> muri <?php echo $total; ?>

            </div>
        
        </div>
	<p class="question">

    <div class="alert alert-warning" role="alert">
    <strong STYLE="text-transform:uppercase"> <bold> <?php echo $question['question'] ?>	?</bold>	</strong>							
	</div>
	  
	</p>
	<form method="post" action="process.php" class="form-horizontal">
	      <ul class="choices">
	        <?php while($row=$choices->fetch_assoc()): ?>
		<li>
           

        <div class="alert alert-light" role="alert">
            <input class="form-check-input" name="choice" type="radio" value="<?php echo $row['id']; ?>" />
          <?php echo $row['choice']; ?>
            </div>



		</li>
        
        
        
        <?php endwhile; ?>
          </ul>
          
          <?php if( $n== $total): ?>
        

          <button type="submit" class="btn btn-success">
        <i class="fa fa-magic"></i>&nbsp; Soza igeragezwa
    </button>
          <?php else : ?>

        <input  class="btn btn-outline-primary btn-lg active" type="submit" value="Komeza" />
          <?php endif ?>
		  <input type="hidden" name="book_id" value="<?php echo $book_id; ?>" />
	      <input type="hidden" name="number" value="<?php echo $number; ?>" />
	</form>
      </div>
    </div>
    </main>


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

    <script>
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>

</body>

</html>
<!-- end document-->
<?php
}
}
}
?>
<!-- end document-->