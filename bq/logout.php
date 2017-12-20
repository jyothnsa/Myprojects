<?php 
session_start();
if(!isset($_SESSION['user']))
{
header("Location:play.php");
}
session_unset(); 

session_destroy();

header("Location: play.php");
?>
