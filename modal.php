<?php
        
?>           
         <!-- Modal -->
  <div class="modal fade" id="<?php echo $post['post_id'];?>" role="dialog">
    <div class="modal-dialog  modal-xs">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close"  data-dismiss="modal">&times;</button>
          <span class="pull-right" style="background-color: RGBa(0, 0, 0,0.37); color:white;"><?php echo formatdate($post['post_time']);?></span>
           <a href="#"><img src="<?php echo $post['profile_pic'];?>" class="img-circle pull-left" height="55" width="55" alt="Avatar"></a>
            <p class="text"><?php echo $post['post_content'];?></p>
        </div>
        <div class="modal-body reply clsscroll">
          <h3><span style="text-transform:uppercase;"><?php echo $post['post_title'];?></span><span style="color:firebrick; text-transform:capitalize;">@<?php echo $post['post_name'];?></span> By <span style="text-transform:capitalize; color:green;"><?php echo $post['username1'];?></span></h3>

               <div class="reply-content">
             	<h4><span>Username : </span>This Is Post 1 Reply 1</h4>
               </div>
                <div class="reply-content">
               	<h4><span>Username : </span>This Is Post 1 Reply 1</h4>
               </div>
                <div class="reply-content">
               	<h4><span>Username : </span>This Is Post 1 Reply 1</h4>
               </div>
                <div class="reply-content">
               	<h4><span>Username : </span>This Is Post 1 Reply 1</h4>
               </div>
              </div><!--modal body close-->
        <div class="modal-footer">
        	<form class="form-horizontal" id="topic-q-form">
          	            
						  <div class="form-group">
						    <div class="col-sm-10"> 
						      <textarea rows="2"  class="form-control" id="cmt-content" placeholder="Write Your Comment....."></textarea> 
						    </div>
						    <div class="col-sm-2">
						  	<button type="button" id="cmt-btn" style="font-size:1.2em;" class="btn btn-info btn-block"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
						  </div>
	                      </div>
	            </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div><!-- modal close-->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
  <script>
    $(document).ready(function(){
      // $('#cmt-btn').click(function(event){
      //                            event.preventDefault();
      //                            var comment_content=$('#cmt-content').val();
      //                            var comment_btn=$('#cmt-btn').val();
      //                            $.ajax({

      //                                 type:'post',
      //                                 url:'insert_comment.php',
      //                                 data:{comment_content:comment_content,comment_btn:comment_btn},
      //                                 success:function(){
      //                                          $('#cmt-content').val('');
      //                                          $('#audio').attr('src','posttone1.mp3');            
                                      
      //                                  }
      //                        });
      //                 });
    });
  </script>