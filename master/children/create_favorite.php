
<?php
$b_id=$_POST['b_id'];
$s_id=$_POST['s_id'];

if (empty($b_id)||empty($s_id)) {
    
    echo "Wrong";

} else {

    $query=mysqli_query($conn,"SELECT student_id,book_id from favorite where book_id='$b_id' AND student_id='$s_id' ");

    if($query->num_rows == 1){
    ?>
    <div style="padding: 10px;">
        <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
            <a href="index.php?view_book" style="color: black;">
                <span class="badge badge-pill badge-primary">Alert</span> 
                    Sorry This Is Book In Your Favorite Book.
                <button type="button" class="close"  style="" >
                    <span aria-hidden="true">&times;</span>
                </button>
            </a>
        </div>
    </div>
    <?php
    } else {   
    
        $sql="INSERT INTO favorite(student_id,book_id) VALUES('$s_id','$b_id')";
                if ($conn->query($sql)===TRUE)
                {
                    ?>
                    <div style="padding: 10px;">
                        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                            <a href="index.php?view_book" style="color: black;">
                                <span class="badge badge-pill badge-success">Done</span>
                                    You Book have Succefully Added To Favorite .
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </a>
                            <br>
                        </div>
                    </div>
                    <?php
                }
                else
                {
                    ?>
                    <div style="padding: 10px;">
                        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                            <a href="index.php?view_book" style="color: black;">
                                <span class="badge badge-pill badge-danger">Error</span>
                                    Something went wrong ! Please try again and try to refresh the page please.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </a>
                        </div>
                    </div>
                    <?php
                }
    }           

}


?>
 