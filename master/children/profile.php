
 

 
                    <div class="row" id="loader_general_admin2">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <div class="table-responsive table-responsive-data">
                                    <div id="Message2" ></div>
                                    <br>
                                <div class="col-lg-12">
                                    <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2"><b>My Account Profile</b></h3>
                                        </div>
                                        <hr>
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <?php

                                                            if (empty($s_profile)) {
                                                                $fileName = "profile.jpg";
                                                            } else {
                                                                $fileName = "$s_profile";
                                                            }

                                                        ?>
                                                        <img class="align-self-center  mr-3" src="student_profiles/<?php echo $fileName ?>"  id="blah" alt="<?php echo $s_username ?>" style="width: 100%;height: 270px;">
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">

                                                    <label for="x_card_code" class="control-label mb-1">Names</label>
                                                    <div class="input-group">
                                                        <label class="form-control cc-cvc"> <?php echo $s_Fname ?> <?php echo $s_Lname ?> </label>
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Gender</label>
                                                    <div class="input-group">
                                                        <label class="form-control cc-cvc"> <?php echo $s_gender ?> </label>
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">School Name</label>
                                                    <div class="input-group">
                                                        <label class="form-control cc-cvc"> <?php echo $s_username ?> </label>
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Class</label>
                                                    <div class="input-group">
                                                        <label class="form-control cc-cvc"> Level <?php echo $s_level ?> </label>
                                                    </div>
                                                        <br>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>