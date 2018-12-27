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


<h2>Answers...</a></h2> 
<?php
	if (isset($_GET['did'])) {
		$sql="delete from question where question_id=$_GET[did]";
			$rows=ExecuteQuery($sql);
			echo "<script>alert('Question Deleted Successfullyy...');</script>";
		}
	$sql="SELECT * from answer,user where user.user_id=answer.user_id";
	$rows=ExecuteNonQuery($sql);

		echo "<table border='1' class='table table-hover'>";
	echo "<strong><tr><th>Answer Details</th><th>Posted By</th><th>Date</th><th>Delete</th></tr></strong>";
	while($name_row=mysql_fetch_array($rows))
	{
		echo"<tr>";

		echo "<td>$name_row[answer_detail]</td><td >{$name_row[fullname]}</td><td>{$name_row[datetime]}</td><td><a href='question.php?did=".$name_row["answer_id"]."'><img src='../res/images/delete.jpg'  class='imagedel'/></a></td>";

	}

	echo "</table>";
	
?>

<?php require("footer.php")?>