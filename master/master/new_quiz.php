<?php

    $b_id=$_POST['b_id'];

?>
<div class="row" id="loader_general_admin2">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <div id="result"></div>
            <br>
            <div class="table-responsive table-responsive-data">
                <br>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">New Book Data</div>
                                <div class="card-body">
                                    <form id="myForm" action="add_quiz.php" method="post" novalidate="novalidate">

                                            <div class="alert alert-success"> Create a Quiz </div>
                                              <input type="hidden" value="<?php echo $b_id?>" name="book_id" />
                                             
                                            <div class="form-group">
                                              <label>Question</label>
                                              <input   class="myInput form-control" type="text" name="question_text" />
                                            </div>  
                                            <div class="form-group">
                                                <label>Choice #1: </label>
                                                <input class="myInput form-control" type="text" name="choice1" />
                                            </div>
                                             
                                            <div class="form-group">
                                              <label>Choice #2: </label>
                                              <input class="myInput form-control" type="text" name="choice2" />
                                            </div>
                                             
                                            <div class="form-group">
                                              <label>Choice #3: </label>
                                              <input class="myInput form-control" type="text" name="choice3" />
                                            </div>
                                             
                                            <div class="form-group">
                                              <label>Choice #4: </label>
                                              <input class="myInput form-control" type="text" name="choice4" />
                                            </div>
                                             
                                            <div class="form-group">
                                              <label>Choice #5: </label>
                                              <input class="myInput form-control" class="myInput" type="text" name="choice5" />
                                            </div>
                                             
                                            <div class="form-group">
                                              <label>Correct choice number </label>
                                              <input class="myInput form-control" type="number" name="correct_choice" />
                                               </p>
                                            </div>                                           
                                            <div>
                                                <button id="sub" type="submit" name="create" class="btn btn-lg btn-primary btn-block">
                                                    <i class="fa fa-book fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Create Quiz</span>
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
        </div>
    </div>
</div>