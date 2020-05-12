
 

 
                    <div class="row" id="loader_general_admin2">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <div id="Message2" ></div>
                                <br>
                                
                                <div class="table-responsive table-responsive-data">
                                    
                                         <br>
                                <div class="col-lg-12">
                                    <div class="card">
                                    <div class="card-header">New Teacher</div>
                                    <div class="card-body">
                                        <form action="#/" onsubmit="new_teacher();return false;"  method="post" novalidate="novalidate">
                                           

                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Teacher Username</label>
                                                <input id="t_username" name="t_username" type="text" class="form-control" aria-required="true" aria-invalid="false" >

                                                <input style="display: none;" id="school" name="school" type="text" class="form-control" aria-required="true" value="<?php echo $s_id ?>" aria-invalid="false" >
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Teacher Class</label>
                                                <select id="level_name" name="level_name" class="form-control" aria-required="true" >
                                                            <option value="0">-- Select Level ---</option>

                                                            <?php

                                                                $sql1="SELECT * from level";
                                                                $result1=$conn->query($sql1);

                                                                while ($row1 = $result1->fetch_assoc()) {
                                                                $l_id=$row1['level_id'];
                                                                $l_name=$row1['level'];
                                                            ?> 

                                                            <option value="<?php echo $l_name ?>"><?php echo $l_name ?> Level</option>

                                                            <?php 

                                                                }
                                                            ?>
                                                        </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Teacher Password</label>
                                                <input id="t_pass" name="t_pass" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Teacher Contact</label>
                                                <input id="tel" name="tel" type="number" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-primary btn-block">
                                                    <i class="fa fa-user fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Save New Teacher</span>
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