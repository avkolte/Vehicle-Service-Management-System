<html>
<head>
<title>Customer Details</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="jumbotron" style="background:url('images/back.jpg') no-repeat; background-size:cover;height:300px;"></div>
<?php
include("func.php");
if(isset($_POST['cust_search_submit']))
{
	$aadharid=$_POST['search'];
	$query="select * from customer natural join (vehicle natural join service) where aadharid='$aadharid'";
	$result=mysqli_query($con,$query);
	echo "<div class='container-fluid'>
	<div class 'card'>
	<div class='card-body'><a href='cust_details.php' class='btn btn-dark'> Go Back</a></div>
	<div class='card-body' style='background-color:#3498DB;color:#ffffff;'>
<table class='table table-hover'>
  <thead>
    <tr>
      
      <th>First Name</th>
      <th>Last Name</th>
      <th>Aadhar Id</th>
	   <th>Email</th>
	    <th>Contact No</th>
		 <th>Address</th>
		  
		   <th>Vehicle Type</th>
		    <th>Vehicle No</th>
			 <th>Service</th>
			 <th>Arrival Date</th>
    </tr>
  </thead>
  <tbody>
  ";
	while($row=mysqli_fetch_array($result)){
	$fname=$row['fname'];
		$lname=$row['lname'];
		$aadharid=$row['aadharid'];
		$email=$row['email'];
		$contact=$row['contact'];
		$address=$row['address'];
		$vehicletype=$row['vehicletype'];
		$vehicleno=$row['vehicleno'];
		$service=$row['servicetype'];
		$arrivaldate=$row['arrivaldate'];
		echo "<tr>
		
		
		<td>$fname</td>
      <td>$lname</td>
      <td>$aadharid</td>
	    <td>$email</td>
		  <td>$contact</td>
		    <td>$address</td>
			  <td>$vehicletype</td>
			    <td>$vehicleno</td>
				  <td>$service</td>
				    <td>$arrivaldate</td>
		</tr>";
}		
		echo "</tbody></table></div></div></div>";

}

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
	</html>	