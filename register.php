<?php  require("header.php"); ?>
<script type="text/javascript">
	function mycheck()
	{
		
		
		var cpass = document.forms["form1"]["cpwd"].value;
		var pass = document.forms["form1"]["pwd"].value;		
		if(pass!=cpass)
		{
			alert("Password and Conform Password is not Matching...");			
			return false;			
		}
		else	
			return true;
	}
</script>




<h1>Register User</h1>
<form action="registerH.php" method="POST" onsubmit="return mycheck()" enctype="multipart/form-data" name = "form1">
<table>
<div class="form-group">
	<label for="Username">User Name</label>
:<input type="text" name="u_name" class="form-control" placeholder="Username" required></div>

<div class="form-group">
    <label for="exampleInputPassword1">Full Name</label>
<input type="text" name="f_name" placeholder="Fullname" required class="form-control"></div>


<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
<input type="password" name="pwd" required class="form-control" placeholder="Password"></div>

<div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
<input type="password" name="cpwd" required class="form-control" placeholder="Confirm Password" ></div>

<div class="form-group">
    <label for="exampleInputPassword1">Email:</label>
<input type="text" name="e_mail" required class="form-control" placeholder="Email"></div>

<div class="form-group">
    <label for="exampleInputPassword1">Gender:</label>
<input type="radio" name="gender" value="1" checked="checked" required  style="width: 10%">male 
<input type="radio" name="gender" value="2" required  style="width: 10%" >female</div>

<div class="form-group">
    <label for="exampleInputPassword1">DOB:</label>
    <input type="date" name="dob" required class="form-control" placeholder="Date Of Birth"></div>

<div class="form-group">
    <label for="exampleInputPassword1">Profile Pic:</label>
<input type="file" name="ima" required class="form-control"></div>

<div class="form-group">
    <label for="exampleInputPassword1">State:</label>
<input type="text" name="sta" required class="form-control" placeholder="Enter Your State"></div>

<div class="form-group">
    <label for="exampleInputPassword1">Country:</label>
<input type="text" name="cou" required class="form-control" placeholder="Enter Your Country"></div>

<button type="submit" class="btn btn-info" value="Submit" style="width: 20%">Register</button>
<p style="float: right; "><button type="reset" class="btn btn-warning" value="Reset">Clear</button></p>
</form>

<?php require("footer.php"); ?>