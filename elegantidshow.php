<?php 

session_start();
require('db.php');
 ?>

   
 <?php
    $user_id=$_SESSION['user_id']; 


     $query="SELECT profile_pic  FROM users WHERE user_id=$user_id";
     $run=mysqli_query($con,$query) or die ("There some error").mysqli_error($con);
       if(mysqli_num_rows($run)==1){
       	 $users_pic=mysqli_fetch_assoc($run);
       	 //echo $users_pic['profile_pic'];
      
       }

 ?>
 <style>
 	
 </style> 
