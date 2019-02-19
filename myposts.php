<?php
 require("db.php");
 session_start();
  $id=$_SESSION['user_id'];
    $query="SELECT p.post_id,p.user_id,p.post_title,p.post_name,p.post_time,p.post_content,u.profile_pic FROM post p INNER JOIN users u ON u.user_id=p.user_id WHERE u.user_id=$id ORDER BY p.post_id DESC";
    $run=mysqli_query($con,$query);
    if(mysqli_num_rows($run)>0){
    	        while($mypost=mysqli_fetch_assoc($run)){?>

    	       <div class="row">
        <div class="col-sm-12">
          <div class="well wells">
            
           <p><a href="#" class="text-center" style="text-transform:capitalize;"><?php echo $_SESSION['username'];?></a><br><span class="pull-right" style="background-color: RGBa(0, 0, 0,0.37); color:white;"><?php  echo formatdate($mypost['post_time']); ?></span></p>
           
          
           <a href="#"><img src="<?php echo $mypost['profile_pic'];?>" class="img-circle pull-left" height="55" width="55" alt="Avatar"></a>
            <p class="text"><span style="text-decoration:underline; text-transform:uppercase;">#--<?php echo $mypost['post_title'];?>--#</span><span style="color:firebrick;  text-transform:capitalize;"> @<?php echo $mypost['post_name'];?></span> <br><?php echo $mypost['post_content'];?></p>
            
          </div>
          
        </div>
       
      </div>


    	       <?php }
    }?>
