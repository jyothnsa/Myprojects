<?php
session_start();
?>



<!DOCTYPE html>


<html lang="en">
<head>
  <title></title>

<style>
  .nav.navbar-nav.navbar-right li a{
             color: #00FFFF;
   }

   /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

  </style>
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
      <a class="navbar-brand" href="#" style="color: white;">Queen's Boutique</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="firstpage.php" class="glyphicon glyphicon-home"></a></li>
        <li><a href="aboutus.html">About</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Choose ur Category<span class="caret"></span></a>
             <ul class="dropdown-menu">
              <li> <a href="clothing.php">Branded</a></li>
              <li> <a href="#">Designer</a></li>
             </ul>
        </li>
        <li><a href="na.php">New Arrilvals</a></li>
    
        <li><a href="feedback_page.php">Feedback</a></li>
      </ul>
     <ul class="nav navbar-nav navbar-right">
<?php
echo '<span style="color: #00FFFF; margin-right:30px;">Hello</span>';echo '&nbsp&nbsp';
echo '<span style="color: #00FFFF;">'. $_SESSION['user'] . '</span>';
 ?>
</ul>
        <ul class="nav navbar-nav navbar-right">
<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Signout</a></li>

      </ul>
    </div>
  </div>
</nav>
</p>
</body>
</html>
