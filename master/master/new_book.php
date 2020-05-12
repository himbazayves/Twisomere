
 

 
                    <div class="row" id="loader_general_admin2">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <div id="Message2" ></div>
                                <br>
                                
                                <div class="table-responsive table-responsive-data">
                                    
                                         <br>
                                <div class="col-lg-12">
                                    <div class="card">
                                    <div class="card-header">New Book Data</div>
                                    <div class="card-body">
                                        <form action="#/" onsubmit="new_book();return false;"  method="post" novalidate="novalidate">
                                           
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <img class="align-self-center  mr-3" src="profile_data/profile.jpg" alt="Book Cover" id="blah" alt="Card image cap" width="300px" height="290px">
                                                        <br><br>
                                                        <input type='file' id="b_cover" name="b_cover" onchange="readURL(this);" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">

                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Author Name</label>
                                                        <input id="author" name="author" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Book Name</label>
                                                        <input id="b_name" name="b_name" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Book Level </label>

                                                        <select id="b_level" name="b_level" class="form-control" aria-required="true">
                                                            <option value="0">-- Select Book Level ---</option>

                                                            <?php

                                                                $sql5="SELECT * from level";
                                                                $result5=$conn->query($sql5);

                                                                while ($row5 = $result5->fetch_assoc()) {
                                                                $l_id=$row5['level_id'];
                                                                $l_number=$row5['level'];
                                                            ?> 

                                                            <option value="<?php echo $l_id ?>">Level <?php echo $l_number ?></option>

                                                            <?php 

                                                                }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Book Summary</label>
                                                        <textarea id="b_summary" name="b_summary" type="text" class="form-control" aria-required="true" aria-invalid="false" ></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Book Attachment</label>
                                                        <input id="b_attach" name="b_attach" type="file" class="form-control" aria-required="true" aria-invalid="false" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-primary btn-block">
                                                    <i class="fa fa-book fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Save New Book</span>
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
                                                        .width(250)
                                                        .height(300);
                                                };

                                                reader.readAsDataURL(input.files[0]);
                                            }
                                                }
                                            
                                        </script>