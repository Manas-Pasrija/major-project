
<!DOCTYPE html>
<html>
    <head>
         <title>Home | LoginPage</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="loginpage.css" rel="stylesheet"/>
        <!-- <link rel="stylesheet" href="particles.css"> -->
        <link rel="stylesheet" href="animate.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="JQUERY%20Main.js"></script>
    </head>
    <script>
        $(document).ready(function(){

            $('#main_signup_btn').click(function(event){
                  event.preventDefault();
                  var username= $('#main_username').val();
                  var  email  = $('#main_email').val();
                  var password=$('#main_password').val();
                  var confirm_password=$('#main_confirm_password').val();
                  var signup_btn=$('#main_signup_btn').val();
                  var confirm_password=$('#main_confirm_password').val();
                     $('#valid-message').load('insertsignup.php',{
                         username:username,
                         email:email,
                         password:password,
                         confirm_password:confirm_password,
                         signup_btn:signup_btn


                     }); 
            });

            $('#login_form').submit(function(){
                
                var email=$('#login_email').val();
                var password=$('#login_password').val();
                 if(email =="" || password== ""){
                    alert('please fill all fields');
                 }
            });
            
  });
    </script>
    <body id="bg">
    <div id="particles-js">
        
        <div id="box">
            <div id="main"></div>
            
            <div id="loginform">
                <h1>LOGIN</h1>
                <form action="login.php" method="POST" id="login_form">
                <input type="text" placeholder="Username" id="login_email" name="username"/><br>
                <input type="password" placeholder="Password"  id="login_password" name="password"/><br>
                <input type="submit" id="main_login_btn" value="LOGIN" name="submit" />
                <p id="result"></p>
                </form>
            </div>
            
            <div id="signupform">
                <h1>SIGN UP</h1>
                <form action="insertsignup.php" method="POST">
                <input type="text" placeholder="Full Name" id="main_username"/><br>
                <input type="email" placeholder="Email"  id="main_email"/><br>
                <input type="password" placeholder="Password" id="main_password"/><br>
                <input type="password" placeholder="confirm Password"  id="main_confirm_password"/><br>
                <input type="submit" id="main_signup_btn" value="SIGN UP" /><br>
                <p id="valid-message"></p>
             </form>
            </div>
            
            <div id="login_msg" >Have an account?</div>
            <div id="signup_msg">Don't have an account?</div>
            
            <button id="login_btn">LOGIN</button>
            <button id="signup_btn">SIGN UP</button>
            
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script>
        particlesJS.load('particles-js', 'particles.json', function() {
  console.log('particles.json loaded..');
});
    </script>
    </body>
</html>