<?php
   session_start();
     header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
     header("Cache-Control: post-check=0, pre-check=0", false);
     header("Pragma: no-cache");
   include("config.php");
   
   
   
   $no1=rand(1,100);
   $no2=rand(1,100);
   
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
	   
	   //$userans = $_POST['userans'];
	   //$no1= $_POST['no1'];
	   //$no2= $_POST['no2'];
	
		//$total = $no1+$no2;

		
		
		
		//if($_POST["captcha_code"] === $_SESSION["captcha_cod"])
		//{
		
		   // username and password sent from form 
			$myusername = mysqli_real_escape_string($db,$_POST['username']);
			echo $myusername ;
			$mypassword = mysqli_real_escape_string($db,$_POST['password']); 
			
			//$q="SELECT ID FROM subdiv_login WHERE User = ? and Password = ?";
			
			//$sql = $db->prepare($q);
			//$sql->bind_param("ss", $myusername, $mypassword);
			
			//$sql->execute();
			
			//$result = $sql->get_result();
			
			$sql = "SELECT ID FROM subdiv_login WHERE User = '$myusername' and Password = '$mypassword'";
			$result = mysqli_query($db,$sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			$active = $row['active'];
		  
			$count = mysqli_num_rows($result);
			// If result matched $myusername and $mypassword, table row must be 1 row
			
			//$sql->close();
			$db->close();
				
			if($count == 1) 
			{
				//session_register("myusername");
				$_SESSION['login_user'] = $myusername;
				$_SESSION['start'] = time(); // Taking now logged in time.
				// Ending a session in 30 minutes from the starting time.
				$_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
				header("Location: welcome.php");
				
				exit();
			}
			else 
			{
				$error_message = "Your Login Name or Password is invalid";
			}
		//}
		//else
		//{
			//$error_message="Invalid captcha";
		//}
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
     
	  <style>
				.center {
					  margin: auto;
					}
				body {
					font-family:calibri;
					width:610px;
					align:center;
				}
				.demo-error {
					display:inline-block;
					color:#FF0000;
					margin-left:5px;
				}
				.demo-input {
					width: 100%;
					border-radius: 5px;
					border: #CCC 1px solid;
					padding: 10px;
					margin-top: 5px;
				}
				.demo-btn {
					padding: 10px;
					border-radius: 5px;
					background: #478347;
					border: #325a32 1px solid;
					color: #FFF;
					font-size: 1em;
					width: 100%;
					cursor:pointer;
				}
				.demo-heading {
					font-size: 1.5em;
					border-bottom: #CCC 1px solid;
					margin-bottom:5px;
				}
				.demo-table {
					background: #dcfddc;
					border-radius: 5px;
					padding: 10px;
				}
				.demo-success {
					margin-top: 5px;
					color: #478347;
					background: #e2ead1;
					padding: 10px;
					border-radius: 5px;
				}
				.captcha-input {
					background:#FFF url('captcha_code.php') repeat-y;
					padding-left: 85px;
				}
</style>
	  	<META Http-Equiv="Cache-Control" Content="no-cache">
<META Http-Equiv="Pragma" Content="no-cache">
<META Http-Equiv="Expires" Content="0">
<script type = "text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
      
   </head>
   
   <body bgcolor = "#FFFFFF" class="center">
	
      <div align = "center">
	<br>
	<h2><a href="http://www.imd.gov.in"><B><I><img src="images/logo.png" width="79px" height="100px"></I></B></a></h2>

	<br>
	<div align = "center">
		<p><b><font size="6" color="00008B">Login For Database Updates</font></b></p>

  
               <form action = "" method = "post">
			   
				<!------------------------------->
				<table border="0" cellpadding="10" cellspacing="1" width="100%" class="demo-table">
				<tr class="tablerow">
				<td width="50%">User Name<br/><input type="text" name="username" class="demo-input"></td></tr>
				<tr class="tablerow">
				<td width="50%">Password<br/><input type="password" name="password" class="demo-input" autocomplete="new-password" ></td>
				</tr>
			<!--- <tr class="tablerow">
				<!--- <td>Captcha Code: <div id="error-captcha" class="demo-error"><?php if(isset($error_message)) { echo $error_message; } ?></div><br/>
				<input name="captcha_code" type="text" class="demo-input captcha-input">
				</td></tr>-->
				<tr class="tablerow">
				<td><br/><input type="submit" name="submit" value="Submit" class="demo-btn"></td>
				</tr>
				</table>
			   
			  
               </form>
               
       
      </div>
	  </div>

   </body>
</html>
