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
                                    <div class="row">
                                        <?php

                                            $sql1="SELECT * from book  ";
                                            $result1=$conn->query($sql1);

                                            $a=1;

                                            while ($row1 = $result1->fetch_assoc()) {
                                            $b_id=$row1['book_id'];
                                            $b_name=$row1['book_name'];
                                            $b_descr=$row1['book_summary'];
                                            $b_level=$row1['level_id'];
                                            $b_cover=$row1['book_cover'];

                                            $id1="Mine".$a;
                                            $id2="Mine1".$a;
                                        ?>
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="row">
                                                    <div class="col-lg-5" style="padding-right: 10px;">
                                                            <img style="width: 100%;height: 100%;padding: 5px;" src="../master/books/<?php echo $b_name ?>/<?php echo $b_cover ?>" alt="<?php echo $b_name ?>" />
                                                    </div>
                                                    <div class="col-lg-7" >
                                                         <div class="card-body" >
                                                            <p class="card-text">
                                                                 <h4><?php echo $b_name ?></h4>
                                                            <br>
                                                                <span style="text-align: justify;"><?php echo substr($b_descr,0,73) ?></span>
                                                                <br>
                                                                <form action="index.php?read_book_content" method="post">

                                                                <input style="display: none;" type="text" name="b_id" id="b_id" value="<?php echo $b_id ?>">

                                                                <button style="background-color: green;padding-right: 5px;padding-left: 5px;color: white;">Read Book</button>
                                                            </form>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php $a++; }  ?>
                                    </div> 
                                </div>
                                <?php
                            }                         
                        ?>
                        </div>
                    </div>
                                        