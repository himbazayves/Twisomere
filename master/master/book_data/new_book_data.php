
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../asset/css/normalize.css">
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="../asset/css/themify-icons.css">
    <link rel="stylesheet" href="../asset/css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="../asset/css/flag-icon.min.css">
    <link rel="stylesheet" href="../asset/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="../asset/css/bootstrap-select.less"> --> 
    <link rel="stylesheet" href="../asset/css/style.css"> 

    <script src="../asset/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="../asset/js/popper.min.js"></script>
    <script src="../asset/js/plugins.js"></script>
    <script src="../asset/js/main.js"></script>

  
    <script src="../js/princeop.js"></script>

    <!--Flot Chart-->

    <script src="../asset/js/lib/flot-chart/jquery.flot.js"></script>
    <script src="../asset/js/lib/flot-chart/jquery.flot.spline.js"></script>

    <script src="../asset/js/widgets.js"></script>
 
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>


<body>

<?php
    include "../../config/connection.php";

    
    $author = $_POST['author'];
    $b_name = $_POST['b_name'];
    $b_level = $_POST['b_level'];
    $b_summary = $_POST['b_summary'];    
    

if(empty($_FILES['b_cover']['name'])||empty($_FILES['b_attach']['name'])||empty($b_name)||empty($author)||empty($b_level)||empty($b_summary)) {

    ?>
        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
            <span class="badge badge-pill badge-danger">Alert</span> You have not filled Some Book Details .
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="" onclick="location.reload();">
            <span aria-hidden="true">&times;</span>
            </button>
            <br>
        </div>
    <?php  
}
else
{

    //$query=mysqli_query($conn,"select * from leader where position='$leader_position' ") or die("selecting error");
    $query=mysqli_query($conn,"SELECT book_name from book where book_name='$b_name'");
    
    if($query->num_rows == 1){
    ?>
    <div style="width: 100%;float: left;padding: 10px;">
        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show" >
            <span class="badge badge-pill badge-danger">Error</span>
                Sorry The Book <strong><?php echo "$b_name"; ?></strong> is Already Registered.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
    </div>
    <?php

    }else{

        if (!file_exists("../books/".$b_name)) {

            mkdir('../books/'.$b_name, true); // folder creation 

                // checking for the pics
            if (($_FILES["b_cover"]["type"] == "image/gif") || ($_FILES["b_cover"]["type"] == "image/jpeg") || ($_FILES["b_cover"]["type"] == "image/pjpeg") || ($_FILES["b_cover"]["type"] == "image/bmp") || ($_FILES["b_cover"]["type"] == "image/png") && ($_FILES["b_cover"]["size"] < 20000000)) 
            {
                $filename1=$_FILES["b_cover"]["name"];
                if ($_FILES["b_cover"]["error"] > 0){
                    echo "Return Code: " . $_FILES["b_cover"]["error"] . "<br />";
                } 
                else 
                {
                    if (file_exists("../books/$b_name/".$filename1)) 
                    {
                        echo $_FILES["b_cover"]["name"] . " already exists. ";
                    } 
                    else 
                    {
                        move_uploaded_file($_FILES["b_cover"]["tmp_name"],"../books/$b_name/".$filename1);
                        
                    }
                }
            }
            // second pic
            if (($_FILES["b_attach"]["type"] == "application/pdf")  && ($_FILES["b_attach"]["size"] < 50000000)) 
            {
                $filename2="right".$_FILES["b_attach"]["name"];
                if ($_FILES["b_attach"]["error"] > 0){
                    echo "Return Code: " . $_FILES["b_attach"]["error"] . "<br />";
                } 
                else 
                {
                    if (file_exists("../books/$b_name/".$filename2)) 
                    {
                        echo $_FILES["b_attach"]["name"] . " already exists. ";
                    } 
                    else 
                    {
                        move_uploaded_file($_FILES["b_attach"]["tmp_name"],"../books/$b_name/".$filename2);
                        
                    }
                }
            }
             // trying to insert into the fuckin table in the data base

            $sql="INSERT INTO book(book_author,book_name,book_summary,book_cover,book_attachment,level_id)
                VALUES('$author','$b_name','$b_summary','$filename1','$filename2','$b_level')";
            if ($conn->query($sql)===TRUE)
            {
                ?>
                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                    <span class="badge badge-pill badge-success">Done</span>
                        You have Succefully created New Book <?php echo "$b_name"; ?> .
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="" onclick="location.reload();">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    <br>
                </div>
                <?php
            }
            else
            {
                ?>
                <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                    <span class="badge badge-pill badge-danger">Error</span>
                    Something went wrong ! Please try again and try to refresh the page please.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <?php
            }

        }
        else
        {
            # code...
            
        }
    }
}

                        
 ?>



 

</body>
</html>