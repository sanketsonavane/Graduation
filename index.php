<?php require("header.php");

?>

<script type="text/javascript">
	document.getElementById("auhome").className="active";

    function mysee() {      
      if(document.getElementById('pwd').type=='password')
          document.getElementById('pwd').type = 'text';
            else
        document.getElementById('pwd').type = 'password';
    }
</script>

                <div class="art-contentLayout">
                    
                    <div class="art-sidebar1" style="width: 70%">
                    
                        <div class="art-Block">
                            <div class="art-Block-body">
                                <div class="art-BlockHeader">
                                    <div class="l"></div>
                                    <div class="r"></div>
                                    <div class="art-header-tag-icon">
                                        <div class="t">Log In</div>
                                    </div>
                                </div><div class="art-BlockContent">
                                    <div class="art-BlockContent-tl"></div>
                                    <div class="art-BlockContent-tr"></div>
                                    <div class="art-BlockContent-bl"></div>
                                    <div class="art-BlockContent-br"></div>
                                    <div class="art-BlockContent-tc"></div>
                                    <div class="art-BlockContent-bc"></div>
                                    <div class="art-BlockContent-cl"></div>
                                    <div class="art-BlockContent-cr"></div>
                                    <div class="art-BlockContent-cc"></div>
                                    <div class="art-BlockContent-body">
                                        <div>
                                        
                                        
                                        <script type="text/javascript">
										function check(f)
										{
											if(f.uid.value=="")	
											{
												document.getElementById("spuid").innerHTML="Please,Enter the user id ";
												//alert("Please,Enter Your User Id")
												f.uid.focus()
												return false;
												}
											else if(f.pwd.value=="")
												{
													document.getElementById("a").innerHTML="Please,Enter the password";
													//alert("Please,Enter Your Password")
													f.pwd.focus()
													return false;
													
													}	
												
												else
												return true;
											}
										
										
										</script>
                                        <form action="loginH.php" method="POST" onsubmit="return check(this)">
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="uid" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="seepass" name="seepass" onchange="mysee()">
    <label class="form-check-label" for="exampleCheck1" >See Password</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
<?php
			if (isset ($_GET["act"]))
				if ($_GET["act"] == "invalid")
					echo "Invalid User Id / password";
				
?>

</form>

                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="art-sidebar2" style="width: 30%">
                        <div class="art-Block" >
                            <div class="art-Block-body" >
                                <div class="art-BlockHeader">
                                    <div class="l"></div>
                                    <div class="r"></div>
                                    <div class="art-header-tag-icon">
                                        <div class="t" >Highlights</div>
                                    </div>
                                </div><div class="art-BlockContent">
                                    
                                    <div class="art-BlockContent-body">
                                      <marquee direction="up" onmouseover="stop()" onmouseout="start()" scrollamount="3" scrolldelay="1" style="height:400px;">  <div><?php
                                                            $sql="select * from question,user where question.user_id=user.user_id ORDER BY  views desc limit 0,5";
  
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
?>
                                                          </div>
		</marquee>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cleared"></div><div class="art-Footer">
                    
                    <?php require("footer.php")?>