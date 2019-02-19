<?php
  require("db.php");
  session_start();
if(isset($_POST['post_timeline'])){
 	 $title=$_POST['title'];
 	 $description=$_POST['description'];
 	 $select=$_POST['select'];
 	 
       $user_id=$_SESSION['user_id'];
     // date_default_timezone_set('Asia/Kolkata'); 
       $date=date("D,g:i A"); 
 	  $Error_empty=0;
 	  

 	   if(empty($title) || empty($description) || empty($select)){
 	   	 echo "<span style='color:red;'>Fill all the Fileds !!</span>";
 	   	     $Error_empty=1;
 	   	  
 	   }
 	   else{
 	   	 $query="INSERT INTO post (`user_id`, `post_title`, `post_name`, `post_content`) VALUES ('$user_id','$title','$select','$description')";
 	   	   $fire=mysqli_query($con,$query) or die('the query is not run'.mysqli_error($con));
 	   	   if($fire){
 	   	   	echo "<span style='color:green;'>Post Inserted!!</span>";
 	   	   }

 	   }
    
 }
else{
	echo "there was some error";
}


?>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

     var errorEmpty=<?php echo $Error_empty ?>
       if(errorEmpty==0){
                $('#tpc_title,#tpc_description,#tpc_select').val("");
       }
	
</script> 