
<?php

$user_id=$_POST['user_id'];
$message_content=$_POST['message_content'];
$message_date=date("Y-m-d h:i:sa");


    $sql="INSERT INTO messages( `message_content`,`sender_id`,`message_date`,`message_status`,`message_side`)
        VALUE('$message_content','$user_id','$message_date','0','student')";  

                if ($conn->query($sql)===TRUE)
                {
                    ?>
                    <div style="padding: 10px;">
                        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                            <a href="index.php?remarks" style="color: black;">
                                <span class="badge badge-pill badge-success">Done</span>
                                    Message Sent. .
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </a>
                            <br>
                        </div>
                    </div>
                    <?php
                }
                else
                {
                    ?>
                    <div style="padding: 10px;">
                        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                            <a href="index.php?remarks" style="color: black;">
                                <span class="badge badge-pill badge-danger">Error</span>
                                    Something went wrong ! Please try again and try to refresh the page please.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </a>
                        </div>
                    </div>
                    <?php
                }


?>
 