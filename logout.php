<?php require("header.php");?>
<?php 
session_start();

session_destroy();
?>
<h1>Log out</h1>
<p>
	You have logged out.  <a href="index.php">Click hear</a> to login again.
</p>
<?php require("footer.php");?>