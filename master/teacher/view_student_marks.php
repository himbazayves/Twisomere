
<?php
    $stu_id=$_POST['stu_id'];

    $sql="SELECT * from student WHERE school_id='$s_id' AND level_id='$t_level' AND student_id='$stu_id' ";
    $result=$conn->query($sql);

    $a=1;

    while ($row = $result->fetch_assoc()) {
        $stu_id=$row['student_id'];
        $stu_name=$row['student_username'];

    }

?>                
                <div class="container-fluid">
                     <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>
                     <br>
                        
                        <div id="loader_general_admin"></div>

                      <div class="row" id="loader_general_admin1">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35"><?php echo $stu_name; ?> Marks</h3>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" id="Table1">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Cover</th>
                                                <th>Book Name</th>
                                                <th>Quiz Marks</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                                <?php

                                                $sql1="SELECT * from book,quiz_result WHERE book.book_id=quiz_result.book_id AND quiz_result.student_id='$stu_id' ";
                                                $result1=$conn->query($sql1);

                                                $a=1;

                                                while ($row1 = $result1->fetch_assoc()) {
                                                $stu_id=$row1['student_id'];
                                                $b_id=$row1['book_id'];
                                                $b_name=$row1['book_name'];
                                                $b_cover=$row1['book_cover'];
                                                $marks=$row1['score'];

                                                $id1="Mine".$a;
                                                $id2="Mine1".$a;

                                                $sql2="SELECT COUNT(question) AS question_marks from questions WHERE book_id='$b_id' ";
                                                    $result2=$conn->query($sql2);

                                                    while ($row2 = $result2->fetch_assoc()) {
                                                        $total_marks=$row2['question_marks'];

                                                    }
                                                ?>                                        
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td><?php echo $a; ?></td>
                                                <td>
                                                   <img style="height:60px;width: 120px;float: left;" src="../master/books/<?php echo $b_name ?>/<?php echo $b_cover ?>" alt="<?php echo $b_name ?>" />
                                                </td>
                                                <td><?php echo $b_name; ?></td>
                                                <td><?php echo $marks; ?> / <?php echo $total_marks; ?> Marks</td>
                                                <td>
                                                    <form action="index.php?read_book_content" method="post">
                                                        <div class="table-data-feature">
                                                            <input style="display: none;" type="text" name="stu_id" id="stu_id" value="<?php echo $stu_id ?>">
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="View Details" onclick="view_book_data_you_haha('<?php echo $id1 ?>');">
                                                                <i class="zmdi zmdi-eye"></i>
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
                                        