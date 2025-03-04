<?php
include('includes/dbconnection.php');
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bus Depot System || Home Page</title>

<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" /> 
<link href="css/font-awesome.css" rel="stylesheet">		   
<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<style type="text/css">
	body { 
    background:url(images/bus.jpg)no-repeat center 0px; 
	-webkit-background-size:cover;
    -moz-background-size:cover;
  	-o-background-size:cover;  
  	-ms-background-size:cover;  
	background-size:cover;  
	position: relative; 

	.form-box {
	background-color: rgba(0, 0, 0, 0.5);
	margin: auto auto;
	padding: 40px;
	border-radius: 5px;
	box-shadow: 0 0 10px #000;
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	width: 500px;
	height: 430px;
}
.form-box:before {
	background-image: url("https://i.postimg.cc/8cnYLpfc/ddddd.jpg");
	width: 100%;
	height: 100%;
	background-size: cover;
	content: "";
	position: fixed;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	z-index: -1;
	display: block;
	filter: blur(2px);
}
.form-box .header-text {
	font-size: 32px;
	font-weight: 600;
	padding-bottom: 30px;
	text-align: center;
	color:white;
}
.form-box input {
	margin: 10px 0px;
	border: none;
	padding: 10px;
	border-radius: 5px;
	width: 100%;
	font-size: 18px;
	font-family: poppins;
}
.form-box input[type=checkbox] {
	display: none;
}
.form-box label {
	position: relative;
	margin-left: 5px;
	margin-right: 10px;
	top: 5px;
	display: inline-block;
	width: 20px;
	height: 20px;
	cursor: pointer;
}
.form-box label:before {
	content: "";
	display: inline-block;
	width: 20px;
	height: 20px;
	border-radius: 5px;
	position: absolute;
	left: 0;
	bottom: 1px;
	background-color: #ddd;
}


.form-box .btn {
	background-color: deepskyblue;
	color: #fff;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	width: 100%;
	font-size: 18px;
	padding: 10px;
	margin: 20px 0px;
}

}
</style>
</head>
<body>  
	
	<div class="agileits-banner">
		<div class="bnr-agileinfo"> 
			<?php include_once('includes/header.php');?>	
			<div class="banner-text agileinfo"> 
			</div>
		</div>
	</div>
	<div class="form-box">
		<div class="header-text">
		Search Bus
		</div>
		<form method="post" action="show_results.php">
		<input placeholder="Your Source" type="text" name="source"> 
		<input placeholder="Your Destination" type="text" name="dest" > 
		<input type="submit" class="btn" name="submit" value="Search">
	</div>
	<?php include_once('includes/footer.php');?>   
	<script src="js/jquery-2.2.3.min.js"></script> 
    <script src="js/bootstrap.js"></script>
</body>
</html>