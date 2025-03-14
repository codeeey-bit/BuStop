<?php
require('../includes/dbconnection.php');
session_start();
if(!isset($_SESSION['id'])){
	header("Location:index.php");
}
?>

	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	 <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<style>
		 body {
     background-color: #f9f9fa
 }

 .flex {
     -webkit-box-flex: 1;
     -ms-flex: 1 1 auto;
     flex: 1 1 auto
 }

 @media (max-width:991.98px) {
     .padding {
         padding: 1.5rem
     }
 }

 @media (max-width:767.98px) {
     .padding {
         padding: 1rem
     }
 }

 .padding {
     padding: 5rem
 }

 .card {
     box-shadow: none;
     -webkit-box-shadow: none;
     -moz-box-shadow: none;
     -ms-box-shadow: none
 }

 .pl-3,
 .px-3 {
     padding-left: 1rem !important
 }

 .card {
     position: relative;
     display: flex;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid #d2d2dc;
     border-radius: 0
 }
 
 .card .card-title {
    color: #000000;
    margin-bottom: 0.625rem;
    text-transform: capitalize;
    font-size: 0.875rem;
    font-weight: 500;
}

.card .card-description {
    margin-bottom: .875rem;
    font-weight: 400;
    color: #76838f;
}

p {
    font-size: 0.875rem;
    margin-bottom: .5rem;
    line-height: 1.5rem;
}

.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
}

.table, .jsgrid .jsgrid-table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
    background-color: transparent;
}

.table thead th, .jsgrid .jsgrid-table thead th {
    border-top: 0;
    border-bottom-width: 1px;
    font-weight: 500;
    font-size: .875rem;
    text-transform: uppercase;
}

.table td, .jsgrid .jsgrid-table td {
    font-size: 0.875rem;
    padding: .875rem 0.9375rem;
}

.badge {
    border-radius: 0;
    font-size: 12px;
    line-height: 1;
    padding: .375rem .5625rem;
    font-weight: normal;
}
 
	</style>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">

<div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <form method="post">
    <input type="text" name="name">
    <input type="submit" name="submit" value="Search">
</form>
                  <h4 class="card-title" style="margin-top:10px;">Available Buses</h4>
                  <p class="card-description">
                  <a href="home.php"> Go Back</a>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                        	<th>Bus No</th>
                          <th>Source</th>
                          <th>Destination</th>
                          <th>Departure</th>
                          <th>Arrival</th>
                          <th>Status</th>
                          <th>Change Status</th>
                        </tr>
                      </thead>
                      <tbody>
                      		<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
   
	$sql="select * from bus where no='$name'";
	$result=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($result)){
		
	
	?>
                        <tr>
                          <td><?php echo $row['no'];?></td>
                          <td><?php echo $row['source'];?></td>
                          <td><?php echo $row['dest'];?></td>
                          <td><?php echo $row['depart_time'];?></td>
                          <td><?php echo $row['arr_time'];?></td>
                          <td><label class="badge badge-danger"><?php echo $row['status'];?></label></td>
                          <td><a href="change_stauts.php?no=<?php echo $row['no'];?>&st=Reached">Reached</a> <a href="change_stauts.php?no=<?php echo $row['no'];?>&st=Cancel">Cancel</a> <a href="change_stauts.php?no=<?php echo $row['no'];?>&st=Running">Running</a></td>
                        </tr>
                      <?php
                  }}
                   else{
        echo "<tr>
                          <td>No Data</td>
                      </tr>";
    }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
            </div>
              </div>
            </div>
</body>
</html>