<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<?php session_start();
 require("utility.php");
?>
<?php require("header.php");
require("checkUser.php");

?>
<script type="text/javascript">
	document.getElementById("amanage").className="active";
</script>


<h2>Questions...</a></h2> 
<?php
	if (isset($_GET['did'])) {
		$sql="delete from question where question_id=$_GET[did]";
			$rows=ExecuteQuery($sql);
			echo "<script>alert('Question Deleted Successfullyy...');</script>";
		}
	$sql="SELECT * from question,user where user.user_id=question.user_id";
	$rows=ExecuteQuery($sql);
	echo "<table border='1' class='table table-hover'>";
	echo "<strong><tr><th>Heading</th><th>Question Details</th><th>Posted By</th><th>Views</th><th >Delete</th></tr></strong>";
	while($name_row=mysql_fetch_array($rows))
	{
		echo"<tr>";
		echo "<td>{$name_row[heading]}</td><td >{$name_row[question_detail]}</td><td>{$name_row[fullname]}</td><td>{$name_row[views]}</td><td><a href='question.php?did=".$name_row["question_id"]."'><img src='../res/images/delete.jpg'  class='imagedel'/></a></td>";
	}
	echo "</table>";
	
?>

<?php require("footer.php")?>