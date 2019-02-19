<?php
require('db.php');
session_start();
 $background = array("images/1n.jpg","images/2n.jpg","images/3n.jpg","images/4n.png","images/5n.jpg","images/6n.jpg","images/7.jpg","images/8n.jpg","images/9n.jpg","images/10n.jpg","images/11n.jpg","images/12.jpg");
   $rand = array_rand($background);
   if(isset($_GET['id'])){
       $id =$_GET['id'];
       //echo $id;
       $query="SELECT * FROM users WHERE user_id=$id";
       $run=mysqli_query($con,$query);
       if(mysqli_num_rows($run)==1){
           $chatter_username=mysqli_fetch_assoc($run);
           //echo $chatter_username['username'];
       }
   }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title style="text-transform:capitalize;">Chat with <?php echo $chatter_username['username'];?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
      padding:0px;

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
    	background-color:RGBa(255, 215, 0,0.33);
    	 
    }
    body{
    	background:url(<?php echo $background[$rand]?>);
    /*	background-repeat:none-repeat;*/
    	background-size:cover;
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
     .badge:hover{
     	background:red;
     }
      #logo{
      font-family: 'Limelight', cursive; 
      color:#262626;
      font-size:2em;
     }
     #logo:hover{
      color:#ffffff;
     }
     #uploadbtn{
       display:none;
     }
     .wellst{
       background:rgba(192, 192, 192,0.23);
      border:none;
      padding:0px;
      height:58vh;   
    }
     .clsscroll{

         overflow:scroll;

           overflow-x:hidden;
           
     }
    ::-webkit-scrollbar{
      width:0.59vw;

    }
    ::-webkit-scrollbar-thumb{
      background:rgba(0,0,0,0.5);
      border-radius: 6px;
      cursor:pointer;
    }
    .message-div{
            padding:2px;
             background:rgba(0,0,0,0.2);
              width: auto;
    }
    .message-div:nth-child(even){
      background:rgba(237, 14, 73,0.69);
    }
    .message-div:nth-child(odd){
      background:rgba(206, 57, 216,0.69);
    }
    #chatter-id{
        display:none;
    }
  </style>
<!--  $background = array("images/bg/house.jpg","images/bg/ocean.jpg","images/bg/car.jpg");
$rand = array_rand($background);

<body background="<?php //echo $background[$rand]; ?>"> -->
<link href="lib/css/emoji.css" rel="stylesheet">
</head>
<body>
  <input name="chatter-id" type="text" id="chatter-id" value="<?php echo $id ?>" /> 
<nav class="navbar navbar-inverse" >
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
        <li><a href="mainpage.php"><i class="fa fa-home fa-lg" aria-hidden="true"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-comments fa-lg" aria-hidden="true"></i><span class="badge">2</span> Messages</a></li>
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
        <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
        <li><a href="logout.php"><i class="fa fa-sign-out " aria-hidden="true"></i> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  <audio src="#" autoplay="autoplay" id="msg-audio"></audio>
