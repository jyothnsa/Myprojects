<?php
session_start();
if (!isset($_SESSION['user'])) {
       header("Location: play.php");
     }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title> Shop Apparels </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="bqstyle.css">
  <link rel="icon" type="image/png" href="http://localhost/my_projects/new/bq/imgs/favicon1.jpg">
<style>

.row-one{
  margin-top: 100px;
}
.row-two,.row-three{
  margin-top:30px;
}

</style>

<script>
$(function(){
  $("#includenavf").load("navf.php")
});
</script>
</head>

<body class="six">
<div id="includenavf"></div>
  <div class="container-fuild">
    <div class="row row-one">
      <div class=" col col-lg-2 col-md-2 col-sm-4 col-lg-offset-1">
        <a href="http://www.biba.in/?gclid=CIn3j4TnhNICFcIQaAod85oK4g&ef_id=WJmYsgAABWpJFA0o:20170210053337:s">
        <img class="responsive" src="http://localhost/my_projects/new/bq/imgs/clothing/bibalogo.png" alt="biba"></a>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-4 col-lg-offset-right-1">
        <a href="http://www.forever21.com/">
        <img class="responsive" src="http://localhost/my_projects/new/bq/imgs/clothing/forever.jpg" alt="forever21"></a>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-lg-offset-right-1">
      <a href="http://www.fusionbeats.in/">
      <img class="responsive" src="http://localhost/my_projects/new/bq/imgs/clothing/fusionbeats.jpg" alt="fusion_beats"></a>
  </div>
  <div class="col-lg-2 col-md-2 col-sm-4 col-lg-offset-right-1">
    <img class="responsive" src="http://localhost/my_projects/new/bq/imgs/clothing/fusionbeats.jpg">
  </div>
  <div class="col-lg-2 col-md-2 col-sm-4 col-lg-offset-right-1">
    <img class="responsive" src="http://localhost/my_projects/new/bq/imgs/clothing/bibalogo.png">
  </div>
  </div>

  <div class="row row-two">
    <div class="col col-lg-2 col-md-2 col-sm-4 col-lg-offset-1">
      <a href="http://www.fabindia.com/?utm_source=google&utm_medium=cpc&utm_campaign=IN_FabIndia&gclid=CLqh4P3ghNICFdGGaAodup0BzA">
      <img class="responsive" src="http://localhost/my_projects/new/bq/imgs/clothing/fab.jpg" alt="fabindia"></a>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-lg-offset-right-1">
      <a href="https://www.anouk.com/">
      <img class="responsive" src="http://localhost/my_projects/new/bq/imgs/clothing/anoukk.jpg" alt="anouk"></a>
  </div>
  <div class="col-lg-2 col-md-2 col-sm-4 col-lg-offset-right-1">
    <a href="https://wforwoman.com/">
    <img class="responsive" src="http://localhost/my_projects/new/bq/imgs/clothing/wlogo.png" alt="wforwoman"></a>
</div>
<div class="col-lg-2 col-md-2 col-sm-4 col-lg-offset-right-1">
  <img class="responsive" src="http://localhost/my_projects/new/bq/imgs/clothing/wlogo.png">
</div>
<div class="col-lg-2 col-md-2 col-sm-4 col-lg-offset-right-1">
  <img class="responsive" src="http://localhost/my_projects/new/bq/imgs/clothing/bibalogo.png">
</div>
</div>
<div class="row row-three">
  <div class="col-lg-2 col-md-2 col-sm-4 col-lg-offset-1">
    <img class="responsive" src="http://localhost/my_projects/new/bq/imgs/clothing/fab.jpg">
  </div>
  <div class="col-lg-2 col-md-2 col-sm-4 col-lg-offset-right-1">
    <img class="responsive" src="http://localhost/my_projects/new/bq/imgs/clothing/anoukk.jpg">
</div>
<div class="col-lg-2 col-md-2 col-sm-4 col-lg-offset-right-1">
  <img class="responsive" src="http://localhost/my_projects/new/bq/imgs/clothing/wlogo.png">
</div>
<div class="col-lg-2 col-md-2 col-sm-4 col-lg-offset-right-1">
  <img class="responsive" src="http://localhost/my_projects/new/bq/imgs/clothing/wlogo.png">
</div>
<div class="col-lg-2 col-md-2 col-sm-4 col-lg-offset-right-1">
  <img class="responsive" src="http://localhost/my_projects/new/bq/imgs/clothing/bibalogo.png">
</div>
</div>
</div>

</body>
</html>
