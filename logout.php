<?php
session_start();
session_destroy();
#echo 'You have been logged out. <a href="login.php">Login</a>';
?>
<html>
<head>
 <title>Logout Page</title>
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
</head>
<body class="center">
<div  border="0" cellpadding="10" cellspacing="1" width="100%" class="demo-table" text-align="center">
<h4 >You have been logged out. <a href="login.php">Login</a></h4>

</div>

</body>
</html>
