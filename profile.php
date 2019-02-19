<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $_SESSION['username']; ?></title>
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
    	background-color:RGBa(255, 215, 0,0.33);
    	 
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
      #logo{
      font-family: 'Limelight', cursive; 
      color:#262626;
      font-size:2em;
     }
     #logo:hover{
      color:#ffffff;
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
     
     #uploadbtn{
       display:none;
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
    ::-webkit-scrollbar{
      width:0.59vw;

    }
    ::-webkit-scrollbar-thumb{
      background:rgba(0,0,0,0.2);;
      border-radius: 6px;
      cursor:pointer;
    }
  </style>
   
</head>
<body>
   
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
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
        <li><a href="logout.php"><i class="fa fa-sign-out " aria-hidden="true"></i> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
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
      <!-- <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p><strong>Ey!</strong></p>
        People are looking at your profile. Find out who.
      </div>
      <p><a href="#"><i class="fa fa-pencil-square" aria-hidden="true"></i> Edit Post</a></p> -->
      <p><a href="chat.html"><i class="fa fa-commenting-o fa-lg" aria-hidden="true"></i>  Chat Room</a></p>
      <p><a href="updateuserdetail.html"><i class="fa fa-cogs fa-lg" aria-hidden="true"></i> Settings</a></p>
    </div>
    <div class="col-sm-7">
    
      <div class="row">
        <div class="col-sm-12">
          <div class="well">
         
          	            <h1 style="color:#CFCF13; background-color: RGBa(0, 0, 0,0.56); box-shadow:0px 17px 10px -10px rgba(0,0,0,0.4); text-transform:capitalize;"><?php echo $_SESSION['username'];?></h1>
                           <div class="ulploadfile"> 
                             <div id="p">
                               
                             </div>
                             <form action="uploaddp.php" method="POST" enctype="multipart/form-data">
                                                         
                              <label for="uploadbtn" class="btn btn-danger" >Change Profile Pic</label>
                              <input type="file"  id="uploadbtn" name="file" ><br>

                           </div>
                    <input type="submit" name="submit" value="UPLOAD!!" class="btn btn-success btn-block">
                            </div>
                    </form>
        </div>
      </div>
       <div class="well wellst clsscroll" id="mypost-result">
           <div class="row">
        <div class="col-sm-12">
          <div class="well wells">
            
           <p><a href="#" class="text-center">John</a><br><span class="pull-right" style="background-color: RGBa(0, 0, 0,0.37); color:white;">8:33 pm</span></p>
           
          
           <a href="#"><img src="images/1.jpg" class="img-circle pull-left" height="55" width="55" alt="Avatar"></a>
            <p class="text">Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
            
          </div>
          
        </div>
       
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="well wells">
           <p><a href="#" class="text-center user">Manas Pasrija</a><br><span class="pull-right" style="background-color: RGBa(0, 0, 0,0.37); color:white;">2:12 pm</span></p>
           <a href="#"><img src="images/2.jpg" class="img-circle pull-left" height="55" width="55" alt="Avatar"></a>
            <p class="text">Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
          
        </div>
        
      </div>
      <div class="row">
       <div class="col-sm-12">
          <div class="well wells">
           <p><a href="#" class="text-center user">Puneet Pasrija</a><br><span class="pull-right" style="background-color: RGBa(0, 0, 0,0.37); color:white;">8:53 pm</span></p>
           <a href="#"><img src="images/3.jpg" class="img-circle pull-left" height="55" width="55" alt="Avatar"></a>
            <p class="text">Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
          
        </div>
        
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="well wells">
           <p><a href="#" class="text-center user">Rohan Sharma</a><br><span class="pull-right" style="background-color: RGBa(0, 0, 0,0.37); color:white;">8:43 pm</span></p>
           <a href="#"><img src="images/4.jpg" class="img-circle pull-left" height="55" width="55" alt="Avatar"></a>
            <p class="text">Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
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
<script src="ajax_dpname.js"></script>
<script>
  $(document).ready(function(){
        setInterval(function(){$('#mypost-result').load('myposts.php')},300);
  });
</script>
</body>
</html>