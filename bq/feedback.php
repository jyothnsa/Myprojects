<?php
extract($_POST);
$servername="localhost";
$username="root";
$password="root";
$dbname="bqdatabase";
$email_id=$_POST['email_id'];
$name=$_POST['name'];
$rating=$_POST['rating'];
$feedback=$_POST['feedback'];
$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
  die('Could not connect: '.$conn->connect_error);
}

$sql = "INSERT INTO feedback_data (email_id, name,rating,feedback) VALUES ('$email_id','$name','$rating','$feedback')";

if (mysqli_query($conn,$sql)) {
  echo '<script>alert("Feedback sent successfully");
  window.location.href="feedback_page.php"</script>';
}else {
  echo "Sorry could not save your feedback".$conn->connect_error;
}
$conn->close();
?>
