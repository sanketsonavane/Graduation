<?php 
	session_start();
	require("header.php");
	require("checkUser.php");
?>
<?php
if(isset($_GET['did']))
{
	$sql="Delete from answer where answer_id=$_GET[did]";
	
	ExecuteNonQuery($sql);
	echo "<head><script>alert('Comment deleted successfully....');</script></head>";
}
$sql="SELECT * from  answer,question where answer.user_id=$_SESSION[uid] and answer.question_id=question.question_id";
$result=ExecuteQuery($sql);

		while($row = mysql_fetch_array($result))
		{
		echo "<span class='box2'>";	
		echo "<span class='head'><h4 style='padding-top:5px;'>Topic:$row[heading]<a href='ans.php?did=$row[answer_id]' style='float:right'>Delete</a></h4></span>";
		echo "</span>";
		echo  "<br/>";
		
		
		
		echo $row['answer_detail'];
		echo  "<br/>";
		
		
		echo $row['datetime'];
		echo  "<br/>";
		echo "<div class=line></div>";
		}
	

?>
<?php require("footer.php");?>