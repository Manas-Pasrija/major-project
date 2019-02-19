<?php
    session_start();
    require("db.php");
   // require('show_dpname.php');
    // $finaldpname = file_get_contents('show_dpname.html');
    // echo $finaldpname;

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home page | <?php echo $_SESSION['username']?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://use.fontawesome.com/074968ab80.js"></script>
  <style>    
    /* Set black background color, white text and some padding */
    @import url('https://fonts.googleapis.com/css?family=Oswald');
    @import url('https://fonts.googleapis.com/css?family=Oswald|PT+Sans+Narrow');
    @import url('https://fonts.googleapis.com/css?family=Permanent+Marker');
    @import url('https://fonts.googleapis.com/css?family=Limelight|Permanent+Marker');
    footer {
      background-color:#59565ab8;
      color: white;
      padding: 15px;

    }
    
    .navbar-inverse{
             background:rgba(49, 176, 213,0.67);
             border-color:#31B0D5;
    }
    #myNavbar ul li a{
    	color:#262626;
    }
    #myNavbar ul li a:hover{
    	color:#fff;
    }
    .well{
           background-color:RGBa(192, 192, 192,0.79);
           color:black;
           border:none ;
    }
    .wells{
    	  background:RGBa(206, 147, 216,0.55 );
   
    	 
    }
    body{
    	background: url(images/7.jpg);
    /*	background-repeat:none-repeat;*/
    	/*background:cover;*/
    	background-attachment:fixed;
        font-family: 'Oswald', sans-serif;
     font-family: 'PT Sans Narrow', sans-serif;

    }
    body a{
    	 
    	 font-weight: bold;
    	 
    	 font-size:1.32em;
    	
    }
    
    
    .text{
    	background-color:RGBa(192, 192, 192,0.22);
    }
    p{
    	font-size:1.2em;
    }
    .btn{
    	    box-shadow:0px 17px 10px -10px rgba(0,0,0,0.4);
    	    transition:all ease-in-out 300ms;
    }
    .btn:hover{
    	-webkit-box-shadow:0px 37px 20px -20px #00000066;
    	box-shadow:0px 37px 20px -20px #00000066;
    	transform:translate(0px, -10px);
    }
    
     #section a{
     	color:black;
     }
     #section a:hover{
     	color:white;
     	text-decoration: none;
     }
     .badge{
     	background:red;
     	position:relative;
     	top:-1.5vh;
     	left:-1vh;
     }
     .active-menu{
     	background:RGBa(133, 134, 233,0.56);
     	
     }
     #logo{
     	font-family: 'Limelight', cursive; 
     	color:#262626;
     	font-size:2em;

     }
     #logo:hover{
     	color:#ffffff;
     }
      ::-webkit-scrollbar{
			width:0.59vw;

		}
    ::-webkit-scrollbar-thumb{
			background:rgba(0,0,0,0.2);;
			border-radius: 6px;
			cursor:pointer;
		}
		
		.btn-default{
			border:none;
			color:white;
			font-size:0.75em;
			border-radius:0px;
			background:rgba(120, 1, 200,0.55 );
			letter-spacing:0.12vw;
		}
		.wellst{
			background:transparent;
			border:none;
			padding:0px;
			height:66vh;
		}
     .clsscroll{

     	   overflow:scroll;

           overflow-x:hidden;
           
     }
     .reply{
     	background:transparent;
     	border:none;
     	padding:0px;
     	height:24vh;
     }
    .reply-content:nth-child(even){
    	background:#adeccc;
    	padding:1px;
    }
    .reply-content:nth-child(odd){
    	background:#abbdcf;
    	padding:1px;
    }
    
  </style>

