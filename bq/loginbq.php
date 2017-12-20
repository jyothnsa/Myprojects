<?php
session_start();
if(isset($_SESSION['user']))
{
header("Location:firstpage.php");
}
?>

<html>
<head>
<title> login </title>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="bqstyle.css">
<link rel="icon" type="image/png" href="http://localhost/my_projects/new/bq/imgs/favicon1.jpg">


<style>
.required .control-label:after{
   content:"*";
   color:black;
   float: right;
}
</style>
<link rel="icon" href="icon1.png">
<script>
    $(function(){
      $("#includenav").load("nav.php");
    });


function validateLogin() {
    var user = document.forms["loginform"]["username"].value;
    var pswd = document.forms["loginform"]["password"].value;
    if (user == "" || pswd == "") {
        alert("Proper login details must be required.");
        return false;
    }
}

function validateSignup() {
var email = document.forms["signup_form"]["email"].value;
var firstname = document.forms["signup_form"]["firstname"].value;
var pswd = document.forms["signup_form"]["passwd"].value;

if (email == "" || firstname == "" || pswd == ""){
     alert("Please give valid details for mandatory fields");
     return false;
   }

 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}
    </script>

</head>
<body class="three">
 <div class="container">
<div id="includenav"> </div>
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                        <form id="loginform" name="loginform" class="form-horizontal" role="form" action="bgsignin.php" method="post">

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username">
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>



                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <button id="btn-login" type="submit" class="btn btn-info" onclick="return validateLogin()">Login</button>
                                      <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account!
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </form>



                        </div>
                    </div>
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="loginbq.php">Sign In</a></div>
                        </div>
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form" name="signup_form" action="bglog.php" method="post">

                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>



                                <div class="form-group required">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">



                                    </div>
                                </div>

                                <div class="form-group required">
                                    <label for="firstname" class="col-md-3 control-label">First Name (or) User Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passwd" placeholder="Password">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <!-- Button -->
                                    <div class="col-md-offset-3 col-md-9">
                   <button id="btn-signup" type="submit" class="btn btn-info" onclick="return validateSignup()" ><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                        <span style="margin-left:8px;">or</span>
                                    </div>
                                </div>

                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">

                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>Sign Up with Facebook</button>
                                    </div>

                                </div>



                            </form>
                         </div>
                    </div>




         </div>
    </div>

</body>
</html>
