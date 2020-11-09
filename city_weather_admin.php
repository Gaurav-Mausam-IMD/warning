<?php
   include('session.php');
?>
<html>

   <head>
      <title>Welcome </title>
	<style>
	table, th, td {
	  border: 1px solid black;
	  border-collapse: collapse;
	}
	th, td {
  	padding: 10px;
	}
	</style>
	
   </head>

   <body>
    <h1><?php echo $login_session;?> </h1>
	  <br><br>
	  <center>
		<h1><a href ="city_weather_data.php" style="center;"> Entry for City Weather Data (SYNOP / AWS )</a></h1>
		<br>
		<h1><a href ="city_weather.php" style="center;">Entry for City Weather Forecast </a></h1>
		<br>
		<h1><a href ="nowcast_categories.php" style="center;">Entry for Stations Nowcast </a></h1>
		<br>
		<h1><a href ="district_nowcast_categories.php" style="center;">Entry for District Nowcast </a></h1>
		<br>
		<h1><a href ="district_rainfall.php" style="center;">Entry for District Rainfall </a></h1>
		<br>
		<h1><a href ="district_multi_hazard_warnings.php" style="center;">Entry for District Multihazard Warnings </a></h1>
	 </center>
	  
</body>

</html>