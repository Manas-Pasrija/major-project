<?php
require('db.php');
  session_start();
   $insert=0;

    if(isset($_POST['submit'])){
    	$id=$_POST['id'];
    	$msg=$_POST['msgcontent'];
   	 $user_id=$_SESSION['user_id'];
    if(empty($msg)){
    	 echo 'please text some message';
    
    }
    else{
    	 $query="INSERT INTO chat(sender_msg_id, receiver_msg_id, msg_content) VALUES ($user_id,$id,'$msg')";
    $run=mysqli_query($con,$query);
     $insert=1;
    }
   }
   
   
?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		 var insert=<?php echo $insert?>;
		   $.ajax({
		   	     type:'post',
		   	     url:'chat.php',
		   	     data:{insert:insert}
		   });
	});
</script>