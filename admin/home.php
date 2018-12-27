<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<?php 
	session_start();
	require("header.php");
	require("checkUser.php");
?>
<script type="text/javascript">
	document.getElementById("ahome").className="active";
</script>
<h2>Manage User</h2> 
<table border='1' class='table table-hover'>
	<strong><tr><th>Full Name</th><th>Address</th><th>DOB</th><th>Email ID</th><th>Gender</th><th>Score</th><th >Delete</th></tr></strong>
<?php

if($_GET['did'])
{
	$sql="Delete from User where user_id=$_GET[did]";
	ExecuteNonQuery($sql);
	echo "<script>alert('User Deleted Successfullyy...');</script>";
}
	$sql="SELECT * from User";
	$rows=ExecuteQuery($sql);
	
	while($name_row=mysql_fetch_array($rows))
	{

		echo"<tr>";
		echo "<td>$name_row[fullname]</td><td >$name_row[address] $name_row[state] $name_row[country]</td><td>$name_row[dob]</td><td>$name_row[e_mail]</td>";
		if ($name_row["gender"]==1) 
		echo "<td>Male</td>";
	else
		echo "<td>Female</td>";
		echo "<td>$name_row[score]</td>";
		echo "<td ><a  href='home?did=".$name_row["user_id"]."' >Delete</a></td>";
	}
	echo "</table>";
	
?>


<?php require("footer.php");?>