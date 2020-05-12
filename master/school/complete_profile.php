<div class="container-fluid">
    <div class="row">      
        <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Complete Profile</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2"><b><?php echo $s_username ?></b> Complete your profile</h3>
                                        </div>
                                        <div id="profile_complete_message">
                                        </div>
                                        <hr>
                                        <form action="school_data/complete_profile_data.php"  method="post">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <img class="align-self-center  mr-3" src="profile_data/profile.jpg" alt="<?php echo $username ?>" id="blah" alt="Card image cap" width="100%" height="230px">
                                                    </div>
                                                    <input id="s_id" name="s_id" type="text" class="form-control cc-cvc" value="<?php echo $s_id ?>" style="display: none;" >
                                                </div>
                                                <div class="col-lg-8">

                                                    <label for="x_card_code" class="control-label mb-1">School Name</label>
                                                    <div class="input-group">
                                                        <input id="s_name" name="s_name" type="text" class="form-control cc-cvc" value="<?php echo $s_username ?>" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">School E-mail</label>
                                                    <div class="input-group">
                                                        <input id="s_mail" name="s_mail" type="text" class="form-control cc-cvc" value="<?php echo $s_mail ?>" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">School Mobile</label>
                                                    <div class="input-group">
                                                        <input id="s_tel" name="s_tel" type="text" class="form-control cc-cvc" value="<?php echo $s_tel ?>" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Password</label>
                                                    <div class="input-group">
                                                        <input id="s_pass" name="s_pass" type="text" class="form-control cc-cvc" value="<?php echo $s_password ?>" data-val="true">
                                                    </div>

                                                </div>
                                            </div>
                                            <br>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-building fa-lg"></i>&nbsp;
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