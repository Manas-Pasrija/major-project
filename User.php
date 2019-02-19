<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="https://use.fontawesome.com/074968ab80.js"></script>

	<style>
	/*  body{
	  	 background:linear-gradient(141deg, #ea72aa 0%, #1fdbd1 105%, #2cd8e8 175%);
	  	 background:#5958f2;
	  	}
		*{
             margin:0px;
             padding: 0px;
		}
		section{
			height:30vh;
			position:relative;
			top:10vh;
		}
		.navbar-inverse{
			background:#4092E0;

		}
		 #nav a,#navbar-brand a{
		 	color:#fff;
		 }
		 #nav a:hover{
		 	background-color:#77cfed94;
        	 color:#fff;
		 }
       
        .active-nav{
        	 background-color:#F0EEB5;
        	 color:#262626;
        }
        section{
        	background:#F0EEB5;
        	border-radius:9px;
        	border:0px;
        	border: 2px solid #4092E0;
        	z-index:1;

              position: relative;
              top:;

        	
        }
        .navbar-header button{
        	 outline:none;
        }
        .centering{
              float:none;
              margin:0 auto;
             }*/
            
        /* #topic-q-form{
         	   position:relative;
         	   top:8vh;

         }*/
       /*  #heading3{
         	position:relative;
         	top:27vh;
         	color:black;
         }*/
         /*.p-btn{
         	color:white;
         	background:transparent;
         
         	border:1px solid #fff;
           

         }
         .p-btn:hover{
         	background:white;
         	color:black;
         	box-shadow:0px 0px 12px #fff;
         	transition:all 0.23s;
         }
        #tpc{
        	outline-color:black;
        }
        .fa-6{
        	font-size:1.3em;
        }*/
/*        #main-menu{
    height: 100vh;
    width: 300px;
    background-color: #181818;
    -webkit-clip-path:polygon(0 0,100% 0,0% 100%,0% 100%);
    position: fixed;
    top:0;
    left: -300px;
    transition: all .5s ease-in-out;
    
}
#main-menu ul{
    list-style: none;
    padding: 0px;
    margin: 0px;
    font-family: arial;
    color:white;
    text-align: center;
    position: absolute;
    top:50%;
    left: 50%;
    transform: translate(-50%,-50%);
}
#main-menu ul li{
    margin: 20px;
}
ul li:hover{
    cursor: pointer;
}
.line{
    height: 2px;
    width: 150px;
    background-color: white;
    margin-top: 10px;
    position: absolute;
    left: 50%;
    transform: translate(-50%);
    transition: all .3s;
}
ul li:hover .line{
    width: 180px;
}
#logo{
    position: absolute;
    top:100;
    left: 50%;
    transform: translate(-50%);
}
#close{
    position: absolute;
    bottom: 150;
    left: 50%;
    transform: translate(-50%);
}
#close:hover{
    cursor: pointer;
}
*/	</style>
</head>
<body>
       <!-- navigation bar start -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
				  
		  <div class="container-fluid">
		    
		    <div class="navbar-header" id="nav">
		      
		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>                        
		      </button>
              <a href="#" class="navbar-brand" > <i class="fa fa-bars fa-6" aria-hidden="true" id="menu-bar"></i></a>
		      <a class="navbar-brand" href="#">WebSiteName</a>
		       
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		    <ul class="nav navbar-nav" id="nav">
		     <li ><a href="#" name="nav">Home</a></li>
	      <li><a href="#" name="nav">Page 1</a></li>
	      <li><a href="#" name="nav">Page 2</a></li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right" id="nav">
	    	 <form class="navbar-form navbar-left" action="#">
	      <div class="form-group">
	        <input type="text" class="form-control col-xs-3" placeholder="Search">
	      </div>
	      <button type="submit" class="btn btn-default">Search</button>
	    </form>
	      <li><a href="#"> Sign Up</a></li>
	      <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>

	    </ul>
	  </div>

	  </div>
	</nav>
	<!-- navigation bar end -->
	
	   <div class="container ">
	   	<div class="row">
              
			  
			  	  <div class="col-lg-6"><h3>What's Your Question Today? Let's Discuss!</h3></div></div>
			  <div class="row">

			  	<div class="col-lg-6">
			  	<form class="form-horizontal" action="/action_page.php" id="topic-q-form">
				         <div class="form-group ">
						    <div class="col-sm-6">
						      <input type="text" class="form-control" id="title" placeholder="Write a Title" >
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-xs-6"> 
						      <textarea rows="5" class="form-control" id="tpc" placeholder="Write description....."></textarea> 
						    </div>
						  </div>
								     <div class="form-group">
									    <div class="col-sm-4 ">
										      <select class="form-control form-control-xs">
												  <option>Large select</option>
												  <option>Large select</option>
												  <option>Large select</option>
												</select>
                                               
                                         </div>
                                         </div>
                                         <div class=""><button type="submit" class="btn p-btn">Post To Timeline</button>
                                      	</div>
                            </form>

			  </div>
			</div>
		       
		
	</div>
	            
         
		
					<div class="row">
						<div class="col-lg-6 col-md-offset-3">
							<section>Section 1</section><br>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-offset-3">
							<section>section 2</section><br>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-offset-3">
							<section>section 3</section><br>
						</div>
					
			  </div>  					      
      
	   
		
<!-- 
	<script>
// 		$(document).ready(function(){
//    $("#menu-bar").click(function(){
//         $("#MainMenu").css("left","0px");
//         function showMenu(){
//             $("#main-menu").css("-webkit-clip-path","polygon(0 0,100% 0,100% 100%,0% 100%)");
//             $("#menu-bar").animate({right:'-100'},300);
//         }
//         setTimeout(showMenu,100);
//    });
    
//     $("#close").click(function(){
//             $("#main-menu").css("-webkit-clip-path","polygon(0 0,0% 0,100% 100%,0% 100%)");
//             function hideMenu(){
//                     $("#main-menu").css("left","-300px");
//                 $("#menu-bar").animate({right:'50'},300);
//             }
//         setTimeout(hideMenu,300);
        
//         function originalLayout(){
//             $("#main-menu").css("-webkit-clip-path","polygon(0 0,100% 0,0% 100%,0% 100%)");
//         }
//         setTimeout(originalLayout,600);
//     });
// });

	</script>
     -->

   
   
</body>
</html>