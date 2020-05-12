
                        <div class="row" id="loader_general_admin2">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                
                                <div class="table-responsive table-responsive-data">
                                    <div id="Message2"></div>
                            

                                <div class="col-lg-12">
                                    <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2"><b>New Student</b> Details</h3>
                                        </div>
                                        <div id="profile_complete_message">
                                        </div>
                                        <hr>
                                        <form action="#/" onsubmit="teacher_new_student();return false;" method="post">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <img class="align-self-center  mr-3" src="teacher_profile/avatar.png" alt="<?php echo $t_username ?>" id="blah" alt="Card image cap" width="280px" height="230px">
                                                        <br><br>
                                                        <input type='file' id="profile" name="profile" onchange="readURL(this);" />
                                                    </div>
                                                    <input id="school" name="school" type="text" class="form-control cc-cvc" value="<?php echo $s_id ?>"  >
                                                </div>
                                                <div class="col-lg-8">

                                                    <label for="x_card_code" class="control-label mb-1">Student Username</label>
                                                    <div class="input-group">
                                                        <input id="s_username" name="s_username" type="text" class="form-control cc-cvc"  data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Student Class</label>
                                                    <div class="input-group">
                                                        <select id="s_class" name="s_class" class="form-control" aria-required="true">
                                                            <option value="0">-- Choose Student Class ---</option>

                                                            <?php

                                                                $sql5="SELECT * from level order by level asc";
                                                                $result5=$conn->query($sql5);

                                                                while ($row5 = $result5->fetch_assoc()) {
                                                                $l_id=$row5['level_id'];
                                                                $l_number=$row5['level'];
                                                            ?> 

                                                            <option value="<?php echo $l_number ?>">Level <?php echo $l_number ?></option>

                                                            <?php 

                                                                }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">First Name</label>
                                                    <div class="input-group">
                                                        <input id="s_Fname" name="s_Fname" type="text" class="form-control cc-cvc"  data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Last Name</label>
                                                    <div class="input-group">
                                                        <input id="s_Lname" name="s_Lname" type="text" class="form-control cc-cvc"  data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Gender</label>
                                                    <div class="input-group">
                                                        <select class="form-control cc-cvc" name="s_sex" id="s_sex">
                                                            <option value="0">-- Choose Gender ---</option>
                                                            <option value="male"> Male </option>
                                                            <option value="female"> Female </option>
                                                        </select>
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Password</label>
                                                    <div class="input-group">
                                                        <input id="s_pass" name="s_pass" type="text" class="form-control cc-cvc"  data-val="true">
                                                    </div>

                                                </div>
                                            </div>
                                            <br>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-user fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Save New Student</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                </div>
                                
                            </div>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                         <script>

                                                 function readURL(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();

                                                reader.onload = function (e) {
                                                    $('#blah')
                                                        .attr('src', e.target.result)
                                                        .width(230)
                                                        .height(280);
                                                };

                                                reader.readAsDataURL(input.files[0]);
                                            }
                                                }
                                            
                                            </script>