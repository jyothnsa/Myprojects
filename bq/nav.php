
<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
<p>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style="color:white;">Queen's Boutique</a>
    </div>
 <div class="collapse navbar-collapse" id="myNavbar" data-target=".navbar-collapse">
    <ul class="nav navbar-nav">
      <li><a href="play.php">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">

      <li>
<?php
if(empty($_SESSION['user']))
{

?><a href="loginbq.php"><span class="glyphicon glyphicon-log-in"></span> Sign in</a>
<?php
}
else{

?>
<a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Sign out</a>
<?php
}?>
</li>
    </ul>
</div>

</nav>
 </p>
</body>
</html>
