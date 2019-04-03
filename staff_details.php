<!DOCTYPE html>
<?php include("func.php"); ?>
<html>
<head>
	<title>Staff Details</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="card">
<div class="card-body" style="background-color:#3498DB;color:#ffffff;">
<h2>Vehicle Service Management System<h2>
<form align="right" action="index.php" method="post">
<input type="submit" class="btn btn-light  "  name="logout"    value="Logout">
</form>
</div>
</div>
<div class="jumbotron" style="background:url('images/back.jpg') no-repeat; background-size:cover;height:300px;"></div>
<div class="container-fluid">
<div class="card">
<div class="card-body" style="background-color:#3498DB;color:#ffffff;">
<div class="row">

<div class="col-md-1"> 

<a href="admin-panel.php" class="btn btn-light">Go Back</a>
</div>
<div class="col-md-7"> <h3>Staff Details</h3></div>
<div class="col-md-4">
<form class="form-group" action="staff_search.php" method="post">
<div class="row">
<div class=col-md-6><input type="text" name="search" class="form-control" placeholder="Enter Staff Id"></div>
<input type="submit" name="staff_search_submit" class="btn btn-light" value="Search"></div>
</form>
</div>
</div>
</div>
<div class="card-body" style="background-color:#3498DB;color:#ffffff;">
<table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Staff Id</th>
	   <th scope="col">Email</th>
	    <th scope="col">Contact No</th>
		 <th scope="col">Address</th>
		  <th scope="col">Status</th>
	
    </tr>
  </thead>
  <tbody>
   <?php   get_staff_details();    ?>
  
  </tbody>
</table>





	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
