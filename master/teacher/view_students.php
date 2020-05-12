                <div class="container-fluid">
                     <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>
                     <br>
                        
                        <div id="loader_general_admin"></div>

                      <div class="row" id="loader_general_admin1">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Student List</h3>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" id="Table1">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Avatar</th>
                                                <th>Student Username</th>
                                                <th>Student Names</th>
                                                <th>Student Gender</th>
                                                <th>Student Level</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                                <?php

                                                $sql1="SELECT * from student WHERE school_id='$s_id' AND level_id='$t_level' ";
                                                $result1=$conn->query($sql1);

                                                $a=1;

                                                while ($row1 = $result1->fetch_assoc()) {
                                                $stu_id=$row1['student_id'];
                                                $stu_user=$row1['student_username'];
                                                $stu_fn=$row1['student_Fname'];
                                                $stu_ln=$row1['student_Lname'];
                                                $stu_gender=$row1['student_gender'];
                                                $stu_level=$row1['level_id'];
                                                $stu_profile=$row1['student_profile'];

                                                $id1="Mine".$a;
                                                $id2="Mine1".$a;

                                                            if (empty($stu_profile)) {
                                                                $fileName = "student_profiles/avatar.png";
                                                            } else {
                                                                $fileName = "$stu_profile";
                                                            }
                                                ?>                                        
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td id="<?php echo $id1; ?>" style="display: none;" ><?php echo $stu_id ?></td>
                                                <td><?php echo $a ?></td>
                                                <td>
                                                   <img style="height:60px;width: 120px;float: left;" src="../school_student/student_profiles/<?php echo $fileName ?>" alt="<?php echo $p_fn ?>" />
                                                </td>
                                                <td><?php echo $stu_user ?></td>
                                                <td><?php echo $stu_fn; ?> <?php echo $stu_ln; ?></td>
                                                <td><?php echo $stu_gender ?></td>
                                                <td><?php echo $stu_level ?> Level</td>
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
                                        