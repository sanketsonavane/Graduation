<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<?php 
	session_start();
	require("header.php");
	require("checkUser.php");
	 
	 
?>
<script type="text/javascript">
document.getElementById("auhome").className="active";
</script>


<form class="form-inline" action="search_page.php">
	<h4><a href="que.php" >My Question</a>  
<a href="ans.php" style="margin-left: 50px">My Answered </a>
  <div class="form-group" style="margin-left: 50px">
    <label for="email">Search:</label>
    <input type="text" class="form-control" required  id="search" name="search">
  </div>
  <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> </button>
&nbsp; Your Current Score:<?php echo $_SESSION["score"]; ?>
</form>


<br><br>
<?php
	$sql="select * from question,user where question.user_id=user.user_id ORDER BY  views desc limit 5";

	$result=ExecuteQuery($sql);	
	while($row = mysql_fetch_array($result))
	{		   		
			echo "<span class='box2'>";
			echo "<span class='head'><a href='questionview.php?qid=$row[question_id]' >$row[heading]</a></span>";			
			echo "<table>";
			echo "<tr><td valign='top' width='100px'>
				<img src='$row[uimg]' alt='' class='uimg'/>
				<br/>
			$row[fullname]
			<td valign='top'>
			$row[question_detail]<br/><br/>
			$row[datetime]<br/><br/>
			</td></tr>";					
			echo "</table></span><div class='h10'></div>";
		}	
		require("footer.php");
?>

