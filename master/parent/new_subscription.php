
 

 
                    <div class="row" id="loader_general_admin2">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <div id="Message2" ></div>
                                <br>
                                <?php

                                    if ($sub_id == 1) {
                                        ?>
                                            <div style="width: 100%;padding: 30px;">
                                                <div class="sufee-alert alert with-close alert-info alert-dismissible fade show">
                                                    <span class="badge badge-pill badge-info">Warning</span>
                                                    Dear <?php echo $p_username; ?> , You Still Have Active Subscription , Unless You Want To Create Another New One.
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                </div>
                                            </div>
                                        <?php
                                    } 
                                    
                                ?>
                                <div class="table-responsive table-responsive-data">
                                    
                                         <br>
                                <div class="col-lg-12">
                                    <div class="card">
                                    <div class="card-header">New Subcription Plan</div>
                                    <div class="card-body">
                                        <form action="#/" onsubmit="new_school_subscribe();return false;"  method="post" novalidate="novalidate">
                                           

                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Plan Name</label>
                                                <select id="plan" name="plan" class="form-control" aria-required="true" >
                                                            <option value="0">-- Select Plan ---</option>

                                                            <?php

                                                                $sql1="SELECT * from plan";
                                                                $result1=$conn->query($sql1);

                                                                while ($row1 = $result1->fetch_assoc()) {
                                                                $plan_id=$row1['plan_id'];
                                                                $p_name=$row1['plan_name'];
                                                                $p_price=$row1['plan_price'];
                                                            ?> 

                                                            <option value="<?php echo $p_price ?>"><?php echo $p_name ?> - <?php echo $p_price ?> Rwf</option>

                                                            <?php 

                                                                }
                                                            ?>
                                                        </select>

                                                        <input style="display: none;" type="text" size="30" name="plan_name" id="plan_name" />
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Subscription Duration</label>
                                                <select id="month" name="month" class="form-control" aria-required="true" >
                                                    <option value="0">-- Select Duration --</option>
                                                    <option value="1">1 Month</option>
                                                    <option value="2">2 Months</option>
                                                    <option value="3">3 Months</option>
                                                    <option value="4">4 Months</option>
                                                    <option value="5">5 Months</option>
                                                    <option value="6">6 Months</option>
                                                    <option value="12">1 year</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">My Childrens</label>

                                                            <?php

                                                                $sql2="SELECT COUNT(*) AS Total_students from student WHERE parent_id='$p_id' ";
                                                                $result2=$conn->query($sql2);

                                                                while ($row2 = $result2->fetch_assoc()) {
                                                                $t_students=$row2['Total_students'];
                                                            ?>

                                                <label for="cc-payment" class="form-control"><?php echo $t_students ?> Children(s)</label>

                                                <label for="cc-payment" class="control-label mb-1">Amount To Pay</label>

                                                <label for="cc-payment" class="form-control" id="result">Total Amount</label>

                                                <input style="display: none;" id="student" name="student" type="number" value="<?php echo $t_students ?>" class="form-control" aria-required="true"  aria-invalid="false" id="student" >

                                                <input style="display: none;" id="school" name="school" type="number" value="<?php echo $p_id ?>" class="form-control" aria-required="true"  aria-invalid="false" id="student" >

                                                <?php 

                                                                }
                                                            ?>
                                            </div>                                    
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Payment Method</label>

                                                <label for="cc-payment" class="form-control">Mobile Money</label>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-primary btn-block">
                                                    <i class="fa fa-inbox fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Create Subscription</span>
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

