<?php

 if(isset($_POST['signup_btn'])){
 	 $username=$_POST['username'];
 	 $email=$_POST['email'];
 	 $password=$_POST['password'];
 	 $confirm_password=$_POST['confirm_password'];

 	  $Error_empty=false;
 	  $Error_email=false;
 	  $Error_same=false;

 	   if(empty($username) || empty($email) || empty($password) || empty($confirm_password)){
 	   	  echo "<span class='error'>Fill all the Fileds !!</span>";
 	   	  $Error_empty=true;
 	   }
 	   else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
 	   	  echo "<span class='error'>Write a Vaild Email Address !!</span>";
 	   	  $Error_email=true;
 	   }
 	   else if($password!=$confirm_password){
 	   	 echo "<span class='error'>Password and Confirm Password Fileds will be Same !!</span>";
 	   	 $Error_same=true;
 	   }
 	   else{
 	   	   echo "<span class='success'>Sign Up Sucessfull !!</span>";
 	   }
    
 }
else{
	echo "there was some error";
}


?>
 <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>

<script>
	$(document).ready(function(){

		$('#main-username, #main-email ,#main-password,#main-confirm-password').removeClass('input-error');
	var errorEmpty=<?php echo $Error_empty ?>;
	var errorEmail=<?php echo $Error_email ?>;
	var errorSame=<?php echo $Error_same ?>;

	 if(errorEmpty == true) {
	 	 $('#main-username, #main-email ,#main-password,#main-confirm-password').addClass('input-error');	 
	 	}
	  if(errorEmail ==true){
	 	$('#main-email').addClass('input-error,animated,shake');
	 }
        if(errorSame ==true){
      	$('#main-password, #main-confirm-password').addClass('input-error');

      }
	 if(errorEmpty == false && errorEmail == false && errorEmail == false){
	 	$('#main-username, #main-email ,#main-password,#main-confirm-password').val("");
	 }
	});
	
</script>
