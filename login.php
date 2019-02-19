<?php
  require "db.php";
?>
<?php

  if(isset($_POST['submit'])){
  	$username=$_POST['username'];
  	$password=$_POST['password'];

  	 $query="SELECT * FROM users WHERE username='$username' AND password='$password'";
  	 $fire=mysqli_query($con,$query);
  	 
  	   
	  	 if(mysqli_num_rows($fire)==1){
               $lguser=mysqli_fetch_assoc($fire);
	  	 	  session_start();	
	  	 	  $_SESSION['is_login']=true;
	  	 	   //print_r($lguser);
	  	 	   $_SESSION['user_id']=$lguser['user_id'];
	  	 	   $_SESSION['profile_pic']=$lguser['profile_pic'];
	  	 	 echo "The username=".$_SESSION['username']=$username;
	  	 	 echo "The userid=".$_SESSION['user_id'];
	  	 	 echo "The profilepic=".$_SESSION['profile_pic'];
	  	 	   header("Location: mainpage.php");
	  	 	
	  	 }
	  	 
	  	  else{
  	 	 echo "<span style='color:red';>invaild id or password</span>";
  	          }
  	
  	
  }

?>