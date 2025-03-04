<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
   <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  <link rel="stylesheet" href="loginstyles.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body background="03.jpg">
  <div class="wrapper">
    <form name="f1" method="post" >
      <h1>Login</h1>
      <div class="input-box">
        <input type="text"  name="username" id="username" placeholder="Depot Name" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" name="password" id="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      
      <button type="submit" class="btn" name="btnLogin">Login</button>
      <div class="register-link">
        <p>Dont have an account? <a href="register.php">Register</a></p>
      </div>
      <div class ="admin">
   
    </div>
    </form>
  </div>
  <?php

require('../includes/dbconnection.php');

    if (isset($_POST["btnLogin"])) {

            $userPass =$_POST['password'];
            $loginId = $_POST["username"];
            $query = "select * from admin where name='$loginId ' and pass='$userPass'";
            $result=mysqli_query($con,$query);
            if(mysqli_num_rows($result)==1){
				 while ($row = mysqli_fetch_array($result)) {
				 session_start();
                $_SESSION['name']=$row['name'];
                $_SESSION['id'] =$row['id'];
			header('Location:home.php');
            }
			}
			else
			{
				echo "<script>alert('login failed');</script>";
			}
           

        }
?>
</body>
</html>