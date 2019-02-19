<?php

 include("db.php");

  if(isset($_POST['submit'])){

  	       $file=$_FILES['file'];

          $image_name= $_FILES['file']['name'];
          $image_name=preg_replace("/\s/", "_", $image_name); 
          $image_type= $_FILES['file']['type'];
          $image_size= $_FILES['file']['size'];
          $image_tmp= $_FILES['file']['tmp_name'];
          $image_ext=pathinfo($image_name,PATHINFO_EXTENSION);
           $image_name=pathinfo($image_name,PATHINFO_FILENAME);

            

            // print_r($file);
          if(!empty($image_name)){
                 $image_name=$image_name."_".date("mjyHis").".".$image_ext;

          	  if($image_size>0 && $image_size < 2097152){
          	  	   if($image_ext=="jpg" || $image_ext=="png" || $image_ext== "jpeg"){
                                   $final_file="img/".$image_name;
          	  	         	$upload=move_uploaded_file($image_tmp,$final_file);

          	  	         	 if($upload){ $msg ="image is uploaded successfully ";

                                   $query="INSERT INTO users (images) VALUES ('$final_file') ";
                                   $fire=mysqli_query($con,$query) or die("the cannot run query".mysqli_error($con));

                                   echo $msg.="and also inserted into database";

                                   
                                   // echo "<img src='$final_file' with=450 height=450/>";
                                   // header("Location: upload_ui.php");
	                                  

          	  	         	}

          	  	   }else{echo "<h3 style='color:red;'>file should jpg or png or jpeg</h3>";}
                         
          	  }else{ echo "file size is too big";}

           }else{ echo "sorry you not select any file bc";}




}

 

?> 
<!-- <!DOCTYPE html>
  <html lang="en">
  <head>
  	<meta charset="UTF-8">
  	<title>dp upload..</title>
  </head>
  <body>
  	<img src="<?php $image_arr['$final_file'] ?>" />
  </body>
  </html>   -->