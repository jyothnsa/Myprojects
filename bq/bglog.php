<?php

// Grab User submitted information
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bqdatabase";
$email = $_POST['email'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$passwd= $_POST['passwd'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if($conn->connect_error)
{
  die('Could not connect: ' . $conn->connect_error);
}

$sql = "INSERT INTO signupdata (email, firstname, lastname, passwd)
VALUES ('$email', '$firstname', '$lastname', '$passwd')";

if(mysqli_query($conn, $sql)){
 echo '<script>alert("Another Record inserted successfully")
window.location.href="loginbq.php"</script>';
}else{
echo "Could not insert record". $conn->connect_error;
}
$conn->close();
?>
