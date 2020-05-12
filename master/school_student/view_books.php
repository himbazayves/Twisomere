                <div class="container-fluid">
                     <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>
                     <br>
                        
                        <div id="loader_general_admin"></div>

                      <div class="row" id="loader_general_admin1">

                        <?php
                            if ($sub_plan != $check_data) {
                                ?>
                                <div class="col-lg-12">
                                    <!-- DATA TABLE -->
                                    <h3 class="title-5 m-b-35">Books List</h3>
                                    <div class="table-responsive table-responsive-data2">
                                        <table class="table table-data2" id="Table1">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Cover</th>
                                                    <th>Book Name</th>
                                                    <th>Description</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                                    <?php

                                                    $sql5="SELECT * from book where level_id='$s_level' ";
                                                    $result5=$conn->query($sql5);

                                                    $a=1;

                                                    while ($row5 = $result5->fetch_assoc()) {
                                                    $b_id=$row5['book_id'];
                                                    $b_name=$row5['book_name'];
                                                    $b_descr=$row5['book_summary'];
                                                    $b_cover=$row5['book_cover'];

                                                    $id1="Mine".$a;
                                                    $id2="Mine1".$a;

                                                    ?>                                        
                                            <tbody>
                                                <tr class="tr-shadow">
                                                    <td id="<?php echo $id1; ?>" style="display: none;" ><?php echo $b_id ?></td>
                                                    <td><?php echo $a ?></td>
                                                    <td>
                                                       <img style="height:60px;width: 120px;float: left;" src="../master/books/<?php echo $b_name ?>/<?php echo $b_cover ?>" alt="<?php echo $b_name ?>" />
                                                    </td>
                                                    <td><?php echo $b_name ?></td>
                                                    <td><?php echo $b_descr ?></td>
                                                    <td>
                                                        <form action="index.php?read_book_content" method="post">
                                                           <div class="table-data-feature">
                                                                <input style="display: none;" type="text" name="b_id" id="b_id" value="<?php echo $b_id ?>">

                                                                <button data-toggle="tooltip" data-placement="top" title="View Book" >
                                                                    Read Book
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
                                <?php
                            }                         
                        ?>
                        </div>
                    </div>
                                        