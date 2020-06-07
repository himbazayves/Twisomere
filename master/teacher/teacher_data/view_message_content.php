<?php
include "../../config/connection.php";
$sender_id=$_POST['sender_id'];

$sql6="  SELECT MAX(messages.message_content)AS message_content ,messages.message_id,messages.message_date,messages.sender_id,student.student_id,student.student_username,student.student_profile FROM messages,student WHERE messages.sender_id=student.student_id and sender_id=$sender_id GROUP by student.student_id  ";
                                                $result6=$conn->query($sql6);

                                                $a=1;

                                                while ($row6 = $result6->fetch_assoc()) {
                                                $m_id=$row6['message_id'];
                                                $sender_id=$row6['sender_id'];
                                                $m_content=$row6['message_content'];
                                                $m_date=$row6['message_date'];
                                                $user_name=$row6['student_username'];
                                                $profile_pic=$row6['student_profile'];

                                                if (empty($profile_pic)) {
                                                        $fileName = "student_profiles/avatar.png";
                                                } else {
                                                    $fileName = "$profile_pic";
                                                }


                                                
?>
  
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="au-card au-card--no-shadow au-card--no-pad ">
                    <div class="au-chat__title">
                        <div class="au-chat-info">
                            <div class="avatar-wrap online">
                                <div class="avatar avatar--small">
                                    <img src="../school_student/student_profiles/<?php echo $fileName ?>" alt="<?php echo $user_name ?>" style="width: 100%;height: 100%;">
                                </div>
                            </div>
                            <span class="nick">
                                <a href="#"><?php echo $user_name; ?>  </a>
                            </span>
                        </div>
                    </div>
                    <div class="au-chat__content">
                        <?php
                        function get_time_ago( $time )
                        {
                            $time_difference = time() - $time;

                            if( $time_difference < 1 ) { return 'now'; }
                            $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
                                        30 * 24 * 60 * 60       =>  'month',
                                        24 * 60 * 60            =>  'day',
                                        60 * 60                 =>  'hour',
                                        60                      =>  'minute',
                                        1                       =>  'second'
                            );

                            foreach( $condition as $secs => $str )
                            {
                                $d = $time_difference / $secs;

                                if( $d >= 1 )
                                {
                                    $t = round( $d );
                                    return '' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
                                }
                            }
                        }

                            // $sender_id=$_POST['sender_id'];

                            $sql5="SELECT * from messages where sender_id='$sender_id' ORDER BY message_date ASC";
                            $result5=$conn->query($sql5);

                            $a=1;

                            while ($row5 = $result5->fetch_assoc()) {
                            $m_content=$row5['message_content'];
                            $m_side=$row5['message_side'];
                            $m_status=$row5['message_status'];
                            $m_date=$row5['message_date'];

                            $id1="Mine".$a;
                            $id2="Mine1".$a;

                            

                            if ($m_side != "teacher") {
                                ?>
                                    <div class="recei-mess-wrap">
                                        <span class="mess-time"><?php echo get_time_ago( strtotime($m_date) );?></span>
                                        <div class="recei-mess__inner">
                                            <div class="avatar avatar--tiny">
                                                <img src="../school_student/student_profiles/<?php echo $fileName ?>" alt="<?php echo $user_name ?>" style="width: 100%;height: 100%;">
                                            </div>
                                            <div class="recei-mess-list">
                                                <div class="recei-mess"><?php echo $m_content; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            } else {
                                ?>
                                    <div class="send-mess-wrap">
                                        <span class="mess-time"><?php echo get_time_ago( strtotime($m_date) );?></span>
                                        <div class="send-mess__inner">
                                            <div class="send-mess-list">
                                                <div class="send-mess"><?php echo $m_content; ?> 
                                                </div>
                                            </div>
                                            <div class="avatar avatar--tiny" style="margin-left: 5px;">
                                                <img src="teacher_profile/avatar.png" >
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            }
                        }

                        }
                        ?>
                    </div>
                    <div class="au-chat-textfield" id="profile_complete_message"></div>
                    <div class="au-chat-textfield">
                        <form class="au-form-icon" action="#/" onsubmit="send_admin_message();return false;" method="post">
                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Type a message" id="message_content" name="message_content" >

                            <input id="user_id" name="user_id" type="text" class="form-control cc-cvc" value="<?php  echo $sender_id; ?>" style="display:none ;" >
                            <button class="au-input-icon" type="submit">
                                <i class="zmdi zmdi-mail-send"></i>
                            </button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>