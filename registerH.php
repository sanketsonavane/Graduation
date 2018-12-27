<?php  
ob_start();
require("utility.php"); ?>

<?php
$u_name=$_POST['u_name'];
$f_name=$_POST['f_name'];
$pwd=$_POST['pwd'];
$e_mail=$_POST['e_mail'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$sta=$_POST['sta'];
$cou=$_POST['cou'];

$ima = $_FILES['ima']['name'];
$imup=$_FILES['ima']['tmp_name'];

$path="ups/$ima";
move_uploaded_file($imup, $path);


//$image = chunk_split(base64_encode(file_get_contents( $imup )));


$sql=" INSERT INTO user (username,fullname,password,e_mail,gender,dob,user_type,state,country,uimg) values ('$u_name','$f_name','$pwd','$e_mail','$gender','$dob','user','$sta','$cou','$path')";

		$con=mysql_connect ("localhost", "root","");
		mysql_select_db ("tech_forum",$con);
		
		$rows = mysql_query ($sql) or die(mysql_error()); 
		//echo "$sql";

if($row)
{
	header("location:notification.php");
}
else
{
?>
<head><script type="text/javascript">alert('Registration Complete!...');</script></head>
<meta http-equiv="refresh" content="0; url=register.php">
<?php	
}
?> 	