<div class="container text-center" id="section">    
  <div class="row">
    <div class="col-sm-3 well ">
      <div class="well">
        <p><a href="elegantshowdp.php" style="text-transform:capitalize;"><?php echo $_SESSION['username'];?> Profile Pic</a></p>
        <a href="elegantshowdp.php" id="p1"></a>
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
      <p><a href="chat.html"><i class="fa fa-commenting-o fa-lg" aria-hidden="true"></i>  Chat Room</a></p>
      <p><a href="updateuserdetail.php"><i class="fa fa-cogs fa-lg" aria-hidden="true"></i> Settings</a></p>
    </div>
    <div class="col-sm-7">
    
      <div class="row" >
        <div class="col-sm-12" >
          <div style="background:linear-gradient(to right,#262626,#ccccccff,#262626);">
          <h1 style="color:#272727; box-shadow:0px 17px 10px -10px rgba(0,0,0,0.4); text-transform:capitalize;" >Message to <?php echo $chatter_username['username'];?></h1></div>
          <div class="well wellst clsscroll" >
         
          	 <div id="msg-result">          
  				  <div class="well message-div" >
             <p><a href="#" class="pull-left" style="font-size:1em;">Rohan Sharma</a><br><span class="pull-right" style="background-color: RGBa(0, 0, 0,0.37); color:white;">8:43 pm</span></p>
               <p class="text">hello bhai.</p>
          </div>
          <!-- </div>
                <div class="well message-div">
             <p><a href="#" class="pull-left" style="font-size:1em;">Manas Pasrija</a><br><span class="pull-right" style="background-color: RGBa(0, 0, 0,0.37); color:white;">8:48 pm</span></p>
               <p class="text">hello bhai.</p>
          </div>
           <div class="well message-div">
             <p><a href="#" class="pull-left" style="font-size:1em;">Rohan Sharma</a><br><span class="pull-right" style="background-color: RGBa(0, 0, 0,0.37); color:white;">8:49 pm</span></p>
               <p class="text">hello bhai.</p>
          </div> 
           <div class="well message-div">
             <p><a href="#" class="pull-left" style="font-size:1em;">Manas pasrija</a><br><span class="pull-right" style="background-color: RGBa(0, 0, 0,0.37); color:white;">11:43 pm</span></p>
               <p class="text">hello bhai.</p>
          </div>
           <div class="well message-div">
             <p><a href="#" class="pull-left" style="font-size:1em;">Rohan Sharma</a><br><span class="pull-right" style="background-color: RGBa(0, 0, 0,0.37); color:white;">10:43 pm</span></p>
               <p class="text">hello bhai.</p>
          </div>
           <div class="well message-div">
             <p><a href="#" class="pull-left" style="font-size:1em;">Manas pasrija</a><br><span class="pull-right" style="background-color: RGBa(0, 0, 0,0.37); color:white;">2:43 am</span></p>
               <p class="text">sadfasdfsdekrjeljroeojro</p>
          </div>
           <div class="well message-div">
             <p><a href="#" class="pull-left" style="font-size:1em;">Rohan Sharma</a><br><span class="pull-right" style="background-color: RGBa(0, 0, 0,0.37); color:white;">2:43 pm</span></p>
               <p class="text">eoreoirlkvajfdsf; ;sdf;asdf'df;asdfs;</p>
          </div>
           <div class="well message-div">
             <p><a href="#" class="pull-left" style="font-size:1em;">Rohan Sharma</a><br><span class="pull-right" style="background-color: RGBa(0, 0, 0,0.37); color:white;">8:43 pm</span></p>
               <p class="text">sadf;asd;fjsdafk;sd;fjasd;fa;sdfa;sdfjsa;dfja;sdjfas</p>
          </div>
           <div class="well message-div">
             <p><a href="#" class="pull-left" style="font-size:1em;">Rohan Sharma</a><br><span class="pull-right" style="background-color: RGBa(0, 0, 0,0.37); color:white;">12:43 pm</span></p>
               <p class="text">;fjasd;fasd;fa;sdfjasdfjasd;ereworqeworqoeruqeow.</p>-->
          </div>                   
      </div><!--main well close-->

    </div>
 </div>
       
           <div class="row">
        <div class="col-sm-12">
          <div class="well">
            
            <form class="form-horizontal" action="insert_message.php" id="topic-q-form">
                        
                 
              <div class="form-group">
                <div class="col-sm-12">
                   <p class="lead emoji-picker-container">
              <textarea rows="2" class="form-control" id="msg-content" placeholder="Write Messages....." data-emojiable="true" data-emoji-input="unicode"></textarea> </p>
                </div>
              </div>
             <button type="submit" name="msg-send" id="msg-send" style="font-size:1.2em;" class="btn btn-warning btn-block">Send Message</button>
        
        </form>
            
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

<!-- <footer class="container-fluid text-center">
  <p>Footer Text Copyrighted by 2018 &copy; Manas Pasrija..</p><br>
  
</footer> -->
<script src="ajax_dpname.js"></script>
<script>
  $(document).ready(function(){
        var id=<?php echo $id?>;
       $('#msg-send').click(function(event){
            event.preventDefault();
        var id=<?php echo $id?>;
        var msgcontent=$('#msg-content').val();
        var submit=$('#msg-send').val();

                   //alert('id='+id+'msgcontent='+msgcontent);
                   $.ajax({

                          type:'post',
                          url:'insert_message.php',
                          data:{id:id,msgcontent:msgcontent,submit:submit},
                          success:function(){
                                            $('#msg-result').load('show_msg.php',{id:id});              
                                          $('#msg-content').val('');
                                          $('#msg-audio').attr('src','posttone.mp3');
                                       }
                                 });
               });
         setInterval(function(){$('#msg-result').load('show_msg.php',{id:id})},300); 
  });
</script>
<!-- Begin emoji-picker JavaScript -->
    <script src="lib/js/config.js"></script>
    <script src="lib/js/util.js"></script>
    <script src="lib/js/jquery.emojiarea.js"></script>
    <script src="lib/js/emoji-picker.js"></script>
    <!-- End emoji-picker JavaScript -->

    <script>
      $(function() {
        // Initializes and creates emoji set from sprite sheet
        window.emojiPicker = new EmojiPicker({
          emojiable_selector: '[data-emojiable=true]',
          assetsPath: 'lib/img/',
          popupButtonClasses: 'fa fa-smile-o'
        });
        // Finds all elements with `emojiable_selector` and converts them to rich emoji input fields
        // You may want to delay this step if you have dynamically created input fields that appear later in the loading process
        // It can be called as many times as necessary; previously converted input fields will not be converted again
        window.emojiPicker.discover();
      });
    </script>
    <script>
      // Google Analytics
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-49610253-3', 'auto');
      ga('send', 'pageview');
    </script>
  </script>
</body>
</html>