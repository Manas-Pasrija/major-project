  $(document).ready(function(){


                   $("#tpc_post_timeline").click(function(event){
                           event.preventDefault();
                         var title= $('#tpc_title').val();
                         var description= $('#tpc_description').val();
                         var select= $("#tpc_select").val();
                         var post_timeline=$("#tpc_post_timeline").val();

                         //alert('title:'+title+',description:'+description+',select:'+select);
                           
                   $.ajax({

                          type:'post',
                          url:'insert_post.php',
                          data:{title:title,description:description,select:select,post_timeline:post_timeline},
                          success:function(){
                                                          
                                      $('#tpc_title').val('');
                                      $('#tpc_description').val('');
                                       $('#post_result').load('show_post.php');
                                     
                 
                                       $('#audio').attr('src','posttone1.mp3');
                                       }
                                 });
                           
                  // $('#post_result').load('show_post.php');
                  

                   });
                        

                  $("#post_result").load('show_post.php');


         });