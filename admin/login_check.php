<?php

session_start();
include "../config/connect.php";

$username = $_POST['username'];
$password = $_POST['password'];
		
	
$sql = "INSERT INTO admin SET username = '$username',password='$password'";

$t=mysqli_query($link,$sql);

if($t==true){
	
	$_SESSION['login']="<h1>admin save successfully....!</h1>";
	header('location:login1.php');
	} 
	else{
		
		  $_SESSION['login']="<h1>admin save problem,try again....!</h1>";
		  header('location:login1.php');
		}



	
		
?>