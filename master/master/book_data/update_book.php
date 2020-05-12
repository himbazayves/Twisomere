<?php
include "../../config/connection.php";
?>
 
<?php
$b_id=$_POST['b_id'];

$sql="SELECT * from book where book_id='$b_id'";
$result=$conn->query($sql);

$a=1;

while ($row = $result->fetch_assoc()) {
    $b_id=$row['book_id'];
    $b_name=$row['book_name'];
    $b_author=$row['book_author'];
    $b_level=$row['level_id'];
    $b_summary=$row['book_summary'];
    $b_cover=$row['book_cover'];
    $b_attach=$row['book_attachment'];

  $id1="Mine".$a;
  $id2="Mine1".$a;

}

?>
 
                        <div class="row" id="loader_general_admin2">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <br>
                                
                                <button  class=" title-5 m-b-35 au-btn au-btn-icon au-btn--blue au-btn--small" onclick="location.reload()">
                                            <i class="zmdi zmdi-menu"></i>view Books</button>
                                
                                <div class="table-responsive table-responsive-data">
                                    <div id="Message2"></div>
                            

                                <div class="col-lg-12">
                                    <div class="card">
                                    <div class="card-header">Update <strong><?php echo $b_name; ?> Details</strong></div>
                                    <div class="card-body">
                                        <form action="#/" onsubmit="update_book_data();return false;"  method="post" novalidate="novalidate">
                                           
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <img class="align-self-center  mr-3" src="books/<?php echo $b_name ?>/<?php echo $b_cover ?>" alt="Book Cover" id="blah" alt="Card image cap" width="300px" height="290px">
                                                        <br><br>
                                                        <input type='file' id="b_cover" name="b_cover" onchange="readURL(this);" />

                                                        <input style="display: none;" id="b_id" name="b_id" value="<?php echo $b_id; ?>" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">

                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Author Name</label>
                                                        <input id="author" name="author" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $b_author; ?>" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Book Name</label>
                                                        <input id="b_name" name="b_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $b_name; ?>" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Book Level </label>
                                                        <input id="b_level" name="b_level" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $b_level; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Book Summary</label>
                                                        <input id="b_summary" name="b_summary" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $b_summary; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Book Attachment</label>
                                                        <input id="b_attach" name="b_attach" type="file" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $b_attach; ?>" >
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-primary btn-block">
                                                    <i class="fa fa-user fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Update <?php echo $b_name; ?> Book Details</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>