                <div class="container-fluid">
                     <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>
                     <br>
                        
                        <div id="loader_general_admin"></div>

                      <div class="row" id="loader_general_admin1">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">School Class List</h3>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" id="Table1">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Level Name</th>
                                                <th>Teacher Name</th>
                                                <th>Students Number</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                                <?php

                                                $sql1="SELECT * FROM teacher,level,school WHERE level.level_id=teacher.level_id AND school.school_id='$s_id' ORDER BY level.level ASC";
                                                $result1=$conn->query($sql1);

                                                $a=1;

                                                while ($row1 = $result1->fetch_assoc()) {
                                                $l_id=$row1['level_id'];
                                                $l_name=$row1['level'];
                                                $t_Fname=$row1['teacher_Fname'];
                                                $t_Lname=$row1['teacher_Lname'];

                                                $id1="Mine".$a;
                                                $id2="Mine1".$a;

                                                $sql2="SELECT COUNT(*) AS stu_nbr FROM student WHERE level_id='$l_id' ";
                                                $result2=$conn->query($sql2);
                                                while ($row2 = $result2->fetch_assoc()) {
                                                $stu_nbr=$row2['stu_nbr'];
                                            }

                                                ?>                                        
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td id="<?php echo $id1; ?>"><?php echo $a ?></td>
                                                <td><?php echo $l_name; ?> Level</td>
                                                <td><?php echo $t_Fname ?> <?php echo $t_Lname ?> </td>
                                                <td><?php echo $stu_nbr; ?> Students</td>
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