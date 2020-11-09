<?php
   include('session.php');
?>
<html>

   <head>
      <title>Nowcast</title>
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
   <?php echo "<h2><a href = 'welcome.php'  style='float: right;'>Back</a></h2>"; ?>
    <h1><?php echo $login_session;?> </h1>
	  <br><br>
	  <center>
		
		<?php  
			
			include("config_nowcast.php");
			$current_user = $_SESSION['login_user'];
			date_default_timezone_set('Asia/Kolkata'); 
			$date = date('Y-m-d');
			$date1 = date('Hi');
			$new_time = date("Hi", strtotime('+3 hours'));
			echo "
			<h1>Entry For Nowcast for ".$current_user."</h1>
			<br>";
						
				echo "<br>Select Stations from below list<br>";
											
						
				echo "<form action='insert_nowcast_categories.php' method='post'>
				<p>
				Time of issue in IST: <input type='date' name='Category18'  size='12' value='".$date."' required/> 
				<input type='number' name='Category19' min='0000' max='2359' step='1.0' size='4' value='".$date1."' required/> 
				</p>
				<p>
				Enter Valid upto time in IST: <input type='number' name='Category20' min='0000' max='2359' step='1.0' size='4' value='".$new_time."' required/>
				</p>
				<br>
				<table>";
				$sel = "select Station from Nowcast.mc_wise_station_list where Nowcast_Centre=?";
				$sql = $db->prepare($sel);
				$sql->bind_param("s", $current_user);
				$sql->execute();
				$result = $sql->get_result();
				$count=1;
				echo "<tr>";
				while($row = mysqli_fetch_array($result, MYSQLI_NUM))
				{
					echo "<td><font color='blue'><label style='cursor: pointer;'><input type='checkbox' name='cname".$count."' value='".$row[0]."'>".$row[0]."</label></font></td>";
						
						if ( $count === 7 || $count === 14 || $count === 21 || $count === 28 || $count === 35 || $count === 42 || $count === 49 || $count === 56 || $count === 63)
							echo "</tr>";							
						$count++;
				} 
				echo "</tr>";
				echo "</table>";
				
				echo "	<br>";
		?> 
				<table>
				<tr>
					<th>Select</th>
					<th>Nowcast Categories</th>
				</tr>
		        <tr>
                        <td><input type="checkbox" name="Category1" value="1" id="acs1" checked></td><td onclick="myFunction1(this)" bgcolor="green" style="cursor: pointer;">No Weather</td>
				</tr>
				<tr >
                        <td><input type="checkbox" name="Category2" value="2" id="acs2"></td><td onclick="myFunction2()" style="cursor: pointer;" bgcolor="yellow">Light rain: < 5 mm/hr</td>
				</tr>
				<tr>
                        <td><input type="checkbox" name="Category3" value="3" id="acs3"></td><td onclick="myFunction3(this)" style="cursor: pointer;" bgcolor="yellow">Light snow < 5cm/hr</td>
				</tr>
				<tr>
                        <td><input type="checkbox" name="Category4" value="4" id="acs4"></td><td onclick="myFunction4(this)" style="cursor: pointer;" bgcolor="yellow">Light Thunderstorms with maximum surface wind speed less than 40 kmph (In gusts)</td>
				</tr>
				<tr>
                        <td><input type="checkbox" name="Category5" value="5" id="acs5"></td><td onclick="myFunction5(this)" style="cursor: pointer;" bgcolor="yellow">Slight dust storm: If the wind speed is up to 41 kmph and visibility is less than 1,000 metres but more than 500 meters</td>
				</tr>
				<tr>
                        <td><input type="checkbox" name="Category6" value="6" id="acs6"></td><td onclick="myFunction6(this)" style="cursor: pointer;" bgcolor="yellow">Low cloud to ground Lightning probability ( < 30%  probability of lightning occurrence)</td>
				</tr>
				
				
				
				<tr>
                        <td><input type="checkbox" name="Category7" value="7" id="acs7"></td><td onclick="myFunction7(this)" style="cursor: pointer;" bgcolor="orange">Moderate rain:  5-15 mm/hr</td>
				</tr>
				<tr>
                        <td><input type="checkbox" name="Category8" value="8" id="acs8"></td><td onclick="myFunction8(this)" style="cursor: pointer;" bgcolor="orange">Moderate snow: 5-15 cm/hr</td>
				</tr>
				<tr>
						<td><input type="checkbox" name="Category9" value="9" id="acs9"></td><td onclick="myFunction9(this)" style="cursor: pointer;" bgcolor="orange">Moderate Thunderstorms with maximum surface wind speed between 41 – 61 kmph (In gusts)</td>
				</tr>
				<tr>
                        <td><input type="checkbox" name="Category10" value="10" id="acs10"></td><td onclick="myFunction10(this)" style="cursor: pointer;" bgcolor="orange">Moderate dust storm: If the wind speed is between 41- 61 kmph and visibility is between  200 and 500 metres due to dust</td>
				</tr>
				<tr>
                        <td><input type="checkbox" name="Category11" value="11" id="acs11"></td><td onclick="myFunction11(this)" style="cursor: pointer;" bgcolor="orange">Moderate cloud to ground Lightning probability (30 - 60%  probability of lightning occurrence)</td>
				</tr>
				
				
				<tr>
                        <td><input type="checkbox" name="Category12" value="12" id="acs12"></td><td onclick="myFunction12(this)" style="cursor: pointer;" bgcolor="red">Heavy rain: > 15 mm/hr</td>
				</tr>
				<tr>
                        <td><input type="checkbox" name="Category13" value="13" id="acs13"></td><td onclick="myFunction13(this)" style="cursor: pointer;" bgcolor="red">Heavy snow: >15 cm/hr</td>
				</tr>
				<tr>
                        <td><input type="checkbox" name="Category14" value="14" id="acs14"></td><td onclick="myFunction14(this)" style="cursor: pointer;" bgcolor="red">Severe Thunderstorms with maximum surface wind speed 62 -87 kmph (In gusts)</td>
				</tr>
				<tr>
                        <td><input type="checkbox" name="Category15" value="15" id="acs15"></td><td onclick="myFunction15(this)" style="cursor: pointer;" bgcolor="red">Very Severe Thunderstorms with maximum surface wind speed > 87 kmph (In gusts)</td>
				</tr>
				<tr>
                        <td><input type="checkbox" name="Category31" value="31" id="acs31"></td><td onclick="myFunction31(this)" style="cursor: pointer;" bgcolor="red">Thunderstorms with Hail</td>
				</tr>
				<tr>
                        <td><input type="checkbox" name="Category32" value="32" id="acs32"></td><td onclick="myFunction32(this)" style="cursor: pointer;" bgcolor="red">Severe dust storm: If surface wind speed (in gusts) exceeding 61 kmph and visibility is less than 200 metres due to dust</td>
				</tr>
				<tr>
                        <td><input type="checkbox" name="Category33" value="33" id="acs33"></td><td onclick="myFunction33(this)" style="cursor: pointer;" bgcolor="red">High cloud to ground Lightning probability ( > 60%  probability of lightning occurrence)</td>
				</tr>
				
				<tr>
						<td><input type="checkbox" name="Category16" value="16" id="acs16"></td><td onclick="myFunction16(this)" style="cursor: pointer;"  bgcolor="red">Other Warnings &nbsp <textarea name="Category21" id="acs18" rows="4" cols="80"></textarea></td>
				</tr>
				<tr>
                        <td>Enter Text Message</td><td><textarea name="Category17" id="acs17" rows="4" cols="80"></textarea></td>		
                </tr>
				<tr>
						<td>Color</td><td>Green<input type="radio" name="Category25" value="1" >&nbsp;&nbsp;&nbsp;&nbsp; Yellow<input type="radio" name="Category25" value="2">&nbsp;&nbsp;&nbsp;&nbsp; Orange<input type="radio" name="Category25" value="3">&nbsp;&nbsp;&nbsp;&nbsp; Red<input type="radio" name="Category25" value="4">&nbsp;&nbsp;&nbsp;&nbsp;</td>
				</tr>
				
        </table>
		<br>
	<input type="submit" name="submit" value="Submit"> &nbsp
	<input type="button" onclick="UnSelectAll()" value="Reset"/>
	</form>
