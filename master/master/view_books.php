                <div class="container-fluid">
                     <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>
                     <br>
                        
                        <div id="loader_general_admin"></div>

                      <div class="row" id="loader_general_admin1">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Books List</h3>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" id="Table1">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Cover</th>
                                                <th>Book Name</th>
                                                <th>Author</th>
                                                <th>Level</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                                <?php

                                                $sql5="SELECT * from book ";
                                                $result5=$conn->query($sql5);

                                                $a=1;

                                                while ($row5 = $result5->fetch_assoc()) {
                                                $b_id=$row5['book_id'];
                                                $b_name=$row5['book_name'];
                                                $b_author=$row5['book_author'];
                                                $b_level=$row5['level_id'];
                                                $b_cover=$row5['book_cover'];

                                                $id1="Mine".$a;
                                                $id2="Mine1".$a;

                                                ?>                                        
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td id="<?php echo $id1; ?>" style="display: none;" ><?php echo $b_id ?></td>
                                                <td><?php echo $a ?></td>
                                                <td>
                                                   <img style="height:60px;width: 120px;float: left;" src="books/<?php echo $b_name ?>/<?php echo $b_cover ?>" alt="<?php echo $b_name ?>" />
                                                </td>
                                                <td><?php echo $b_name ?></td>
                                                <td><?php echo $b_author ?></td>
                                                <td><?php echo $b_level ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                    <a  href="new_quiz.php?b_id=<?php echo $row5['book_id'];?>" >create a Quiz</a>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="View Book" onclick="view_book('<?php echo $id1 ?>');">
                                                            <i class="zmdi zmdi-eye"></i>
                                                        </button>

                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit Book" onclick="update_book('<?php echo $id1 ?>');">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>

                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete Book" onclick="delete_book_data('<?php echo $id1 ?>');" >
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
                            </div>
                        </div>
                    </div>
                    <script>

                                                 function readURL(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();

                                                reader.onload = function (e) {
                                                    $('#blah')
                                                        .attr('src', e.target.result)
                                                        .width(250)
                                                        .height(300);
                                                };

                                                reader.readAsDataURL(input.files[0]);
                                            }
                                                }
                                            
                                        </script>
                                        