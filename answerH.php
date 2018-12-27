<?php session_start();
require("header.php");
require("checkUser.php");

$qid=$_POST['qid'];
$ata=$_POST['ata'];
$uid = $_SESSION["uid"];
$con=mysql_connect("localhost","root","");
mysql_select_db("tech_forum");
$sql="INSERT INTO answer(question_id,replied,answer_detail,user_id) VALUES('$qid',$_SESSION[uid],'$ata','$uid')";
echo $sql;
$result=mysql_query($sql) or die(mysql_error());
if($result)
	header("location:questionview.php?qid=$qid");	
?>