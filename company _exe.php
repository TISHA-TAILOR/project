<?php
session_start(); 
include 'config/connect.php';

$name= $_POST['name'];
$cat_id=$_GET['cat_id'];
$owner_name=$_POST['owner_name'];
$address=$_POST['address'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$mobile=$_POST['mobile'];
$product=$_POST['product'];
$description=$_POST['description'];
$b_image=$_POST['b_image'];
$membership_sdate=$_POST['membership_sdate'];
$nembership_edate=$_POST['membership_edate'];
$approval=$_POST['approval'];
$status=$_POST['status'];
$password=$_POST['password'];



$sql = "INSERT INTO company SET name='$name', ower_name='$owner_name', address= '$address',email='$email', phone='$phone', mobile='$mobile', product='$product',description ='$description',b_image='$b_image',membership_sdate='$membership_sdate' , membership_edate='$membership_edate',approval='$approval', status='$status',password='password'";

mysqli_query($link,$sql);

if(mysqli_affected_rows($link)>0)
{
	$_SESSION['company']="<font color='#006600'>Record save successfully.</font>";
	header('Location:company.php');
}
else
{
	$_SESSION['company']="<font color='#FF0000'>Record save Problems.Try Again!.....</font>";
	header('Location:company.php');
}

?> 


?>