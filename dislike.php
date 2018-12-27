<?php session_start();
@mysql_connect("localhost","root","");
@mysql_select_db("tech_forum");
$id=$_GET['id'];
$r = $id;
$sql="select * from answer WHERE answer_id='$r'";
$result=mysql_query($sql) or die('fine');
$row4 = mysql_fetch_array($result);
$m=$row4['like']-1;

$result=mysql_query("UPDATE `answer` SET `like` = '$m' WHERE answer.answer_id ='$r'") or die(mysql_error());
$result=mysql_query("UPDATE `user` SET `score` = `score` - 1 WHERE user_id=$_SESSION[uid]") or die(mysql_error());
$sql="UPDATE answer SET liked = CONCAT(liked,' $_SESSION[uid]') WHERE answer.answer_id =$r";
mysql_query($sql) or die(mysql_error());
header("location:questionview.php?qid=$row4[question_id]");
?>