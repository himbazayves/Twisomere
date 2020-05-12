<?php
include "../../config/connection.php";
?>
 
<?php
$plan_id=$_POST['plan_id'];

$sql="SELECT * from plan where plan_id='$plan_id'";
$result=$conn->query($sql);

$a=1; 

while ($row = $result->fetch_assoc()) {
    $p_id=$row['plan_id'];
    $p_name=$row['plan_name'];
    $p_price=$row['plan_price'];
    $p_descr=$row['plan_description'];

    $id1="Mine".$a;
    $id2="Mine1".$a;

}

?>
 
                    <div class="row" id="loader_general_admin2">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <div id="Message2" ></div>
                                <br>
                                <br>
                                
                                <button  class=" title-5 m-b-35 au-btn au-btn-icon au-btn--blue au-btn--small" onclick="location.reload()">
                                            <i class="zmdi zmdi-menu"></i>view records</button>
                                <div class="table-responsive table-responsive-data">
                                    
                                         <br>
                                <div class="col-lg-12">
                                    <div class="card">
                                    <div class="card-header">New Book Data</div>
                                    <div class="card-body">
                                        <form action="#/" onsubmit="update_plan_data();return false;"  method="post" novalidate="novalidate">

                                            <div style="display: none;">
                                                <input id="p_id" name="p_id"  value="<?php echo $p_id; ?>">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Plan Name</label>
                                                <input id="p_name" name="p_name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value="<?php echo $p_name; ?>">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Plan Price</label>
                                                <input id="p_price" name="p_price" type="number" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $p_price; ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Plan Description</label>
                                                <input id="p_descr" name="p_descr" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $p_descr; ?>"> 
                                            </div>

                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-primary btn-block">
                                                    <i class="fa fa-inbox fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Update Plan Data</span>
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