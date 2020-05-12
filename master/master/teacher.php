                <div class="container-fluid">
                     <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>
                     <br>
                        
                        <div id="loader_general_admin"></div>

                      <div class="row" id="loader_general_admin1">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Teachers List</h3>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" id="Table1">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Username</th>
                                                <th>Teacher Names</th>
                                                <th>Contact</th>
                                                <th>E-mail</th>
                                                <th>Level</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                                <?php

                                                $sql5="SELECT * from teacher where school_id='$s_id'";
                                                $result5=$conn->query($sql5);

                                                $a=1;

                                                while ($row5 = $result5->fetch_assoc()) {
                                                $t_id=$row5['teacher_id'];
                                                $username=$row5['teacher_username'];
                                                $Fname=$row5['teacher_Fname'];
                                                $Lname=$row5['teacher_Lname'];
                                                $email=$row5['teacher_email'];
                                                $tel=$row5['teacher_tel'];
                                                $level=$row5['level_id'];

                                                $id1="Mine".$a;
                                                $id2="Mine1".$a;

                                                ?>                                        
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td id="<?php echo $id1; ?>"><?php echo $t_id ?></td>
                                                <td><?php echo $username ?></td>
                                                <td><?php echo $Fname ?> <?php echo $Lname ?></td>
                                                <td><?php echo $tel ?></td>
                                                <td><?php echo $email ?></td>
                                                <td><?php echo $level ?></td>
                                                <td>
                                                    <div class="table-data-feature">

                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit Agent" onclick="update_agent('<?php echo $id1 ?>');">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>

                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete Agent" onclick="delete_agent_data('<?php echo $id1 ?>');" >
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        
                                                        
                                                        
                                                    </div>
                                                </td>
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