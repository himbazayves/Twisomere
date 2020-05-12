                <div class="container-fluid">
                     <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>
                     <br>
                        
                        <div id="loader_general_admin"></div>

                      <div class="row" id="loader_general_admin1">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Parents List</h3>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" id="Table1">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Avatar</th>
                                                <th>Parents Username</th>
                                                <th>Parents Name</th>
                                                <th>Parents E-mail</th>
                                                <th>Parents Contact</th>
                                                <th>Parents Childrens</th>
                                                <th>Parents Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                                <?php

                                                $sql1="SELECT * from parent ";
                                                $result1=$conn->query($sql1);

                                                $a=1;

                                                while ($row1 = $result1->fetch_assoc()) {
                                                $p_id=$row1['parent_id'];
                                                $p_user=$row1['parent_username'];
                                                $p_fn=$row1['parent_Fname'];
                                                $p_ln=$row1['parent_Lname'];
                                                $p_mail=$row1['parent_email'];
                                                $p_tel=$row1['parent_tel'];
                                                $p_stat=$row1['parent_status'];
                                                $p_profile=$row1['parent_profile'];

                                                $id1="Mine".$a;
                                                $id2="Mine1".$a;

                                                $sql2="SELECT COUNT(*) AS student_number FROM student WHERE parent_id='$p_id' ";
                                                $result2=$conn->query($sql2);
                                                while ($row2 = $result2->fetch_assoc()) {
                                                    $stu_nbr=$row2['student_number'];
                                                }

                                                            if (empty($p_profile)) {
                                                                $fileName = "profile_data/avatar.png";
                                                            } else {
                                                                $fileName = "$p_profile";
                                                            }
                                                ?>                                        
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td id="<?php echo $id1; ?>" style="display: none;" ><?php echo $p_id ?></td>
                                                <td><?php echo $a ?></td>
                                                <td>
                                                   <img style="height:60px;width: 120px;float: left;" src="../parent/parent_profile/<?php echo $fileName ?>" alt="<?php echo $p_fn ?>" />
                                                </td>
                                                <td><?php echo $p_user ?></td>
                                                <td><?php echo $p_fn; ?> <?php echo $p_ln; ?></td>
                                                <td><?php echo $p_mail ?></td>
                                                <td><?php echo $p_tel ?></td>
                                                <td><?php echo $stu_nbr ?> Childrens</td>

                                                <?php

                                                    if ($p_stat==1) {
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

                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="View Details" onclick="view_book_data_you('<?php echo $id1 ?>');">
                                                            <i class="zmdi zmdi-eye"></i>
                                                        </button>

                                                        <?php

                                                            if ($p_stat==1) {
                                                                ?>
                                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Block Parent" onclick="block_parent('<?php echo $id1 ?>');" >
                                                                        <i class="zmdi zmdi-block"></i>
                                                                    </button>
                                                                <?php
                                                            } else {
                                                                ?>
                                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Activate Parent" onclick="activate_parent('<?php echo $id1 ?>');" >
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
                                        