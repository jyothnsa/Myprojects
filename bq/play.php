
<?php
session_start();
if(isset($_SESSION['user']))
{
header("Location:loginbq.php");
}
?>
<html>

<head>

<title>Try It</title>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/png" href="http://localhost/my_projects/new/bq/imgs/favicon1.jpg">

<link rel="stylesheet" type="text/css" href="bqstyle.css">

<script> $('.carousel').carousel(); </script>
<script>
    $(function(){
      $("#includenav").load("nav.php");
    });
    </script>

</head>
<body>
 <div id="includenav"></div>

<div class="carousel slide carousel-fade" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
        </div>
        <div class="item">
        </div>
        <div class="item">
        </div>
        <div class="item">
         </div>
    </div>
</div>

</body>
</html>
