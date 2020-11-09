<?php

   include('config.php');
   if(!isset($_SESSION)){
   session_start();
   }
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select User from subdiv_login where User = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['User'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
   else 
   {
        $now = time(); // Checking the time now when home page starts.

        if ($now > $_SESSION['expire']) {
            session_destroy();
            echo "Your session has expired! <a href='login.php'>Login here</a>";
			die();
        }
   }
   
?>
