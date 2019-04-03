<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body >
<div class="card">
<div class="card-body" style="background-color:#3498DB;color:#ffffff;">
<h2> Vehicle Service Management System<h2>
<form align="right" action="index.php" method="post">
<input type="submit" class="btn btn-light  "  name="logout"    value="Logout">
</form>
</div>
</div>
<div class="jumbotron" style="background:url('images/back.jpg') no-repeat; background-size:cover;height:300px;"></div>
<div class="container-fluid">
<div class="row">
<div class="col-md-3">
<div class="list-group">
<a href="admin-panel.php" class="list-group-item active" style="background-color:#3498DB;color:#ffffff ;border-color:#3498DB">Customer</a>
<a href="cust_details.php" class="list-group-item ">Customer Details</a>

<a href="invoice.php" class="list-group-item ">Payment / Checkout</a>
<a href="remove.php" class="list-group-item ">Remove Customer</a>
<a href="update.php" class="list-group-item ">Update Customer Details</a>
<a href="status.php" class="list-group-item ">Update Status</a>
</div>
<hr>
<div class="list-group">
<a href="addstaff.php" class="list-group-item active" style="background-color:#3498DB;color:#ffffff ;border-color:#3498DB">Staff</a>
<a href="staff_details.php" class="list-group-item ">Staff Details</a>
<a href="addstaff.php" class="list-group-item ">Add New Staff Member</a>
<a href="staffstatus.php" class="list-group-item ">Update Status</a>
</div>
</div>
<div class="col-md-8">
<div class="card">
<div class="card-body" style="background-color:#3498DB;color:#ffffff;">
<h3>Enter New Staff Member Details</h3>
</div>
<div class="card-body">
<form class="form-group" action="func.php" method="post">
<label>First Name :</label>
<input type="text" name="fname" class="form-control"><br>
<label>Last Name :</label>
<input type="text" name="lname" class="form-control"><br>
<label>Staff Id :</label>
<input type="text" name="staffid" class="form-control"><br>
<label>Email Id :</label>
<input type="text" name="email" class="form-control"><br>
<label>Contact No :</label>
<input type="text" name="contact" minlength="10" maxlength="10" class="form-control"><br>
<label>Address :</label>
<input type="text" name="address" class="form-control"><br>
<input type="submit" class="btn btn-primary" name="cust_submit2" value="Submit">
</form>
</div>
</div>
</div>
<div class="col-md-1"></div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
