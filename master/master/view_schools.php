                <div class="container-fluid">
                     <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>
                     <br>
                        
                        <div id="loader_general_admin"></div>

                      <div class="row" id="loader_general_admin1">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Schools List</h3>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" id="Table1">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Avatar</th>
                                                <th>School Name</th>
                                                <th>School E-mail</th>
                                                <th>School Contact</th>
                                                <th>School Students</th>
                                                <th>School Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                                <?php

                                                $sql1="SELECT * from school ";
                                                $result1=$conn->query($sql1);

                                                $a=1;

                                                while ($row1 = $result1->fetch_assoc()) {
                                                $s_id=$row1['school_id'];
                                                $s_name=$row1['school_name'];
                                                $s_mail=$row1['school_email'];
                                                $s_tel=$row1['school_tel'];
                                                $s_stat=$row1['school_status'];
                                                $s_profile=$row1['school_profile'];

                                                $id1="Mine".$a;
                                                $id2="Mine1".$a;

                                                $sql2="SELECT COUNT(*) AS student_number FROM student WHERE school_id='$s_id' ";
                                                $result2=$conn->query($sql2);
                                                while ($row2 = $result2->fetch_assoc()) {
                                                    $stu_nbr=$row2['student_number'];
                                                }

                                                            if (empty($s_profile)) {
                                                                $fileName = "avatar.png";
                                                            } else {
                                                                $fileName = "$s_profile";
                                                            }

                                                ?>                                        
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td id="<?php echo $id1; ?>" style="display: none;" ><?php echo $s_id ?></td>
                                                <td><?php echo $a ?></td>
                                                <td>
                                                   <img style="height:60px;width: 120px;float: left;"  src="../school/profile_data/<?php echo $fileName ?>" alt="<?php echo $s_name ?>" />
                                                </td>
                                                <td><?php echo $s_name ?></td>
                                                <td><?php echo $s_mail ?></td>
                                                <td><?php echo $s_tel ?></td>
                                                <td><?php echo $stu_nbr ?> Students</td>

                                                <?php

                                                    if ($s_stat==1) {
                                                        ?>
                                                        <td style="color: green;">Active</td>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <td style="color: red;">Inactive</td>
                                                        <?php
                                                    }
                                                    
                                                ?>
                                                <td>
                                                    <div class="table-data-feature">

                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="View Details" onclick="view_book('<?php echo $id1 ?>');">
                                                            <i class="zmdi zmdi-eye"></i>
                                                        </button>

                                                        <?php

                                                            if ($s_stat==1) {
                                                                ?>
                                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Block School" onclick="block_school('<?php echo $id1 ?>');" >
                                                                        <i class="zmdi zmdi-block"></i>
                                                                    </button>
                                                                <?php
                                                            } else {
                                                                ?>
                                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Activate School" onclick="activate_school('<?php echo $id1 ?>');" >
                                                                        <i class="zmdi zmdi-thumb-up"></i>
                                                                    </button>
                                                                <?php
                                                            }
                                                            
                                                        ?>                                                          
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            
                                        </tbody>
                                        <?php $a++; }  ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                                        