

            <section>
                <br>
                <div class="section__content section__content--p30">
                    <?php
                        if ($sub_plan != $check_data) {
                            ?>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <!-- RECENT REPORT 2-->
                                            <div class="recent-report2">
                                                <h3 class="title-3">recent New Books</h3>
                                                <br>
                                                <div class="row">
                                                    <!-- book area -->
                                                    <?php

                                                            $sql1="SELECT * from book where level_id='$s_level' LIMIT 3 ";
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
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="card-body">
                                                                        <img style="height:100%;width: 100%;float: left;" src="../master/books/<?php echo $b_name ?>/<?php echo $b_cover ?>" alt="<?php echo $b_name ?>" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <div class="card-body">
                                                                        <p class="card-text">
                                                                            <h4><?php echo $b_name ?></h4>
                                                                        <br>
                                                                         <?php echo $b_descr ?>
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

                                                    <!-- end of book -->
                                                </div>
                                            </div>
                                            <!-- END RECENT REPORT 2             -->
                                        </div>
                                        <div class="col-xl-4">
                                            <!-- TASK PROGRESS-->
                                            <div class="task-progress">
                                                <h3 class="title-3">Books progress</h3>
                                                <div class="au-skill-container">
                                                    <!-- start of progress -->
                                                    <?php

                                                            $sql2="SELECT * from book where level_id='$s_level' LIMIT 9";
                                                            $result2=$conn->query($sql2);

                                                            while ($row2 = $result2->fetch_assoc()) {
                                                            $b_id=$row2['book_id'];
                                                            $b_name=$row2['book_name'];
                                                            $progress=rand(1,100);

                                                    ?> 
                                                    <div class="au-progress">
                                                        <span class="au-progress__title"><?php echo $b_name ?></span>
                                                        <div class="au-progress__bar" style="margin-top: 10px">
                                                            <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="<?php echo $progress ?>">
                                                                <span class="au-progress__value js-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <?php $a++; }  ?>
                                                    <!-- end of progress -->
                                                </div>
                                            </div>
                                            <!-- END TASK PROGRESS-->
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }                         
                    ?>
                    
                </div>
            </section>

            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                    <?php
                        if ($sub_plan != $check_data) {
                            ?>
                                <div class="col-xl-6">
                                    <!-- USER DATA-->
                                    <div class="user-data m-b-40">
                                        <h3 class="title-3 m-b-30">
                                            <i class="zmdi zmdi-book"></i>Favorite Books</h3>
                                        <div class="table-responsive table-data">
                                            <table class="table">
                                                <tbody>
                                                    <?php

                                                    $sql3="SELECT * from book where level_id='$s_level' LIMIT 4 ";
                                                    $result3=$conn->query($sql3);

                                                    while ($row3 = $result3->fetch_assoc()) {
                                                    $b_id=$row3['book_id'];
                                                    $b_name=$row3['book_name'];
                                                    $b_author=$row3['book_author'];

                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <label class="au-checkbox">
                                                                <input type="checkbox">
                                                                <span class="au-checkmark"></span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <div class="table-data__info">
                                                                <h6><b><?php echo $b_name ?></b></h6>
                                                                <span>
                                                                    <a href="#">By <?php echo $b_author ?></a>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="role member">
                                                                <form action="index.php?read_book_content" method="post">

                                                                    <input style="display: none;" type="text" name="b_id" id="b_id" value="<?php echo $b_id ?>">

                                                                    <button style="padding-right: 5px;padding-left: 5px;color: white;">Read Book</button>
                                                                </form>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                <?php }  ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- END USER DATA-->
                                </div>
                            <?php
                        }                         
                    ?>
                            <div class="col-lg-12">
                                <!-- MAP DATA-->
                                <div class="map-data m-b-40">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-map"></i>map data</h3>
                                    <div class="map-wrap m-t-45 m-b-80">
                                        <div id="vmap" style="height: 284px;"></div>
                                    </div>
                                </div>
                                <!-- END MAP DATA-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>