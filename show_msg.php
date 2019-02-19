<?php
require('db.php');
session_start();
$user_id=$_SESSION['user_id'];
$id=$_POST['id'];

$query="SELECT a.chat_id,a.msg_time,a.msg_content, b.username as sender_username, c.username as receiver_username FROM chat a INNER JOIN users b on a.sender_msg_id= b.user_id INNER JOIN users c on a.receiver_msg_id = c.user_id WHERE (a.sender_msg_id=$user_id AND a.receiver_msg_id=$id) OR (a.sender_msg_id=$id AND a.receiver_msg_id=$user_id) ORDER BY a.chat_id DESC";
$run=mysqli_query($con,$query) or die('the query is not run'.mysqli_error($con));
 if(mysqli_num_rows($run)>0){
 	   while($message=mysqli_fetch_assoc($run)){?>
 	      
 	   	    <div class="well message-div">
             <p><a href="#" class="pull-left" style="font-size:1.46em; text-transform:capitalize;"><?php echo $message['sender_username'];?></a><br><span class="pull-right" style="background-color: RGBa(0, 0, 0,0.37); color:white;"><?php echo formatdate($message['msg_time']);?></span></p>
               <p class="text" style="font-size:1.44em;"><?php echo $message['msg_content'];?></p>
          
       </div>
     
 	  <?php }
 }?>
