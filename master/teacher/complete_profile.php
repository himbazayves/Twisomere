
                        <div class="row" id="loader_general_admin2">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                
                                <div class="table-responsive table-responsive-data">
                                    <div id="Message2"></div>
                            

                                <div class="col-lg-12">
                                    <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2"><b><?php echo $t_username ?></b> Update your profile</h3>
                                        </div>
                                        <div id="profile_complete_message">
                                        </div>
                                        <hr>
                                        <form action="#/" onsubmit="teacher_update_profile();return false;" method="post">
                                            <div class="row">
                                                        <?php
                                                            if (empty($t_profile)) {
                                                                $fileName = "avatar.png";
                                                            } else {
                                                                $fileName = "$profile_pic";
                                                            }
                                                            
                                                        ?>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <img class="align-self-center  mr-3" src="teacher_profile/<?php echo $fileName ?>" alt="<?php echo $t_username ?>" id="blah" alt="Card image cap" width="230px" height="230px">
                                                        <br><br>
                                                        <input type='file' id="profile" name="profile" onchange="readURL(this);" />
                                                    </div>
                                                    <input id="t_id" name="t_id" type="text" class="form-control cc-cvc" value="<?php echo $t_id ?>" style="display: none;" >
                                                </div>
                                                <div class="col-lg-8">

                                                    <label for="x_card_code" class="control-label mb-1">Username</label>
                                                    <div class="input-group">
                                                        <input id="username" name="username" type="text" class="form-control cc-cvc" value="<?php echo $t_username ?>" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">First Name</label>
                                                    <div class="input-group">
                                                        <input id="f_name" name="f_name" type="text" class="form-control cc-cvc" value="<?php echo $t_Fname ?>" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Last Name</label>
                                                    <div class="input-group">
                                                        <input id="l_name" name="l_name" type="text" class="form-control cc-cvc" value="<?php echo $t_Lname ?>" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">E-mail</label>
                                                    <div class="input-group">
                                                        <input id="email" name="email" type="text" class="form-control cc-cvc" value="<?php echo $t_mail ?>" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Phone Number</label>
                                                    <div class="input-group">
                                                        <input id="tel" name="tel" type="text" class="form-control cc-cvc" value="<?php echo $t_tel ?>" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Password</label>
                                                    <div class="input-group">
                                                        <input id="password" name="password" type="text" class="form-control cc-cvc" value="<?php echo $t_pass ?>" data-val="true">
                                                    </div>

                                                </div>
                                            </div>
                                            <br>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-user fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Save Changes</span>
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
                                                        .width(200)
                                                        .height(230);
                                                };

                                                reader.readAsDataURL(input.files[0]);
                                            }
                                                }
                                            
                                            </script>