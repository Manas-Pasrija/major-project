<?php
 require('db.php');
 session_start();
  if(isset($_POST['comment_btn'])){
      $comment_content=$_POST['comment_content'];
      $post_id=$_POST['id'];
      $user_id=$_SESSION['user_id'];
  	     if(empty($comment_content)){
  	     	 echo "please don't leave black the comment section.";

  	     }
  	      else{
  	      	   $query="INSERT INTO comments (user_id,post_id,comment_content) 	VALUES ($user_id,$post_id,'$comment_content')";
  	      	   $run=mysqli_query($con,$query);
  	      }
  }
?>