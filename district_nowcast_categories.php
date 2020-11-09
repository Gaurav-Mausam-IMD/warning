
 
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
	
	   <style>
                      #chartdiv {
                        width: 200%;
                        height:100px;
                      }
                      #info {
                      width: 10%;
                        height: 10%;
                        position: absolute;
                        top: 300px;
                        left: 300px;
                      float:"center";
                      }

                      #info{

                        z-index: 10;
                      }
                      #info p {
                        margin: 5px;

                      }
                      </style>
	
   </head>

   <body>
   <?php echo "<h2><a href = 'welcome.php'  style='float: right;'>Back</a></h2>"; ?>
    <!--<h1><?php echo $login_session;?> </h1>-->
	  <br><br>
	  <center>
		
		<?php  
			include("config.php");
			include("config_nowcast.php");
			$current_user = $_SESSION['login_user'];
			
			date_default_timezone_set('Asia/Kolkata'); 
			$date = date('Y-m-d');
			$date1 = date('Hi');
			
			echo "
			<!--<h1>Entry For Thunderstorm Nowcast for ".$current_user."</h1>-->
			<br>";
						
				$sel = "select count(*) from (select District from imd_agro_database_final.Districtwise_Nowcast_Mapping where MC_RMC=?)src;";
				$sql = $db->prepare($sel);
				$sql->bind_param("s", $current_user);
			
				if ($sql->execute()) {
                       echo "<br>Select Stations from below list<br>";
				}
				else{
					echo "Error: " . $sql . "<br>" . mysqli_error($db);
                }	
				$result = $sql->get_result();
				#$result=(mysqli_query($db, $sel));
				$row=$result->fetch_assoc();		
				$count=$row['count(*)'];
				
				$sql->close();
				
				
				
					  
				$sel = "select District from imd_agro_database_final.Districtwise_Nowcast_Mapping where MC_RMC=?";
				$sql = $db->prepare($sel);
				$sql->bind_param("s", $current_user);
				$sql->execute();
				$result = $sql->get_result();
				//echo $result;
				//$result = mysqli_query($db, $sql);
								
						
				echo "<form action='insert_district_nowcast_categories.php' method='post'>
				<p>
				Time of issue in IST: <input type='date' name='Category18'  size='12' value='".$date."' required/> 
				<input type='number' name='Category19' min='0000' max='2359' size='4' value='".$date1."' required/> 
				</p>
				<p>
				Enter Valid upto time in IST: <input type='number' name='Category20' min='0000' max='2359' size='3' placeholder='HHMM' required/>
				</p>
				<br>
				<table>";
				$count=1;
				
				echo "<tr>";
				
				while($row = mysqli_fetch_array($result, MYSQLI_NUM))
				{
					echo "<td><font color='blue'><label style='cursor: pointer;'><input type='checkbox' name='cname".$count."' value='".$row[0]."'>".$row[0]."</label></font></td>";
						
						if ( $count === 7 || $count === 14 || $count === 21 || $count === 28 || $count === 35 || $count === 42 || $count === 49  || $count === 56 || $count === 63 || $count === 70 || $count === 77 || $count === 84 || $count === 91 )
							echo "</tr>";							
						$count++;
				} 
				echo "</tr>";
				echo "</table>";
				
				echo "	<br>";
				
			//===============================================//
                 $areas=array();
				      
                      $sql = "SELECT * FROM Districtwise_Nowcast_now";
					  $result = $db->prepare($sql);
                      //$result= $conn->query($sql);

                      //echo "hi";
                      if ($result->num_rows > 0) {
                          // output data of each row
                      $i=1;
                      //echo "hi".$i;
                       while($row1 = $result->fetch_assoc()) {
					   
					   $areas_1=array(                      
                      "title"=>$row1["State_District"],
                      "id"=>$row1["Obj_id"],            
                      "balloonText"=>$row1["State_District"]
                      );
					  array_push($areas,$areas_1);
                      $i=$i+1;
					 
					   }

                      }
 			  
				
				
				
		?> 
		 <div  id="chartdiv" style="height:600px; "></div>
		 
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
	 <script src="//cdnjs.cloudflare.com/ajax/libs/geojson2svg/1.0.2/geojson2svg.min.js"></script>
                      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                      <!-- amCharts includes -->
                      <script src="//www.amcharts.com/lib/3/ammap.js"></script>
                      <!--<script src="//www.amcharts.com/lib/3/maps/js/indiaLow.js"></script>-->
                      <script src="//www.amcharts.com/lib/3/themes/light.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
  <script src="js/libs/jquery-1.10.2.min.js"></script>
      <script src="js/home.js"></script>
      <script src="libs/easyab/easyab.min.js" type="text/javascript"></script>
		
