
 

 
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
                                            <h3 class="text-center title-2"><b>Profile View</b></h3>
                                        </div>
                                        <hr>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <?php

                                                            if (empty($m_profile)) {
                                                                $fileName = "profile.jpg";
                                                            } else {
                                                                $fileName = "$m_profile";
                                                            }

                                                        ?>
                                                        <img class="align-self-center  mr-3" src="profile_data/<?php echo $fileName ?>" alt="Book Cover" id="blah" alt="<?php echo $m_username ?>" width="100%" height="300px">
                                                    </div>
                                                </div>
                                                <div class="col-lg-9">

                                                    <label for="x_card_code" class="control-label mb-1">Username</label>
                                                    <div class="input-group">
                                                        <label class="form-control cc-cvc"> <?php echo $m_username ?> </label>
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Names</label>
                                                    <div class="input-group">
                                                        <label class="form-control cc-cvc"> <?php echo $m_Fname ?> <?php echo $m_Lname ?> </label>
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">E-mail</label>
                                                    <div class="input-group">
                                                        <label class="form-control cc-cvc"> <?php echo $m_mail ?> </label>
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Telephone</label>
                                                    <div class="input-group">
                                                        <label class="form-control cc-cvc"> <?php echo $m_tel ?> </label>
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