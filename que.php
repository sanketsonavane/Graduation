<?php 
	session_start();
	require("header.php");
	require("checkUser.php");
	echo "<h4>My Question<img src='res/images/askq.jpg'  class='imagedel'/></h4>";
?>
<?php
if(isset($_GET['did']))
{
	$sql="Delete from question where question_id=$_GET[did]";
	ExecuteNonQuery($sql);
	echo "<head><script>alert('Question deleted successfully....');</script></head>";
}
$sql="SELECT * from question where user_id=$_SESSION[uid]";
$result=ExecuteQuery($sql);
	
		while($row = mysql_fetch_array($result))
		{
		
		echo "<span class='box2'>";
		echo "<span class='head'><h4 style='padding-top:5px;'>Topic:$row[heading]<a href='que.php?did=$row[question_id]' style='float:right'>Delete</a></h4></span>";
		echo "</span>";
		echo  "<br/>";
		echo $row['question_detail'];
		echo  "<br/>";
		
		echo $row['datetime'];
		echo "<div class='line'></div>";
				

		}

?>
<?php require("footer.php")?>