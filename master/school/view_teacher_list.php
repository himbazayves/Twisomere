                <div class="container-fluid">
                     <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>
                     <br>
                        
                        <div id="loader_general_admin"></div>

                      <div class="row" id="loader_general_admin1">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Our Teachers List</h3>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" id="Table1">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Avatar</th>
                                                <th>Teacher Username</th>
                                                <th>Teacher Names</th>
                                                <th>Teacher E-mal</th>
                                                <th>Teacher Contact</th>
                                                <th>Teacher Class</th>
                                                <th>Students Number</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                                <?php

                                                $sql1="SELECT * from teacher WHERE school_id='$s_id' ";
                                                $result1=$conn->query($sql1);

                                                $a=1;

                                                while ($row1 = $result1->fetch_assoc()) {
                                                $t_id=$row1['teacher_id'];
                                                $t_user=$row1['teacher_username'];
                                                $t_fn=$row1['teacher_Fname'];
                                                $t_ln=$row1['teacher_Lname'];
                                                $t_mail=$row1['teacher_email'];
                                                $t_tel=$row1['teacher_tel'];
                                                $t_level=$row1['level_id'];
                                                $t_profile=$row1['teacher_profile'];

                                                $id1="Mine".$a;
                                                $id2="Mine1".$a;

                                                $sql2="SELECT COUNT(*) AS stu_nbr FROM student WHERE level_id='$t_level' AND school_id='$s_id' ";
                                                $result2=$conn->query($sql2);
                                                while ($row2 = $result2->fetch_assoc()) {
                                                $stu_nbr=$row2['stu_nbr'];
                                            }

                                                            if (empty($t_profile)) {
                                                                $fileName = "teacher_profile/avatar.png";
                                                            } else {
                                                                $fileName = "$t_profile";
                                                            }
                                                ?>                                        
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td id="<?php echo $id1; ?>" style="display: none;" ><?php echo $t_id ?></td>
                                                <td><?php echo $a ?></td>
                                                <td>
                                                   <img style="height:60px;width: 120px;float: left;" src="../teacher/teacher_profile/<?php echo $fileName ?>" alt="<?php echo $t_fn ?>" />
                                                </td>
                                                <td><?php echo $t_user ?></td>
                                                <td><?php echo $t_fn; ?> <?php echo $t_ln; ?></td>
                                                <td><?php echo $t_mail ?></td>
                                                <td><?php echo $t_tel ?></td>
                                                <td><?php echo $t_level ?> Level</td>
                                                <td><?php echo $stu_nbr ?></td>
                                                <td>
                                                    <div class="table-data-feature">

                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="View Details" onclick="view_book_data_you_haha('<?php echo $id1 ?>');">
                                                            <i class="zmdi zmdi-eye"></i>
                                                        </button>                                                         
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
                                        