</center>
<script type="text/javascript">

    function UnSelectAll() {
		document.getElementById("acs1").checked = true;
		document.getElementById("acs2").checked = false;
		document.getElementById("acs3").checked = false;
		document.getElementById("acs4").checked = false;
		document.getElementById("acs5").checked = false;
		document.getElementById("acs6").checked = false;
		document.getElementById("acs7").checked = false;
		document.getElementById("acs8").checked = false;
		document.getElementById("acs9").checked = false;
		document.getElementById("acs10").checked = false;
		document.getElementById("acs11").checked = false;
		document.getElementById("acs12").checked = false;
		document.getElementById("acs13").checked = false;
		document.getElementById("acs14").checked = false;
		document.getElementById("acs15").checked = false;
		document.getElementById("acs16").checked = false;
		document.getElementById('acs18').value = '';
		document.getElementById('acs17').value = '';
		document.getElementById("acs31").checked = false;
		document.getElementById("acs32").checked = false;
		document.getElementById("acs33").checked = false;
		document.getElementById("acs34").checked = false;
		document.getElementById("acs35").checked = false;
		document.getElementById("acs36").checked = false;
		document.getElementById("acs37").checked = false;
		document.getElementById("acs38").checked = false;
		
	}

	function myFunction1() {	
			document.getElementById("acs1").checked = true;
	}
	function myFunction2() {	
			document.getElementById("acs1").checked = false;
			document.getElementById("acs2").checked = true;	
	}
	function myFunction3(x) {
			document.getElementById("acs1").checked = false;
		document.getElementById("acs3").checked = true;	
	}
	function myFunction4(x) {
		document.getElementById("acs1").checked = false;
			document.getElementById("acs4").checked = true;
	}
	function myFunction5(x) {
			document.getElementById("acs1").checked = false;
			document.getElementById("acs5").checked = true;
	}
	function myFunction6(x) {
			document.getElementById("acs1").checked = false;
			document.getElementById("acs6").checked = true;
	}	
	function myFunction7(x) {
			document.getElementById("acs1").checked = false;
			document.getElementById("acs7").checked = true;
	}
	function myFunction8(x) {
			document.getElementById("acs1").checked = false;
			document.getElementById("acs8").checked = true;
	}
	function myFunction9(x) {
			document.getElementById("acs1").checked = false;
			document.getElementById("acs9").checked = true;
	}
	function myFunction10(x) {
			document.getElementById("acs1").checked = false;
			document.getElementById("acs10").checked = true;
	}
	function myFunction11(x) {
			document.getElementById("acs1").checked = false;
			document.getElementById("acs11").checked = true;
	}
	function myFunction12(x) {
			document.getElementById("acs1").checked = false;
			document.getElementById("acs12").checked = true;
	}
	function myFunction13(x) {
			document.getElementById("acs1").checked = false;
			document.getElementById("acs13").checked = true;
	}
	function myFunction14(x) {
			document.getElementById("acs1").checked = false;
			document.getElementById("acs14").checked = true;
	}	
	function myFunction15(x) {
			document.getElementById("acs1").checked = false;
			document.getElementById("acs15").checked = true;
	}	
	function myFunction16(x) {
			document.getElementById("acs1").checked = false;
			document.getElementById("acs16").checked = true;
	}
	function myFunction17(x) {
			document.getElementById("acs1").checked = false;
			document.getElementById("acs31").checked = true;
	}
	function myFunction18(x) {
			document.getElementById("acs1").checked = false;
			document.getElementById("acs32").checked = true;
	}
	function myFunction19(x) {
			document.getElementById("acs1").checked = false;
			document.getElementById("acs33").checked = true;
	}
	function myFunction20(x) {
			document.getElementById("acs1").checked = false;
			document.getElementById("acs34").checked = true;
	}
	function myFunction21(x) {
			document.getElementById("acs1").checked = false;
			document.getElementById("acs35").checked = true;
	}
	function myFunction22(x) {
			document.getElementById("acs1").checked = false;
			document.getElementById("acs36").checked = true;
	}
	function myFunction23(x) {
			document.getElementById("acs1").checked = false;
			document.getElementById("acs37").checked = true;
	}
	function myFunction24(x) {
			document.getElementById("acs1").checked = false;
			document.getElementById("acs38").checked = true;
	}
	</script>
</body>

</html>
