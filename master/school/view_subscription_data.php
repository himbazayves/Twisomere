                <div class="container-fluid">
                     <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>
                     <br>
                        
                        <div id="loader_general_admin"></div>

                      <div class="row" id="loader_general_admin1">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">School Subscription Data</h3>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" id="Table1">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Plan Name</th>
                                                <th>Students Number</th>
                                                <th>Start Time</th>
                                                <th>End Time</th>
                                                <th>Total Amount</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                                <?php

                                                $sql5="SELECT * from subscription where sub_school='$s_id'";
                                                $result5=$conn->query($sql5);

                                                $a=1;

                                                while ($row5 = $result5->fetch_assoc()) {
                                                $s_id=$row5['sub_id'];
                                                $plan_name=$row5['plan_name'];
                                                $start_time=$row5['sub_start_date'];
                                                $end_time=$row5['sub_end_time'];
                                                $total_price=$row5['sub_total_price'];
                                                $student_no=$row5['sub_student_number'];
                                                $dateToBeChecked=date('Y-m-d');
                                                $plan_name_details= explode('-',$plan_name,-1);

                                                $id1="Mine".$a;
                                                $id2="Mine1".$a;

                                                ?>                                        
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td id="<?php echo $id1; ?>"><?php echo $a ?></td>
                                                <td><?php echo $plan_name_details[0]; ?></td>
                                                <td><?php echo $student_no ?> Students</td>
                                                <td><?php echo $start_time ?></td>
                                                <td><?php echo $end_time ?></td>
                                                <td><?php echo $total_price ?></td>
                                                <?php
                                                    if ($dateToBeChecked >= $start_time && $dateToBeChecked < $end_time)
                                                    {
                                                        ?>
                                                            <td>
                                                                <span class="status--process">Active</span>
                                                            </td>
                                                        <?php
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                            <td>
                                                                <span class="status--denied">Inactive</span>
                                                            </td>
                                                        <?php
                                                    }
                                                ?>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            
                                        </tbody>
                                        <?php $a++; }  ?>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                    </div>