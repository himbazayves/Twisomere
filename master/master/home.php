            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- STATISTIC-->
            <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--green">

                                <?php
                                    $sql1="SELECT COUNT(*) AS student_number FROM student ";
                                    $result1=$conn->query($sql1);
                                    while ($row1 = $result1->fetch_assoc()) {
                                        $stu_nbr=$row1['student_number'];
                                    }
                                ?>

                                <h2 class="number"><?php echo $stu_nbr ?></h2>
                                <span class="desc">All Childrens online</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--orange">

                                <?php
                                    $sql2="SELECT COUNT(*) AS school_number FROM school ";
                                    $result2=$conn->query($sql2);
                                    while ($row2 = $result2->fetch_assoc()) {
                                        $skl_nbr=$row2['school_number'];
                                    }
                                ?>

                                <h2 class="number"><?php echo $skl_nbr ?></h2>
                                <span class="desc">Active Schools</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-store"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">

                                <?php
                                    $sql3="SELECT COUNT(*) AS book_number FROM book ";
                                    $result3=$conn->query($sql3);
                                    while ($row3 = $result3->fetch_assoc()) {
                                        $bk_nbr=$row3['book_number'];
                                    }
                                ?>

                                <h2 class="number"><?php echo $bk_nbr ?></h2>
                                <span class="desc">Books</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">

                                <?php
                                    $sql4="SELECT COUNT(*) AS parent_number FROM parent ";
                                    $result4=$conn->query($sql4);
                                    while ($row4 = $result4->fetch_assoc()) {
                                        $par_nbr=$row4['parent_number'];
                                    }
                                ?>

                                <h2 class="number"><?php echo $par_nbr ?></h2>
                                <span class="desc">Active Parents</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-accounts-list"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <!-- STATISTIC CHART-->
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">statistics</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <!-- CHART-->
                            <div class="statistic-chart-1">
                                <h3 class="title-3 m-b-30">chart</h3>
                                <div class="chart-wrap">
                                    <canvas id="test_1"></canvas>
                                </div>
                                <div class="statistic-chart-1-note">
                                    <span class="big">10,368</span>
                                    <span>/ 16220 Books Published</span>
                                </div>
                            </div>
                            <!-- END CHART-->
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <!-- TOP CAMPAIGN-->
                            <div class="top-campaign">
                                <h3 class="title-3 m-b-30">top Subscriptions</h3>
                                <div class="table-responsive">
                                    <table class="table table-top-campaign">
                                        <tbody>
                                            <tr>
                                                <td>1. Australia</td>
                                                <td>$70,261.65</td>
                                            </tr>
                                            <tr>
                                                <td>2. United Kingdom</td>
                                                <td>$46,399.22</td>
                                            </tr>
                                            <tr>
                                                <td>3. Turkey</td>
                                                <td>$35,364.90</td>
                                            </tr>
                                            <tr>
                                                <td>4. Germany</td>
                                                <td>$20,366.96</td>
                                            </tr>
                                            <tr>
                                                <td>5. France</td>
                                                <td>$10,366.96</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END TOP CAMPAIGN-->
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <!-- CHART PERCENT-->
                            <div class="chart-percent-2">
                                <h3 class="title-3 m-b-30">chart by %</h3>
                                <div class="chart-wrap">
                                    <canvas id="test_2"></canvas>
                                    <div id="chartjs-tooltip">
                                        <table></table>
                                    </div>
                                </div>
                                <div class="chart-info">
                                    <div class="chart-note">
                                        <span class="dot dot--blue"></span>
                                        <span>School Students</span>
                                    </div>
                                    <div class="chart-note">
                                        <span class="dot dot--red"></span>
                                        <span>Parent Childrens</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END CHART PERCENT-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC CHART-->

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                        <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>
                        <br>
                        <div id="loader_general_admin"></div>
                    <div class="row" id="loader_general_admin1">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Subscrption Table</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <select class="js-select2" name="property">
                                            <option selected="selected">All Properties</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <div class="rs-select2--light rs-select2--sm">
                                        <select class="js-select2" name="time">
                                            <option selected="selected">Today</option>
                                            <option value="">3 Days</option>
                                            <option value="">1 Week</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <button class="au-btn-filter">
                                        <i class="zmdi zmdi-filter-list"></i>filters</button>
                                </div>
                                <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                        <select class="js-select2" name="type">
                                            <option selected="selected">Export</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </th>
                                            <th>name</th>
                                            <th>Holder</th>
                                            <th>email</th>
                                            <th>Subscription</th>
                                            <th>date</th>
                                            <th>status</th>
                                            <th>price</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                                $sql1="SELECT * from subscription ";
                                                $result1=$conn->query($sql1);

                                                $a=1;

                                                while ($row1 = $result1->fetch_assoc()) {
                                                $p_name=$row1['plan_name'];
                                                $sub_parent=$row1['sub_parent'];
                                                $sub_school=$row1['sub_school'];
                                                $sub_start=$row1['sub_start_date'];
                                                $sub_end=$row1['sub_end_time'];
                                                $sub_stu_nbr=$row1['sub_student_number'];
                                                $sub_stat=$row1['sub_status'];
                                                $sub_total=$row1['sub_total_price'];

                                                $id1="Mine".$a;
                                                $id2="Mine1".$a;

                                                // $sql2="SELECT COUNT(*) AS student_number FROM student WHERE school_id='$s_id' ";
                                                // $result2=$conn->query($sql2);
                                                // while ($row2 = $result2->fetch_assoc()) {
                                                //     $stu_nbr=$row2['student_number'];
                                                // }

                                                            if (empty($sub_parent)) {
                                                                $Holder = "School";
                                                            } else {
                                                                $Holder = "Parent";
                                                            }

                                                ?>
                                        <tr class="tr-shadow">
                                            <td>
                                                    <?php echo $a ?>
                                                </label>
                                            </td>
                                            <td><?php echo $p_name ?></td>
                                            <td>
                                                <span class="block-email"><?php echo $Holder ?></span>
                                            </td>
                                            <td class="desc">E-mail</td>
                                            <td class="desc"><?php echo $p_name ?></td>
                                            <td><?php echo $sub_start ?></td>
                                            <td>
                                                <?php

                                                    if ($sub_stat == 'processed') {
                                                        ?>
                                                            <span class="status--process">Processed</span>
                                                        <?php
                                                    } else {
                                                        ?>
                                                            <span class="status--denied">Denied</span>
                                                        <?php
                                                    }
                                                    

                                                ?>
                                                
                                            </td>
                                            <td> Rwf <?php echo $sub_total ?></td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="More Details">
                                                        <i class="zmdi zmdi-more"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                        </tr>
                                        <?php $a++; }  ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->
            <script>
                  try {
                        //WidgetChart 5
                        var ctx = document.getElementById("test1");
                        if (ctx) {
                          ctx.height = 220;
                          var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                              labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                              datasets: [
                                {
                                  label: "My First dataset",
                                  data: [78, 81, 80, 64, 65, 80, 70, 75, 67, 85, 66, 68],
                                  borderColor: "transparent",
                                  borderWidth: "0",
                                  backgroundColor: "#ccc",
                                }
                              ]
                            },
                            options: {
                              maintainAspectRatio: true,
                              legend: {
                                display: false
                              },
                              scales: {
                                xAxes: [{
                                  display: false,
                                  categoryPercentage: 1,
                                  barPercentage: 0.65
                                }],
                                yAxes: [{
                                  display: false
                                }]
                              }
                            }
                          });
                        }

                      } catch (error) {
                        console.log(error);
                      }
            </script>