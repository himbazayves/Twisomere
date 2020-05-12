
 

 
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
                                        <form action="#/" onsubmit="school_profile_update();return false;"  method="post" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <?php

                                                            if (empty($s_profile)) {
                                                                $fileName = "profile.jpg";
                                                            } else {
                                                                $fileName = "$s_profile";
                                                            }

                                                        ?>
                                                        <img class="align-self-center  mr-3" src="profile_data/<?php echo $fileName ?>" alt="Book Cover" id="blah" alt="<?php echo $s_username ?>" width="350px" height="270px">
                                                        <br><br>
                                                        <input type='file' id="profile" name="profile" onchange="readURL(this);" />
                                                    </div>
                                                    <input id="s_id" name="s_id" type="text" class="form-control cc-cvc" value="<?php echo $s_id ?>" style="display: none;" >
                                                </div>
                                                <div class="col-lg-9">

                                                    <label for="x_card_code" class="control-label mb-1">Username</label>
                                                    <div class="input-group">
                                                        <input id="s_username" name="s_username" type="text" class="form-control cc-cvc" value="<?php echo $s_username ?>" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">E-mail</label>
                                                    <div class="input-group">
                                                        <input id="s_mail" name="s_mail" type="text" class="form-control cc-cvc" value="<?php echo $s_mail ?>" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Telephone</label>
                                                    <div class="input-group">
                                                        <input id="s_tel" name="s_tel" type="text" class="form-control cc-cvc" value="<?php echo $s_tel ?>" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Password</label>
                                                    <div class="input-group">
                                                        <input id="s_pass" name="s_pass" type="text" class="form-control cc-cvc" value="<?php echo $s_password ?>" data-val="true">
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