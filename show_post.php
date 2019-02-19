<?php
    require('db.php');
    session_start();
     $user_id=$_SESSION['user_id'];
     //$profile_pic=$_SESSION['profile_pic'];
                        $query="SELECT p.post_id,u.profile_pic,u.user_id,u.username as username1,p.post_title,p.post_name,p.post_content,p.post_time FROM post p INNER JOIN users u ON p.user_id= u.user_id ORDER BY p.post_id DESC";
                        $run=mysqli_query($con,$query);
                         if(mysqli_num_rows($run)>0){
                           while($post=mysqli_fetch_assoc($run)){ ?>
                             <div class="row">
                                <div class="col-sm-12" >
                                     <div class="well wells">
           <p><a href="chat.php?id=<?php echo $post['user_id'];?>" class="text-center" style="text-transform:capitalize;"><?php echo $post['username1'];?></a><br><span class="pull-right" style="background-color: RGBa(0, 0, 0,0.37); color:white;"><?php  echo formatdate($post['post_time']); ?></span></p>
           <a href="#"><img src="<?php echo $post['profile_pic'] ;?>" class="img-circle pull-left" height="55" width="55" alt="Avatar"></a>
            <p class="text"><span style="text-decoration:underline; text-transform:uppercase;">#--<?php echo $post['post_title'];?>--#</span><span style="color:firebrick;  text-transform:capitalize;"> @<?php echo $post['post_name'];?></span> <br><?php echo $post['post_content'];?> <button class="btn-sm btn-default pull-right p-info" data-toggle="modal" name="<?php echo $post['post_id'];?>" data-target="#<?php echo $post['post_id'];?>">Comment</button></p>
                 <?php include("modal.php");?>
          </div>
        </div>
       </div>                    
       <script>
          $(document).ready(function(){
                $('.p-info').click(function(){
                     var id=$(this).attr('name');
                     //console.log(id);
                      //$.post('insert_comment.php',{id:id});
                      $('#cmt-btn').click(function(event){
                                 event.preventDefault();
                                 var comment_content=$('#cmt-content').val();
                                 var comment_btn=$('#cmt-btn').val();
                                 $.ajax({

                                      type:'post',
                                      url:'insert_comment.php',
                                      data:{id:id,comment_content:comment_content,comment_btn:comment_btn},
                                      success:function(){
                                               $('#cmt-content').val('');
                                               $('#audio').attr('src','posttone1.mp3');            
                                                console.log(id);
                                       }
                             });
                      });
                      
                });

          });
       </script>   
                           <?php }
                         }?>





