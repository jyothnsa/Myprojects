<?php
session_start();
if(!isset($_SESSION['user'])) {
      header("Location: play.php");
}
?>



<!DOCTYPE html>


<html lang="en">
<head>
  <title>Welcome:)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/png" href="http://localhost/my_projects/new/bq/imgs/favicon1.jpg">

  <style>
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

   body {
      background:#101010;
        }

  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      overflow: hidden;

  }
h2 {
font-family: Comic Sans MS;
 color: #00FFFF;

 }
.row {
  padding-top: 20px;
  margin-left: 70px;
}

p {
margin-right: 20%;
font-family: Comic Sans MS;
color: #00FFFF;

}
  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none;

    }
  }
  </style>

<script>
    $(function(){
      $("#includenavf").load("navf.php");
    });
    </script>

</head>
<body>
 <div id="includenavf"></div>

<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000" style="overflow: hidden;">


    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="http://localhost/my_projects/new/bq/imgs/firstpage/welll.jpg" alt="Image" class="img-responsive" >
      </div>
      <div class ="item">
        <img src="http://localhost/my_projects/new/bq/imgs/firstpage/secondimg.jpg" alt="Image" class = "img responsive">
      </div>
      <div class="item">
        <img src="http://localhost/my_projects/new/bq/imgs/firstpage/thirdimg.jpg" alt="Image" class="img-responsive" >
      </div>
      <div class="item">
        <img src="http://localhost/my_projects/new/bq/imgs/firstpage/fourthimg.jpg" alt="Image" class="img-responsive">
      </div>
       <div class="item">
        <img src="http://localhost/my_projects/new/bq/imgs/firstpage/fifthimg.jpg" alt="Image" class="img-responsive">
      </div>

    </div>

</div>

<div class="container text-center"> <br>
<h2>Celebrate Moment</h2><br>
  <div class="row">
    <div class="col-sm-4"><!-- new arrivals -->
 <a href="#">
      <img src="http://localhost/my_projects/new/bq/imgs/firstpage/divimg2.jpg" class="img-responsive"alt="Image">
</a>
<p>New Arrivals</p>
    </div>

       <div class="col-sm-4"><!-- brands -->
 <a href="clothing.php">
       <img src="http://localhost/my_projects/new/bq/imgs/firstpage/divimg1.jpg" class="img-responsive" alt="Image"></a>
<p>Brands</p>
    </div>

</div><br>

<footer class="container-fluid text-center">
  <p style="align:center; margin-left: 10%; color:black;">Hope you like it :) :) :)</p>
</footer>

</body>
</html>
