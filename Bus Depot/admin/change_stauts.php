<?php
require('../includes/dbconnection.php');
session_start();
if(!isset($_SESSION['id'])){
	header("Location:index.php");
}
$no=$_GET['no'];
$st=$_GET['st'];
$sql="update bus set status='$st' where no='$no'";
if(mysqli_query($con,$sql)){
	echo "<script>alert('status updated');window.location.href='search_bus.php';</script>";
}
else{
echo "<script>alert('Somthing Went Wrong');window.location.href='search_bus.php';</script>";
}
?>