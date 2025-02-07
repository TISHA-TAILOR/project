<?php

session_start();
include "config/connect.php";

$category_name = $_POST['category_name'];

		
	
$sql = "INSERT INTO category SET category_name = '$category_name'";
echo $sql;

$t=mysqli_query($link,$sql);

if($t==true){
	
	$_SESSION['category']="<h1>category save successfully....!</h1>";
	header('location:category.php');
	} 
	else{
		
		  $_SESSION['category']="<h1>category save problem,try again....!</h1>";
		  header('location:category.php');
		}



	
		
?>