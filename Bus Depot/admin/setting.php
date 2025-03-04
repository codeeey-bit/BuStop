<?php
include "../includes/dbconnection.php";
session_start();
if(!isset($_SESSION["id"])){
 header("location:index.php");
}
else{
  $id=$_SESSION["id"];
   $sql="select * from admin where id='$id'";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result)){
    $name = $row['name'];
    $password = $row['pass'];
     $pin = $row['pin'];

}
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    
    <style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
*{
padding: 0;
margin: 0;
font-family: 'Poppins', sans-serif;
}
.container{
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background-color:#eee;

}
.card{
width:450px;
height:600px;
background-color:#fff;
box-shadow:0px 15px 30px rgba(0,0,0,0.1);
border-radius:10px;
overflow:auto;

}
.card .info{
padding:10px;
display:flex;
justify-content:space-between;
border-bottom:1px solid #e1dede;
background-color:#e5e5e5;
}
.card .info button{
height:30px;
width:80px;
border:none;
color:#fff;
border-radius:4px;
background-color:#000;
cursor:pointer;
text-transform:uppercase;
}
.card .forms{
padding:10px;
}
.card .inputs{
display:flex;
flex-direction:column;
margin-bottom:10px
}
.card .inputs span{
font-size:12px;
}
.card .inputs input{
height:40px;
padding:0px 10px;
font-size:17px;
box-shadow:none;
outline:none;
}
.card .inputs input[type="text"][readonly]{
border: 2px solid rgba(0,0,0,0);
}
.submit{
height:5vh;
width:8vw;
border:none;
color:#fff;
border-radius:4px;
background-color:#000;
cursor:pointer;
text-transform:uppercase;
margin:auto; 
    }
</style>
</head>
<body>
<div class="container"> 
    <div class="card"> 
    <div class="info"> 
        <span>Edit form</span> 
        <button id="savebutton">edit</button> 
    </div> 
    <div class="forms"> 
        <form method="post">
    <div class="inputs"> 
        <span>Name</span> 
        <input type="text" name="name" readonly value="<?php echo $name;?>"> 
    </div> 
      <div class="inputs"> 
        <span>Pin Code</span> 
        <input type="text" name="pin" readonly value="<?php echo $pin;?>"> 
    </div>
     <div class="inputs"> 
        <span>Password</span> 
        <input type="text" name="pass" readonly value="<?php echo $password;?>"> 
    </div> 
        
       

          <input type="submit" name="submit" value="submit" class="submit">
          <a href="home.php">Go Back</a>
        </div>
         </div>
</div>
<script type="text/javascript">
var savebutton = document.getElementById('savebutton');
var readonly = true;
var inputs = document.querySelectorAll('input[type="text"]');
savebutton.addEventListener('click',function(){
    
     for (var i=0; i<inputs.length; i++) {
     inputs[i].toggleAttribute('readonly');
     };

 
     
});
</script>
<?php
if(isset($_POST['submit'])){
    $n = $_POST['name'];
    $p = $_POST['pin'];
    $pas = $_POST['pass'];

    $sql="update admin set name='$n',pin='$p',pass='$pas' where id='$id'";
    $result=mysqli_query($con,$sql);
    if($result)
    {
    echo "<script>alert('Profile Updated');window.location.href='setting.php' </script>";
}
else{
     echo "<script>alert('Action Failed');window.location.href='setting.php' </script>";
}

}
?>
</body>
</html>