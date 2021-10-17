<?php

        while ($row = mysqli_fetch_assoc($sql)) {
            $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
                    OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id}
                    OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
            $query2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_assoc($query2);
            if(mysqli_num_rows($query2) > 0) {
                $res = $row2['msg'];
            }else {
                $res = 'No message available';
            }

            //Trim if msg higher than 28 words
            (strlen($res) > 25) ? $msg = substr($res, 0, 25).'...' : $msg = $res;
            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = 'You: ' : $you = '';

                //current user not displayed
                $output .= ' <a href="chat.php?user_id=' .$row['unique_id'].'">
                        <div class="content">
                            <img src="php/uploads/'.$row['img'].'" alt="">
                            <div class="details">
                                <span> '.$row['fname']. " " .$row['lname'].'
                                </span>
                                <p>'.$you . $msg.'</p>
                            </div>
                        </div>
                        <div class="status-dot"><i class="fas fa-circle"></i></div>
                    </a>';                
        }

