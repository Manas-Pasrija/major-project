<?php
session_start();
 //$finaldpname=file_get_contents('show_dpname.html');
?>
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

              $user_id=$_SESSION['user_id'];

            // print_r($file);
          if(!empty($image_name)){
                 $image_name=$image_name."_".date("mjyHis").".".$image_ext;

              if($image_size>0 && $image_size < 2097152){
                   if($image_ext=="jpg" || $image_ext=="png" || $image_ext== "jpeg"){
                                   $final_file="profile_pics/".$image_name;
                          $upload=move_uploaded_file($image_tmp,$final_file);

                           if($upload){ $msg ="image is uploaded successfully ";
                                           
                                   $query="UPDATE users SET profile_pic='$final_file' WHERE user_id=$user_id";
                                   $fire=mysqli_query($con,$query) or die("the cannot run query".mysqli_error($con));

                                   echo $msg.="and also inserted into database";

                                   
                                   // echo "<img src='$final_file' with=450 height=450/>";
                                    header("Location: profile.php");
                                    

                          }

                   }else{echo "<h3 style='color:red;'>file should jpg or png or jpeg</h3>";}
                         
              }else{ echo "file size is too big";}

           }else{ echo "sorry you not select any file bc";}




}

 

?> 