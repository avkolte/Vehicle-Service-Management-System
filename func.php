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
	$staffid=$_POST['staffid'];
	$arrivaldate=$_POST['arrivaldate'];
	$vehicletype=$_POST['vehicletype'];
	$vehicleno=$_POST['vehicleno'];
	$servicetype=$_POST['servicetype'];
	$servicestatus=$_POST['servicestatus'];
	$deliverystatus=$_POST['deliverystatus'];
	$pay_status=$_POST['pay_status'];
	$b=implode(",",$vehicletype);
	$c=implode(",",$servicetype);
	$query="insert into customer(fname,lname,aadharid,email,contact,address,staffid) values ('$fname','$lname','$aadharid','$email','$contact','$address','$staffid')";
	$query1="insert into vehicle(vehicleno,vehicletype,aadharid) values ('$vehicleno','$b','$aadharid')";
	$query2="insert into service(servicetype,arrivaldate,aadharid,servicestatus,deliverystatus) values ('$c','$arrivaldate','$aadharid','$servicestatus','$deliverystatus')";
	$query3="insert into payment(pay_status,aadharid) values ('$pay_status','$aadharid')";
	$result=mysqli_query($con,$query);
	$result1=mysqli_query($con,$query1);
	$result2=mysqli_query($con,$query2);
	$result3=mysqli_query($con,$query3);
	if($result3)
	{
		echo"<script>alert('Customer Details Added Successfully')</script>";
		echo"<script>window.open('admin-panel.php','_self')</script>";
	}       
 } 
 function get_cust_details(){
 	global $con;
	$query="select * from customer natural join (vehicle natural join (service natural join payment))";
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
			$servicestatus=$row['servicestatus'];
	$deliverystatus=$row['deliverystatus'];
	$pay_status=$row['pay_status'];
	$payamount=$row['payamount'];
	$staffid=$row['staffid'];
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
					<td>$servicestatus</td>
					<td>$deliverystatus</td>
					<td>$pay_status</td>
					<td>$payamount</td>
					<td>$staffid</td>
		</tr>";
		
			}
	
 }
  if (isset($_POST['cust_update']))
 {
 
	$aadharid=$_POST['aadharid'];

	
		
	$vehicletype=$_POST['vehicletype'];
	$vehicleno=$_POST['vehicleno'];
	$servicetype=$_POST['servicetype'];
		$b=implode(",",$vehicletype);
	$c=implode(",",$servicetype);
	$query="update customer natural join (vehicle natural join (service natural join payment)) set vehicleno='$vehicleno',servicetype='$c',vehicletype='$b' where aadharid='$aadharid' ";
	
	$result=mysqli_query($con,$query);
	
	if($result)
	{
		echo"<script>alert('Customer Details Updated Successfully')</script>";
		echo"<script>window.open('update.php','_self')</script>";
	}       
 } 
 if (isset($_POST['cust_remove']))
 {
 
	$aadharid=$_POST['aadharid'];

	$tables = array("vehicle","service","payment","customer");
foreach($tables as $table) {
  $query = "delete from $table where aadharid='$aadharid'";
  $result=mysqli_query($con,$query);
}

	if($result)
	{
		echo"<script>alert('Customer Details Removed Successfully')</script>";
		echo"<script>window.open('remove.php','_self')</script>";
	}       
 }
  if (isset($_POST['cust_submit2']))
 {
 	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$staffid=$_POST['staffid'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	
	$query="insert into staff(fname,lname,staffid,email,contact,address) values ('$fname','$lname','$staffid','$email','$contact','$address')";
	
	$result=mysqli_query($con,$query);

	if($result)
	{
		echo"<script>alert('Staff Details Added Successfully')</script>";
		echo"<script>window.open('addstaff.php','_self')</script>";
	}       
 }  
 function get_staff_details(){
 	global $con;
	$query="select * from staff";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result)){
		$fname=$row['fname'];
		$lname=$row['lname'];
		$staffid=$row['staffid'];
		$email=$row['email'];
		$contact=$row['contact'];
		$address=$row['address'];
		$staff_status=$row['staff_status'];
		echo"<tr>
		
		
		<td>$fname</td>
      <td>$lname</td>
      <td>$staffid</td>
	    <td>$email</td>
		  <td>$contact</td>
		    <td>$address</td>
			<td>$staff_status</td>
	
		</tr>";
		
			}
	
 }
  if (isset($_POST['staff_remove']))
 {
 
	$staffid=$_POST['staffid'];


  $query = "delete from staff where staffid='$staffid'";
  $result=mysqli_query($con,$query);


	if($result)
	{
		echo"<script>alert('Staff Details Removed Successfully')</script>";
		echo"<script>window.open('removestaff.php','_self')</script>";
	}   
	}    
	if (isset($_POST['status_update']))
 {
 
	$aadharid=$_POST['aadharid'];

	
		$servicestatus=$_POST['servicestatus'];
	$deliverystatus=$_POST['deliverystatus'];
	$pay_status=$_POST['pay_status'];
	
	
	$query="update customer natural join (vehicle natural join (service natural join payment)) set servicestatus='$servicestatus',deliverystatus='$deliverystatus',pay_status='$pay_status' where aadharid='$aadharid' ";
	
	$result=mysqli_query($con,$query);
	
	if($result)
	{
		echo"<script>alert('Customer Details Updated Successfully')</script>";
		echo"<script>window.open('update.php','_self')</script>";
	}       
 } 
  if (isset($_POST['staff_update']))
 {
 $staffid=$_POST['staffid'];
 $staff_status=$_POST['staff_status'];
	$query="update staff set staff_status='$staff_status' where staffid='$staffid' ";
	
	$result=mysqli_query($con,$query);
	
	if($result)
	{
		echo"<script>alert('Customer Details Updated Successfully')</script>";
		echo"<script>window.open('update.php','_self')</script>";
	}       
 } 

?>