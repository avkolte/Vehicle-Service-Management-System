<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="jumbotron" style="background:url('images/back.jpg') no-repeat; background-size:cover;height:300px;"></div>
<div class="container-fluid">
<div class="row">
<div class="col-md-3">
<div class="list-group">
<a href="" class="list-group-item active" style="background-color:#3498DB;color:#ffffff ;border-color:#3498DB">Customer</a>
<a href="cust_details.php" class="list-group-item ">Customer Details</a>

<a href="" class="list-group-item ">Payment / Checkout</a>
<a href="" class="list-group-item ">Remove Customer</a>
<a href="" class="list-group-item ">Update Customer Details</a>
</div>
<hr>
<div class="list-group">
<a href="" class="list-group-item active" style="background-color:#3498DB;color:#ffffff ;border-color:#3498DB">Staff</a>
<a href="" class="list-group-item ">Staff Details</a>
<a href="" class="list-group-item ">Add New Staff Member</a>
<a href="" class="list-group-item ">Remove Staff Member</a>
</div>
</div>
<div class="col-md-8">
<div class="card">
<div class="card-body" style="background-color:#3498DB;color:#ffffff;">
<h3>Enter New Customer Details</h3>
</div>
<div class="card-body">
<form class="form-group" action="func.php" method="post">
<label>First Name :</label>
<input type="text" name="fname" class="form-control"><br>
<label>Last Name :</label>
<input type="text" name="lname" class="form-control"><br>
<label>Aadhar Id :</label>
<input type="text" name="aadharid" class="form-control"><br>
<label>Email Id :</label>
<input type="text" name="email" class="form-control"><br>
<label>Contact No :</label>
<input type="text" name="contact" class="form-control"><br>
<label>Address :</label>
<input type="text" name="address" class="form-control"><br>
<label>Arrival Date :</label>
<input type="date" name="arrivaldate" class="form-control"><br>
<label>Vehicle Type :</label>
<select class="form-control" name="vehicletype">
<option value="Bike">Bike</option>
<option value="Scooter">Scooter</option>
<option value="Car">Car</option>
<option value="Truck">Truck</option>
</select><br>
<label>Vehicle No :</label>
<input type="text" name="vehicleno" class="form-control"><br>
<label>Choose Service</label>
<select class="form-control" name="servicetype">
<option value="Oiling">Oiling</option>
<option value="Servicing">Servicing</option>
<option value="Repairing">Repairing</option>
<option value="Paint">Paint</option>
</select><br>
<input type="submit" class="btn btn-primary" name="cust_submit" value="Submit">
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
