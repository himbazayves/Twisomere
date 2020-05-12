
 

 
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
                                            <h3 class="text-center title-2"><b>Profile Settings</b></h3>
                                        </div>
                                        <hr>
                                        <form action="#/" onsubmit="parent_profile_update();return false;" enctype="multipart/form-data" method="post" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <?php

                                                            if (empty($p_profile)) {
                                                                $fileName = "profile.jpg";
                                                            } else {
                                                                $fileName = "$p_profile";
                                                            }

                                                        ?>
                                                        <img class="align-self-center  mr-3" src="parent_profile/<?php echo $fileName ?>"  id="blah" alt="<?php echo $p_username ?>" width="350px" height="270px">
                                                        <br><br>
                                                        <input type='file' id="profile" name="profile" onchange="readURL(this);" />
                                                    </div>
                                                    <input id="p_id" name="p_id" type="text" class="form-control cc-cvc" value="<?php echo $p_id ?>" style="display: none;" >
                                                </div>
                                                <div class="col-lg-7">

                                                    <label for="x_card_code" class="control-label mb-1">First Name</label>
                                                    <div class="input-group">
                                                        <input id="p_Fname" name="p_Fname" type="text" class="form-control cc-cvc" value="<?php echo $p_Fname ?>" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Last Name</label>
                                                    <div class="input-group">
                                                        <input id="p_Lname" name="p_Lname" type="text" class="form-control cc-cvc" value="<?php echo $p_Lname ?>" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">E-mail</label>
                                                    <div class="input-group">
                                                        <input id="p_mail" name="p_mail" type="text" class="form-control cc-cvc" value="<?php echo $p_mail ?>" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Telephone</label>
                                                    <div class="input-group">
                                                        <input id="p_tel" name="p_tel" type="text" class="form-control cc-cvc" value="<?php echo $p_tel ?>" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Password</label>
                                                    <div class="input-group">
                                                        <input id="p_pass" name="p_pass" type="text" class="form-control cc-cvc" value="<?php echo $p_pass ?>" data-val="true">
                                                    </div>
                                                        <br>
                                                </div>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="zmdi zmdi-settings fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Save Changes</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
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
                                                        .width(350)
                                                        .height(270);
                                                };

                                                reader.readAsDataURL(input.files[0]);
                                            }
                                                }
                                            
                                        </script>