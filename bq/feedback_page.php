<?php
session_start();
if(!isset($_SESSION['user'])) {
      header("Location: play.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Give us a Feedback :)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="bqstyle.css">
<link rel="icon" type="image/png" href="http://localhost/my_projects/new/bq/imgs/favicon1.jpg">

<style>
html,body{
  overflow: hidden;
  margin-top:30px;
}
.form-group {
  margin-top:20px;
  margin-left: 30px;
}
.radio{
  margin-left:10%;
}
#btn-feedback {
  margin-top: 20px;
}
form {
  color: white;
  font-size: 18px;
}
main {
  font-style: italic;
  font-size: 30px;
}
p{
  font-style:italic;
  font-size:20px;
}
.align{
  margin-left:28%;
}
</style>
<script>
$(function(){
  $("#includenavf").load("navf.php");
});
</script>
</head>

<body class="two">
  <div id="includenavf"></div>
    <form id="feedback_form" name="feedback_form" class="form-horizontal" role="form" action="feedback.php" method="post">
  <main>
    Here at local it is our duty to serve you, the customer, and we take your feedback very seriously. Whether negative or positive, please let us know about your experience..
  </main>

    <div class="form-group">
      <label for="email" class="col-sm-2 col-sm-offset-2 control-label">Email: </label>
      <div class="col-sm-4">
        <input type="email" class="form-control" id="email_fb" name="email_id" placeholder="Email ID" required>
      </div>
    </div>
    <div class="form-group">
      <label for="name" class="col-sm-2 col-sm-offset-2 control-label">Name: </label>
      <div class="col-sm-4">
        <input type="name" class="form-control" id="name" name="name" placeholder="Name">
      </div>
    </div>
<div class="align">
   <p>Please provide your feedback on the quality of our service</p>

<div class="radio">
  <label>
  <input type="radio" name="rating" value="excellent"> Excellent </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="rating" value="verygood"> Very Good </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="rating" value="good"> Good </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="rating" value="average"> Average </label>

</div>
<div class="radio">
  <label>
    <input type="radio" name="rating" value="poor"> Poor </label>
</div></br>
<p>Do you have suggestions on what we can do to provide you with a better service?</p>
    <div class="col-md-6 col-md-offset-1">
  <textarea class="form-control" rows="3" placeholder="Comment here!!!!!" name="feedback"></textarea>
</div></br>
  <div class="col-md-offset-3 col-md-9">
      <button id="btn-feedback" type="submit" class="btn btn-default">Submit</button>
</div>
</div>
</form>
</body>
</html>