</head>
<body>
   
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" id="logo">L0G0</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#" id="menu-a"><i class="fa fa-home fa-lg" aria-hidden="true"></i> Home</a></li>
        <li><a href="chat.html" id="menu-a"><i class="fa fa-comments fa-lg" aria-hidden="true"></i><span class="badge">2</span> Messages</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Search..">
          <span class="input-group-btn">
            <button class="btn btn-info" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>        
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="profile.php" id="menu-a"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
        <li><a href="logout.php" id="menu-a"><i class="fa fa-sign-out " aria-hidden="true"></i> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container text-center" id="section">    
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <p><a href="elegantshowdp.php" style="text-transform:capitalize;"><?php echo $_SESSION['username'];?>  Profile Pic</a></p>  
        <a href="elegantshowdp.php" id="p1"></a>
        <audio src="#" autoplay="autoplay" id="audio"> </audio>
      </div>
      <div class="well">
        <p><a href="#">Interests</a></p>
        <p>
          <span class="label label-default">News</span>
          <span class="label label-primary">Cricket</span>
          <span class="label label-success">Labels</span>
          <span class="label label-info">Football</span>
          <span class="label label-warning">Gaming</span>
          <span class="label label-danger">Friends</span>
        </p>
      </div>
      <!-- <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p><strong>Ey!</strong></p>
        People are looking at your profile. Find out who.
      </div>
      <p><a href="#"><i class="fa fa-pencil-square" aria-hidden="true"></i> Edit Post</a></p> -->
      <p><a href="chat.php"><i class="fa fa-commenting-o fa-lg" aria-hidden="true"></i>  Chat Room</a></p>
      <p><a href="updateuserdetail.php"><i class="fa fa-cogs fa-lg" aria-hidden="true"></i> Settings</a></p>
    </div>
    <div class="col-sm-7">
    
      <div class="row">
        <div class="col-sm-12">
          <div class="well">
          <form class="form-horizontal"  id="topic-q-form" method="POST">
          	            <h1 style="color:#CFCF13; background-color: RGBa(0, 0, 0,0.56); box-shadow:0px 17px 10px -10px rgba(0,0,0,0.4);">What's Your Question Today? Let's Discuss!</h1>
				         <div class="form-group ">
						    <div class="col-sm-12">
						      <input type="text" class="form-control"  placeholder="Write a Title" class="input" name="title" id="tpc_title">
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-sm-12"> 
						      <textarea rows="5" class="form-control" id="tpc_description" name="description" placeholder="Write description....."></textarea> 
						    </div>
						  </div>
								     <div class="form-group">
									    <div class="col-sm-12">
										      <select class="form-control form-control-xs" name="select" id="tpc_select">
												  <option>Html</option>
												  <option>Css</option>
												  <option>Php</option>
                          <option>Ajax</option>
												</select>
                                               
                                         </div>
                                         </div>
                                       <button style="font-size:1.2em;" class="btn btn-info btn-block" id="tpc_post_timeline" name="post_timeline">Post To Timeline</button>
                                </form>
                            </div>

                 </div>
      </div>
          <div class="well wellst clsscroll" id="post_result">
           <div class="row">
        <div class="col-sm-12" >
          <div class="well wells">
           <p><a href="#" class="text-center">John</a><br><span class="pull-right" style="background-color: RGBa(0, 0, 0,0.37); color:white;"><?php date_default_timezone_set('Asia/Kolkata'); echo date("D,g:i A"); ?></span></p>
           <a href="#"><img src="images/1n.jpg" class="img-circle pull-left" height="55" width="55" alt="Avatar"></a>
            <p class="text"><span style="text-decoration:underline;">#--Title Just Forgot that I had to mention--#</span><span style="color:firebrick;  text-transform:uppercase;"> @html</span> <br>something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't. <button class="btn-sm btn-default pull-right" data-toggle="modal" data-target="#1">Comment</button></p>
                 <?php include("modal.php");?>
          </div>
          
        </div>
       
      </div>

      <div class="row">
        <div class="col-sm-12">
          <div class="well wells">
           <p><a href="#" class="text-center">Manas Pasrija</a><br><span class="pull-right" style="background-color: RGBa(0, 0, 0,0.37); color:white;">1:33 pm</span></p>
           <a href="#"><img src="images/2n.jpg" class="img-circle pull-left" height="55" width="55" alt="Avatar"></a>
            <p class="text">Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't. I remember.... no I don't<button class="btn-sm btn-default pull-right">Comment</button></p>
          </div>
          
        </div>
        
      </div>
      <div class="row">
       <div class="col-sm-12">
          <div class="well wells">
           <p><a href="#" class="text-center">Puneet Pasrija</a><br><span class="pull-right" style="background-color: RGBa(0, 0, 0,0.37); color:white;">5:33 am</span></p>
           <a href="#"><img src="<?php echo $_SESSION['profile_pic'];?>" class="img-circle pull-left" height="55" width="55" alt="Avatar"></a>
            <p class="text">Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. .<button class="btn-sm btn-default pull-right">Comment</button></p>
          </div>
          
        </div>
        
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="well wells">
           <p><a href="#" class="text-center">Rohan Sharma</a><br><span class="pull-right" style="background-color: RGBa(0, 0, 0,0.37); color:white;">6:33 pm</span></p>
           <a href="#"><img src="images/1n.jpg" class="img-circle pull-left" height="55" width="55" alt="Avatar"></a>
            <p class="text">Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait.<button class="btn-sm btn-default pull-right">Comment</button></p>
          </div>
          
        </div>
        
      </div>     
    </div>
    </div>
    <div class="col-sm-2 well">
      <div class="thumbnail">
        <p>Upcoming Events:</p>
        <img src="images/2n.jpg" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>Fri. 27 November 2015</p>
        <button class="btn btn-primary">Info</button>
      </div>      
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text Copyrighted by 2018 &copy; Manas Pasrija..</p>
</footer>
<script src="ajax_post.js"></script>
<!--  SELECT 'p.post_id', 'u.username','p.post_title','p.post_name','p.post_content','p.post_time' FROM `post` p INNER JOIN users u ON 'p.user_id'='u.user_id' WHERE 'u.user_id=$user_id' -->
<!-- select a.message, b.username, <<== needed also c.username <<== needed also from chat a inner join users b on a.receiver_msg_id = b.user_id inner join users c on a.sender_msg_id = c.user_id -->
<!-- select a.msg_content, b.username as sender_username, c.username as receiver_username from chat a inner join users b on a.sender_msg_id= b.user_id inner join users c on a.receiver_msg_id = c.user_id WHERE (a.sender_msg_id=3 AND a.receiver_msg_id=1) OR (a.sender_msg_id=1 AND a.receiver_msg_id=3) -->
<script>
  $(document).ready(function(){
    $('btn').click(function(){
        
        //var id=$(this).attr('name','hello');
        ///document.write(id)
        alert('hello world');
      });
  });

  
</script>
<script src="ajax_dpname.js"></script>
</body>
</html>

