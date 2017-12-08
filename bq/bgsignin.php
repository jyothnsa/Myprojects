<?php
session_start();
if(isset($_SESSION['username']))
{
header("Location:play.php");

}
// Grab User submitted information
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bqdatabase";
$user = $_POST['username'];
$passwd = $_POST['password'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if($conn->connect_error)  
{  
  die('Could not connect: ' .$conn->connect_error);  
}  
else
{
$query = "SELECT * FROM signupdata where firstname='$user' AND passwd='$passwd'";
$result = $conn->query($query);


if($result->num_rows > 0) {
$_SESSION['user'] = $user;

header("Location: play.php");
 }
else {
echo '<script>alert("Check Credentials")
window.location.href="loginbq.php"</script>';
}
}

$conn->close();

?>
