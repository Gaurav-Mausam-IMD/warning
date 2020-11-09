<?php
	include('session.php');
	include("config_nowcast.php");
	
	echo "<h2><a href = 'logout.php'  style='float: right;'>Sign Out</a></h2>";

	ob_start();
	$name=0;
	$count=1;
	$db_table='Nowcast.Stationwise_Warnings_Now';
	$db_table_backup='Nowcast.Stationwise_Warnings';
	$time_of_issue=0;
	$valid_upto=0;
	
	
		$date=$_POST['Category18'];
	
		$year=substr($date,0,4);
		$month=substr($date,5,2);
		$day=substr($date,8,2);
		
		$time=$_POST['Category19'];
		$hours=substr($time,0,2);
		$mins=substr($time,2,2);
		
		$vtime=$_POST['Category20'];
		$vhours=substr($vtime,0,2);
		$vmins=substr($vtime,2,2);
		
		$time_of_issue=$hours.$mins;
		$valid_upto=$vhours.$vmins;

		$cat1=$_POST['Category1'];
		if (!isset($_POST['Category1']))
		{
			$cat1=0;
		}	
		
		$cat2=$_POST['Category2'];
		if (!isset($_POST['Category2']))
		{
			$cat2=0;
		}
		
		
		$cat3=$_POST['Category3'];
		if (!isset($_POST['Category3']))
		{
			$cat3=0;
		}
		
		
		$cat4=$_POST['Category4'];
		if (!isset($_POST['Category4']))
		{
			$cat4=0;
		}
		
		
		$cat5=$_POST['Category5'];
		if (!isset($_POST['Category5']))
		{
			$cat5=0;
		}
		
		
		$cat6=$_POST['Category6'];
		if (!isset($_POST['Category6']))
		{
			$cat6=0;
		}
		
		
		$cat7=$_POST['Category7'];
		if (!isset($_POST['Category7']))
		{
			$cat7=0;
		}
	
		
		$cat8=$_POST['Category8'];
		if (!isset($_POST['Category8']))
		{
			$cat8=0;
		}
		
		
		$cat9=$_POST['Category9'];
		if (!isset($_POST['Category9']))
		{
			$cat9=0;
		}
		
		
		$cat10=$_POST['Category10'];
		if (!isset($_POST['Category10']))
		{
			$cat10=0;
		}
		
		
		$cat11=$_POST['Category11'];
		if (!isset($_POST['Category11']))
		{
			$cat11=0;
		}
		
		
		
		$cat12=$_POST['Category12'];
		if (!isset($_POST['Category12']))
		{
			$cat12=0;
		}
		
		
		$cat13=$_POST['Category13'];
		if (!isset($_POST['Category13']))
		{
			$cat13=0;
		}
		
		
		$cat14=$_POST['Category14'];
		if (!isset($_POST['Category14']))
		{
			$cat14=0;
		}
		
		
		$cat15=$_POST['Category15'];
		if (!isset($_POST['Category15']))
		{
			$cat15=0;
		}
		
		$cat16=$_POST['Category21'];
		
		$sname=$_POST['Category17'];
		if (isset($_POST['Category25']))
		{
			$Color=$_POST['Category25'];
		}
		else
		{
			$Color=999;
		}
		
		$cat17=$_POST['Category31'];
		if (!isset($_POST['Category31']))
		{
			$cat17=0;
		}
		
		
		$cat18=$_POST['Category32'];
		if (!isset($_POST['Category32']))
		{
			$cat18=0;
		}
		
		$cat19=$_POST['Category33'];
		if (!isset($_POST['Category33']))
		{
			$cat19=0;
		}
		
		
   
   
		$current_user = $_SESSION['login_user'];
		echo "<h3>Only Selected Station's values are updated !!</h3>";
		echo "<br>User is ".$current_user;
		$sel = "select count(*) from (select Station from Nowcast.mc_wise_station_list where Nowcast_Centre='".$current_user."')src;";
		$result=(mysqli_query($db, $sel));
		$row=$result->fetch_assoc();
				
		$counter=$row['count(*)'];
		
		echo "<br>Counter is ".$counter;
		echo "<br>";
		

		for ($i=1; $i<= $counter; $i++)
		{	
			$name="cname".$i;
			$station=$_POST[$name];
			#echo "Station is ".$station;
			if (isset($_POST[$name]))
			{
				//$sql = "update $db_table set Date='$date', cat1='$cat1', cat2='$cat2', cat3='$cat3', cat4='$cat4', cat5='$cat5', cat6='$cat6', cat7='$cat7', cat8='$cat8', cat9='$cat9', cat10='$cat10', cat11='$cat11', cat12='$cat12', cat13='$cat13', cat14='$cat14', cat15='$cat15', cat16='$cat16', message='$sname', toi='$time_of_issue', vupto='$valid_upto' where Station='$station';";
				$up = "update $db_table set Date=?, cat1=?, cat2=?, cat3=?, cat4=?, cat5=?, cat6=?, cat7=?, cat8=?, cat9=?, cat10=?, cat11=?, cat12=?, cat13=?, cat14=?, cat15=?, cat16=?, cat17=?, cat18=?, cat19=?, message=?, toi=?, vupto=?, Color=? where Station=?";
				$sql = $db->prepare($up);
				$sql->bind_param("siiiiiiiiiiiiiiisiiisssis", $date, $cat1, $cat2,$cat3, $cat4, $cat5, $cat6, $cat7, $cat8, $cat9, $cat10, $cat11, $cat12, $cat13, $cat14, $cat15, $cat16, $cat17, $cat18, $cat19, $sname, $time_of_issue, $valid_upto, $Color, $station);
				
				if ($sql->execute()) {
                        echo "<br>Record updated successfully for $station<br>";
						
				}
				else{
						echo "Error: " . $sql . "<br>" . mysqli_error($db);
                }
				$sql->close();
				//$sql =" insert into $db_table_backup (Station, Date, cat1, cat2, cat3, cat4, cat5, cat6, cat7, cat8, cat9, cat10, cat11, cat12, cat13, cat14, cat15, cat16, message, toi, vupto) values ('$station', '$date', '$cat1', '$cat2', '$cat3', '$cat4', '$cat5', '$cat6', '$cat7', '$cat8', '$cat9', '$cat10', '$cat11', '$cat12', '$cat13', '$cat14', '$cat15', '$cat16', '$sname', '$time_of_issue', '$valid_upto');";
				$ins ="insert into $db_table_backup (Station, Date, cat1, cat2, cat3, cat4, cat5, cat6, cat7, cat8, cat9, cat10, cat11, cat12, cat13, cat14, cat15, cat16, cat17, cat18, cat19, message, toi, vupto, Color) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
				$sql = $db->prepare($ins);
				$sql->bind_param("ssiiiiiiiiiiiiiiisiiisssi", $station, $date, $cat1, $cat2, $cat3, $cat4, $cat5, $cat6, $cat7, $cat8, $cat9, $cat10, $cat11, $cat12, $cat13, $cat14, $cat15, $cat16, $cat17, $cat18, $cat19, $sname, $time_of_issue, $valid_upto, $Color);
				
				if ($sql->execute()) {
                        echo "<br>Record inserted successfully for $station<br>";
				}
				else{
						echo "Error: " . $sql . "<br>" . mysqli_error($db);
                }
				echo "<br>";
				$sql->close();
			}
			
	}
		$myStr = ob_get_contents();
	ob_end_clean();
	file_put_contents('data/data.txt', $myStr);
	header('Location: results.php');
?>
