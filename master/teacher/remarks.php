                <div class="container-fluid">
                     <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>
                     <br>
                        
                        <div id="loader_general_admin"></div>

                      <div class="row" id="loader_general_admin1">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">My Student</h3>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" id="Table1">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Avatar</th>
                                                <th>Student Username</th>
                                                <th>Student Names</th>
                                                <th>Student Gender</th>
                                                <th>Books</th>
                                                <th>Remark</th>
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

                                                $sql3="SELECT COUNT(book.book_name) AS books_no from book,quiz_result WHERE book.book_id=quiz_result.book_id AND quiz_result.student_id='$stu_id' ";
                                                $result3=$conn->query($sql3);

                                                while ($row3 = $result3->fetch_assoc()) {
                                                $total_books=$row3['books_no'];
                                                }

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
                                                <td><?php echo $total_books ?> Books</td>
                                                <td>
                                                    <form action="index.php?view_marks" method="post">
                                                        <div class="table-data-feature">
                                                            <input style="display: none;" type="text" name="stu_id" id="stu_id" value="<?php echo $stu_id ?>">
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="View Details" >
                                                                <i class="zmdi zmdi-eye"></i>
                                                            </button>                                                         
                                                        </div>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="index.php?send_remark" method="post">
                                                        <div class="table-data-feature">
                                                            <input style="display: none;" type="text" name="stu_id" id="stu_id" value="<?php echo $stu_id ?>">
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Send Remark" >
                                                                <i class="zmdi zmdi-mail-send"></i>
                                                            </button>                                                         
                                                        </div>
                                                    </form>
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
                                        