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
                                    <div class="card-header">Read <strong><?php echo $b_name; ?> Book</strong></div>
                                    <div class="card-body">
                                           
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Author Name : <?php echo $b_author; ?></label>
                                        </div>

                                        <div class="form-group">
                                            
                                            <!-- <iframe src="books/<?php echo $b_name ?>/<?php echo $b_attach ?>#toolbar=0" width="100%" height="500px"></iframe> -->

                                            <embed src="books/<?php echo $b_name ?>/<?php echo $b_attach ?>#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="600px" />
                                        </div>
                                            <br>
                                    </div>
                                </div>
                                
                            </div>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>