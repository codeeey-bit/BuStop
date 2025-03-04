<?php
session_start();
include "../includes/dbconnection.php";
if(!isset($_SESSION["id"])){
 header("location:index.php");
}
else{
  $id=$_SESSION["id"];

}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Bus</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="./assets/js/init-alpine.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      defer
    ></script>
    <script src="./assets/js/charts-lines.js" defer></script>
    <script src="./assets/js/charts-pie.js" defer></script>
    <script src="./assets/js/charts-bars.js" defer></script>
    <style type="text/css">
      body {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-weight: 100;
  font-size: 12px;
  line-height: 30px;
  color: #777;
  background: #fff;
}

.formcontainer {
  max-width: 400px;
  width: 100%;
  margin:-150px auto;
  position: relative;
}

#contactus {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
    background: #F9F9F9;
  padding: 25px;
  margin: 150px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);

    
}

#contactus {
}

#contactus h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contactus h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contactus input[type="text"],
#contactus input[type="file"],
#contactus select,
#contactus textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contactus input[type="text"]:hover,
#contactus input[type="email"]:hover,
#contactus input[type="tel"]:hover,
#contactus input[type="url"]:hover,
#contactus textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contactus textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contactus button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #f0715f;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contactus button[type="submit"]:hover {
  background: #f07150;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contactus button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

#contactus input:focus,
#contactus textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}
    </style>
  </head>
  <body>
  
  
      
     
            
             
        
        <main class="h-full pb-16 overflow-y-auto">
          <div class="container px-6 mx-auto grid">
        

          <br><br>

     <div class="formcontainer">  
  <form id="contactus" method="post">
    <h3>Add Bus Details</h3>
    
   <fieldset>
      <input placeholder="bus no" type="text" name="bno" tabindex="4" required>
    </fieldset>
  
    <fieldset>
      <input placeholder="source" name="source" type="text" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="destination" name="dest" type="text" tabindex="3" required>
    </fieldset>
  
    <fieldset>
      <input placeholder="departure time" type="text" name="dt" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="arrival time" type="text" name="at" tabindex="5" required>
    </fieldset>
    <fieldset>
      <input placeholder="status" type="text" name="status" tabindex="5" required>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contactus-submit" data-submit="...Adding">Add</button>
    </fieldset>
  
  </form>
</div>

          </div>
        </main>
     <?php
if(isset($_POST['submit'])){
    $n = $_POST['bno'];
    $source = $_POST['source'];
     $dest = $_POST['dest'];
     $dt = $_POST['dt'];
     $at = $_POST['at'];
     $status = $_POST['status'];

    $sql="insert into bus(no,source,dest,depart_time,arr_time,status) values('$n','$source','$dest','$dt','$at','$status')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
    echo "<script>alert('Bus Added');window.location.href='view_bus.php' </script>";
}
else{
     echo "<script>alert('Action Failed');' </script>";
}

}
?>
    
  </body>
</html>
