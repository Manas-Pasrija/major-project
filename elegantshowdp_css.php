<?php session_start();?>
<style>
    body{
    margin:0;
    padding:0;
    background:linear-gradient(to right, #f2465dff,#f2465daa,#f2465dff);
}
#main{
    height:600px;
    width:900px;
    /*background-image:url(fishmen.jpg);*/
    background-size: cover;
    position:relative;
    left:200px;
    top:20px;
}
#d1 {
    height: 200px;
    width: 150px;
    box-shadow: 0px 0px 25px rgba(0,0,0,1);
    position: absolute;
    background-image: url(<?php echo $_SESSION['profile_pic'];?>);
    background-size: 1150px 650px;
    background-position: -35px 624px;
    z-index: 4;
    background-blend-mode:hard-light;
}
#d2 {
    height: 500px;
    width: 400px;
    box-shadow: 0px 0px 25px rgba(0,0,0,1);
    background-image: url(<?php echo $_SESSION['profile_pic'];?>);
    position: absolute;
    top: 80px;
    left: 400px;
    background-size: 946px 620px;
    background-position: -407px 529px;
    z-index: 4;
}
#d3 {
    height: 600px;
    width: 450px;
    box-shadow: 0px 0px 25px rgba(0,0,0,1);
    position: absolute;
    top: 0px;
    left: 44px;
    background-image: url(<?php echo $_SESSION['profile_pic'];?>);
    background-size: 902px 632px;
    background-position: -33px 615px;
    z-index: 3;
}

#d4 {
    height: 500px;
    width: 400px;
    position: absolute;
    box-shadow: 0px 0px 25px rgba(0,0,0,1);
    top: 0px;
    left: 450px;
    background-image: url(<?php echo $_SESSION['profile_pic'];?>);
    background-size: 946px 620px;
    background-position: -458px 609px;
    z-index: 1;
}
.bounceInDown{
  animation-duration:2.88s;
  animation-delay:1.90s;
  animation-iteration-count: 1;
}
.bounceInRight{
  animation-duration:1.44s;
  animation-delay: 1.22s;
  animation-iteration-count: 1;
}
.flipInY{
     animation-duration:1.88s;
     animation-delay: 2s;
    animation-iteration-count: 1;
}
code{
    height: 100%;
}
</style>