<script>
 
                      jQuery.getJSON("district_shapefiles/<?php echo $current_user; ?>.json", function(data) {
                      alert("hi");  
                        // convert GeoJSON to JavaScript Maps comptible object
                        var mapVar = AmCharts.parseGeoJSON(data);
						console.log(mapVar);
                        
						
mapVar.tooltipText = "{DISTRICT}";
//mapVar.fill = AmCharts.color("#74B266");
						
						
                        // create the map
                        var map = AmCharts.makeChart("chartdiv", {
                          "type": "map",
                          "theme": "light",
"export": {
    "enabled": true,
  },
                          "dataProvider": {
                            "mapVar": mapVar,
                           "getAreasFromMap": true,
                          "areas": <?php echo json_encode($areas, JSON_PRETTY_PRINT) ?>,

                            
                      },


                      "balloon": {
                          "adjustBorderColor": true,
                          "color": "#000000",
                          "cornerRadius": 5,
                          "fontSize": 25,
                          "textAlign": "left",
                           "fillAlpha":1,
                          "fillColor": "#FFFFFF"
                        },

                          "areasSettings": {
                            "color":"#FCF3CF",
                            "autoZoom": true,
                             "outlineColor":"#000000",
                           "rollOverColor":undefined,
                            "selectedColor": undefined,
                          "rollOverColor":undefined
                       },
                    "hideCredits":"true",
                      


                        });
                      //map.addListener("rollOverMapObject", function(event) {
                        //document.getElementById("info").innerHTML = '<p><b>' + event.mapObject.title + '</b></p><p>' + event.mapObject.info + '</p>';
                      //});  
                      });

                      /**
                       * Convert GeoJSON to SVG
                       */
                      AmCharts.parseGeoJSON = function(geojson, fieldMap) {
                        
                        // init field map
                        if (typeof(fieldMap) !== "object")
                          fieldMap = {};
                        
                        // init calibration
                        var bounds = {
                          "left": -180,
                          "bottom": -90,
                          "right": 90,
                          "top": 90
                        };
                        
                        // init empty map
                        var mapVar = {
                          "svg": {
                            "defs": {
                              "amcharts:ammap": {
                                "projection":"mercator",
                                "leftLongitude":"-180",
                                "topLatitude":"90",
                                "rightLongitude":"180",
                                "bottomLatitude":"-90"
                              }   
                            },
                            "g":{
                              "path":[]
                            }
                          }
                        };
                        
                        // convert GeoJSON to SVG paths

                        var converter = geojson2svg({
                          "output": "svg",
                          "explode": false,
                          "attributes": {"class": "land"},
                          "mapExtent": bounds,
                          "viewportSize": {
                            "width": 100,
                            "height": 100
                          }
                        });
                        var svg = converter.convert(geojson, {});
                        
                        // parse each path into JavaScript Maps data structure
                        for(var i = 0; i < svg.length; i++) {
                          var path = svg[i];
                          var attrs = path.match(/\w+=".*?"/g);
                          var area = {};
                          for(var x = 0; x < attrs.length; x++) {
                            var parts = attrs[x].replace(/"/g, '').split("=");
                            var key = fieldMap[parts[0]] || parts[0];
                            area[key] = parts[1];
                          }
                          mapVar.svg.g.path.push(area);
                        }
                        
                        return mapVar;
                      }

                      //console.log(AmCharts.maps.loaded.svg.g.path);

                      </script>			  

	
</body>

</html>