<?php
session_start();
if(!isset($_SESSION['id'])){
	header("Location:index.php");
}
unset($_SESSION['id']);
header('location:index.php');
?>