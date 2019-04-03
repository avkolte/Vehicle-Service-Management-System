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

<a href="cust_details.php" class="btn btn-light">Go Back</a>
</div>
<div class="col-md-7"> <h3>Customer Details</h3></div>
<div class="col-md-4" >

</div>
</div>
</div>
<?php
include("func.php");
if(isset($_POST['staff_search_submit']))
{
	$staffid=$_POST['search'];
	$query="select * from staff where staffid='$staffid'";
	$result=mysqli_query($con,$query);
	echo "<div class='container-fluid'>
	
<table class='table table-hover'>
  <thead>
    <tr>
      
      <th>First Name</th>
      <th>Last Name</th>
      <th>Staff Id</th>
	   <th>Email</th>
	    <th>Contact No</th>
		 <th>Address</th>
		  
    </tr>
  </thead>
  <tbody>
  ";
	while($row=mysqli_fetch_array($result)){
	$fname=$row['fname'];
		$lname=$row['lname'];
		$staffid=$row['staffid'];
		$email=$row['email'];
		$contact=$row['contact'];
		$address=$row['address'];
		
		echo "<tr>
		
		
		<td>$fname</td>
      <td>$lname</td>
      <td>$staffid</td>
	    <td>$email</td>
		  <td>$contact</td>
		    <td>$address</td>
			
		</tr>";
}		
		echo "</tbody></table></div></div></div>";

}

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
	</html>	