<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
	document.getElementById("acontact").className="active";
</script>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	        <?php

if(isset($_REQUEST['submit']))
{
$author=$_REQUEST['author'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$text=$_REQUEST['text'];

$con=@mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db ("tech_forum",$con) or die(mysql_error());
$d=mysql_query("select curdate()",$con)or die(mysql_error());
$date=mysql_fetch_array($d);

$sql="insert into contact (date,author,email,phone,text) values ('$date[0]','$author','$email','$phone','$text')";
$res=mysql_query($sql,$con)or die(mysql_error());
?>
<head>
<script>alert('Thank you for contact us');</script>
<meta http-equiv="refresh" content="0; url='contact.php'" > </head>
<?php
}  
?>

<?php  require("header.php"); ?>

	<h1>Contact Us</h1>
    
                                <form method="post" name="myForm" >
                        
                        <label for="author">Name:<font color="#FF0000"><b>*</font></b></label> <input type="text" id="author" required name="author" class="form-control"/>
                        <div class="cleaner h10"></div>
                        <label for="email">Email:<font color="#FF0000"><b>*</font></b></label> <input type="email" required id="email" name="email" class="form-control" />
                        <div class="cleaner h10"></div>
                        
                        <label for="phone">Phone:<font color="#FF0000"><b>*</font></b></label> <input type="number" required name="phone" id="phone" class="form-control" />
                        <div class="cleaner h10"></div>
        
                        <label for="text">Message:<font color="#FF0000"><b>*</font></b></label> <textarea id="text" name="text" required rows="0" cols="0" class="form-control"></textarea>
                        <div class="cleaner h10"></div>
                        
                        <input type="submit" class="btn btn-info btn-lg" name="submit" id="submit" value="Send" />
                        
                    </form>
<?php require("footer.php"); ?>
</body>
</html>


