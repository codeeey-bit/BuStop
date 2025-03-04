<!DOCTYPE html>
<html>
<head>
<style>

.content{
	margin:auto;
	width:80%;
	
}
.container-fluid{
	margin:auto;
	width:80%;
	
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>
<br><br><br><br>
<div class="content"> 
	<div class="container-fluid">			
        <div class="col-md-8">                    
		<div class="panel panel-info">
			<div class="panel-heading" style="background:#5bc0de;color:white;">
				<div class="panel-title">Depot Registration</div>                        
			</div> 
			<div style="padding-top:30px" class="panel-body" >
				<center>
				<form id="loginform" class="form-horizontal" role="form" method="POST">  
			<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" class="form-control" id="name" name="name"  placeholder="Enter Depot Name" style="background:white;" pattern="[a-zA-Z]*"required>                                        
					</div> 

				
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="text" class="form-control" id="pin" name="pin" placeholder="Enter Pin Code" pattern="[0-9]*" required>
					</div>					
					                               
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
					</div>	
					
					
					<div style="margin-top:10px" class="form-group">                               
						<div class="col-sm-12 controls">
						  <input type="submit" name="submit" value="Register" class="btn btn-info">						  						  
						</div>						
					</div>					
					
					
				</form>   
				</center>
			</div>                     
		</div>  
	</div>       
    </div>  
	
<?php
require('../includes/dbconnection.php');
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$pin=$_POST['pin'];
	$pasd = $_POST['password'];
	

	$sql="insert into admin(name,pin,pass) values 
	('$name','$pin','$pasd')";
	
	if(mysqli_query($con,$sql)){
		 echo "<script>alert('Registration Done'); window.location.href = 'index.php';</script>";
	
	}
	else{
		?>	
		<script>alert("Registration failed");
		</script>
		<?php
		 
	   }

}

 ?>
