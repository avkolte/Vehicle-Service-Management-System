<?php
$con=mysqli_connect("localhost","root","","vsms");
if(isset($_POST['login_submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from login where username='$username' and password='$password'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		header("Location:admin-panel.php");
	}
	else
	{
		echo"<script>alert('Invalid username or password')</script>";
		echo"<script>window.open('index.php','_self')</script>";
	}
}
 if (isset($_POST['cust_submit']))
 {
 	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$aadharid=$_POST['aadharid'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$arrivaldate=$_POST['arrivaldate'];
	$vehicletype=$_POST['vehicletype'];
	$vehicleno=$_POST['vehicleno'];
	$servicetype=$_POST['servicetype'];
	$query="insert into customer(fname,lname,aadharid,email,contact,address) values ('$fname','$lname','$aadharid','$email','$contact','$address')";
	$query1="insert into vehicle(vehicleno,vehicletype,aadharid) values ('$vehicleno','$vehicletype','$aadharid')";
	$query2="insert into service(servicetype,arrivaldate,aadharid) values ('$servicetype','$arrivaldate','$aadharid')";
	$result=mysqli_query($con,$query);
	$result1=mysqli_query($con,$query1);
	$result2=mysqli_query($con,$query2);
	if($result)
	{
		echo"<script>alert('Customer Details Added Successfully')</script>";
		echo"<script>window.open('admin-panel.php','_self')</script>";
	}       
 } 
 function get_cust_details(){
 	global $con;
	$query="select * from customer natural join (vehicle natural join service)";
	$result=mysqli_query($con,$query);
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
		echo"<tr>
		
		
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
	
 }

?>