<div class="container-fluid">
    
    <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>
    <div id="loader_agenda_data_post"></div>
    <div class="row" id="loader_agenda_data">
        <div class="col-lg-12">
    <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
        <div class="au-inbox-wrap js-inbox-wrap" id="Table1">
            <div class="au-message js-list-load">
                <div class="au-message__noti">
                    <h4>Inbox Messages</h4>
                </div>
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

                                                $sql5=" SELECT MAX(messages.message_content)AS messages_data ,messages.message_id,MAX(messages.message_date) AS message_date,messages.sender_id,student.student_id,student.student_username,student.student_profile FROM messages,student WHERE messages.message_id=(SELECT MAX(message_id) FROM messages)AND messages.sender_id=student.student_id GROUP by student.student_id ";
                                                $result5=$conn->query($sql5);

                                                $a=1;

                                                while ($row5 = $result5->fetch_assoc()) {
                                                $m_id=$row5['message_id'];
                                                $m_content=$row5['messages_data'];
                                                $m_date=$row5['message_date'];
                                                $user_name=$row5['student_username'];
                                                $profile=$row5['student_profile'];

                                                $id1="Mine".$a;

                                                if (empty($profile)) {
                                                     $fileName = "student_profiles/avatar.png";
                                                } else {
                                                    $fileName = "$profile";
                                                }

                    ?>
                        <div class="au-message__item">
                            <div class="au-message__item-inner"  onclick="read_messages('<?php echo $id1 ?>');" >
                                <div class="au-message__item-text">
                                    <div class="avatar-wrap">
                                        <div class="avatar">
                                            <img src="../school_student/student_profiles/<?php echo $fileName ?>" alt="<?php echo "$user_name"; ?>" style="width: 100%;height: 100%;">
                                        </div>
                                    </div>
                                    <div class="text">
                                        <p style="display: none;">
                                            <td id="<?php echo $id1; ?>"><?php echo $m_id ?></td>
                                        </p>
                                        <h5 class="name"><?php echo "$user_name"; ?></h5>
                                        <p><?php echo "$m_content"; ?></p>
                                    </div>
                                </div>
                                <div class="au-message__item-time">
                                    <span><?php echo get_time_ago( strtotime($m_date) );?></span>
                                </div>
                            </div>
                        </div>
                <?php $a++; }   ?>
        </div>
    </div>
</div>

            <!-- DATA TABLE -->
                                <div  class="table-responsive table-responsive-data2" style="display: none;">
                                    <table class="table table-data2" id="Table1">
                                        <thead>
                                        </thead>
                                                <?php

                                                $sql5=" SELECT MAX(messages.message_content)AS messages_data ,messages.message_id,MAX(messages.message_date) AS message_date,messages.sender_id,student.student_id,student.student_username,student.student_profile FROM messages,student WHERE messages.message_id=(SELECT MAX(message_id) FROM messages)AND messages.sender_id=student.student_id GROUP by student.student_id ";
                                                $result5=$conn->query($sql5);

                                                $a=1;

                                                while ($row5 = $result5->fetch_assoc()) {
                                                $m_id=$row5['message_id'];
                                                $sender_id=$row5['sender_id'];
                                                $m_content=$row5['messages_data'];
                                                $m_date=$row5['message_date'];
                                                $user_name=$row5['student_username'];
                                                $profile=$row5['student_profile'];

                                                $id1="Mine".$a;
                                                $id2="Mine1".$a;

                                                ?>                                        
                                        <tbody>

                                            <tr class="tr-shadow">
                                                <td id="<?php echo $id1; ?>"><?php echo $sender_id ?></td>
                                                <td>
                                                   <img style="height:60px;width: 120px;float: left;" src="../user/user_profiles_data/<?php echo "$profile"; ?>" alt="<?php echo "$user_name"; ?>"/>
                                                </td>
                                                <td><?php echo $user_name ?></td>
                                                <td><?php echo $m_date ?></td>
                                                <td>
                                                    <div class="table-data-feature">

                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="View Announcement" >
                                                            <i class="zmdi zmdi-eye"></i>
                                                        </button>   
                                                        
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            
                                        </tbody>
                                        <?php $a++; }  ?>
                                    </table>
                                </div>
                   <!-- END DATA TABLE -->
        </div>
    </div>
</div>