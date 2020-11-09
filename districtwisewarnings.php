 <?php
//include("secure.php");

                      /*$servername = "localhost";
                      $username = "root";
                      $password = '';

                      $dbname = "imd";
                      $dbname1="imd2";*/



                      $servername = "localhost";
                      $username = "root";
                      $password = 'rimes123';

                      $dbname = "imd_agro_database_final";
                      //$dbname1="Forecast";


                      $conn = new mysqli($servername, $username,$password, $dbname);
                      //$conn1 = new mysqli($servername, $username,$password, $dbname1);
                      // Check connection
                      if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);

                      }
                      $areas=array();
                      $sql = "SELECT * FROM Districtwise_Nowcast_now";
                      $result= $conn->query($sql);

                      //echo "hi";
                      if ($result->num_rows > 0) {
                          // output data of each row
                      $i=1;
                      //echo "hi".$i;
                       while($row1 = $result->fetch_assoc()) {
                         
                       if($row1["Color"]==999)

{
if($row1["cat1"]>0)
{
#echo $station_1;
$url="nowcast_marker/map-marker-icon-png-green.png";


}

if($row1["cat2"]>0)
{
#echo $station_1;
$url="nowcast_marker/map-marker-icon-png-yellow.png";


}

if($row1["cat3"]>0)
{
#echo $station_1;
$url="nowcast_marker/map-marker-icon-png-yellow.png";


}
if($row1["cat4"]>0)
{
#echo $station_1;
$url="nowcast_marker/map-marker-icon-png-yellow.png";


}
if($row1["cat5"]>0)
{
#echo $station_1;
#echo $warning;
$url="nowcast_marker/map-marker-icon-png-yellow.png";


}

if($row1["cat6"]>0)
{
#echo $station_1;
#echo $warning;
$url="nowcast_marker/map-marker-icon-png-yellow.png";


}
if($row1["cat7"]>0)
{
#echo $station_1;
$url="nowcast_marker/map-marker-icon-png-orange.png";


}
if($row1["cat8"]>0)
{
#echo $station_1;
$url="nowcast_marker/map-marker-icon-png-orange.png";


}
if($row1["cat9"]>0)
{
#echo $station_1;
$url="nowcast_marker/map-marker-icon-png-orange.png";


}
if($row1["cat10"]>0)
{
#echo $station_1;
$url="nowcast_marker/map-marker-icon-png-orange.png";


}

if($row1["cat11"]>0)
{
#echo $station_1;
$url="nowcast_marker/map-marker-icon-png-orange.png";


}


if($row1["cat12"]>0)
{
#echo $station_1;
$url="nowcast_marker/map-marker-icon-png-red.png";


}
if($row1["cat13"]>0)
{
#echo $station_1;
$url="nowcast_marker/map-marker-icon-png-red.png";


}
if($row1["cat14"]>0)
{
#echo $station_1;
$url="nowcast_marker/map-marker-icon-png-red.png";


}
if($row1["cat15"]>0)
{
#echo $station_1;
$url="nowcast_marker/map-marker-icon-png-red.png";


}



if($row1["cat19"]>0)
{
#echo $station_1;
$url="nowcast_marker/map-marker-icon-png-red.png";


}

if($row1["cat17"]>0)
{
#echo $station_1;
$url="nowcast_marker/map-marker-icon-png-red.png";


}

if($row1["cat18"]>0)
{
#echo $station_1;
$url="nowcast_marker/map-marker-icon-png-red.png";


}


if(!empty($row1["message"]) || !empty($row1["cat16"]))
{
#echo $station_1;
$url="nowcast_marker/map-marker-icon-png-red.png";
}







}


                      if($row1["Color"]==0)
                      {
                      #echo $station_1;
                      $color="#008000";

                      }
                      if($row1["Color"]==1)
                      {
                      #echo $station_1;
                      $color="#008000";

                      }

                      if($row1["Color"]==2)
                      {
                      #echo $station_1;
                      $color="#FFFF00";

                      }
                      if($row1["Color"]==3)
                      {
                      #echo $station_1;
                      $color="#ffa500";

                      }

                      if($row1["Color"]==4)
                      {
                      #echo $station_1;
                      $color="#ff0000";


                      }

if($row1["cat1"]>0)
{
#echo $station_1;
$warning="No Warning </br>";


}

if($row1["cat2"]>0)
{
#echo $station_1;

$warning=$warning."Light rain: < 5 mm/hr</br> ";

}


if($row1["cat3"]>0)
{
#echo $station_1;

$warning=$warning."Light snow: < 5 mm/hr</br> ";

}

if($row1["cat4"]>0)
{
#echo $station_1;
$warning=$warning."Light Thunderstorms with maximum surface wind speed less than 40 kmph </br>";
#echo $warning;


}


if($row1["cat5"]>0)
{
#echo $station_1;

$warning=$warning."Slight dust storm: If the wind speed is up to 41 kmph and visibility is less than 1,000 metres but more than 500 meters</br> ";

}

if($row1["cat6"]>0)
{
#echo $station_1;

$warning=$warning."Low cloud to ground Lightning probability ( < 30% probability of lightning occurrence)</br> ";

}

if($row1["cat7"]>0)
{
#echo $station_1;

$warning=$warning."Moderate rain: 5-15 mm/hr</br> ";

}
if($row1["cat8"]>0)
{
#echo $station_1;

$warning=$warning."Moderate snow: 5-15 mm/hr</br> ";

}

if($row1["cat9"]>0)
{
#echo $station_1;

$warning=$warning."Moderate Thunderstorms with maximum surface wind speed between 41 – 61 kmph (In gusts)</br> ";

}


if($row1["cat10"]>0)
{
#echo $station_1;

$warning=$warning."Moderate dust storm: If the wind speed is between 41- 61 kmph and visibility is between 200 and 500 metres due to dust</br> ";

}

if($row1["cat11"]>0)
{
#echo $station_1;

$warning=$warning."Moderate cloud to ground Lightning probability (30 - 60% probability of lightning occurrence)</br> ";

}

if($row1["cat12"]>0)
{
#echo $station_1;

$warning=$warning."Heavy rain: > 15 mm/hr</br> ";

}

if($row1["cat13"]>0)
{
#echo $station_1;

$warning=$warning."Heavy snow: > 15 mm/hr</br> ";

}


if($row1["cat14"]>0)
{
#echo $station_1;

$warning=$warning."Severe Thunderstorms with maximum surface wind speed 62 -87 kmph (In gusts)</br> ";

}
if($row1["cat15"]>0)
{
#echo $station_1;

$warning=$warning."Very Severe Thunderstorms with maximum surface wind speed > 87 kmph (In gusts)</br> ";

}

if($row1["cat17"]>0)
{
#echo $station_1;

$warning=$warning."Thunderstorms with Hail</br> ";

}

if($row1["cat18"]>0)
{
#echo $station_1;

$warning=$warning."Severe dust storm: If surface wind speed (in gusts) exceeding 61 kmph and visibility is less than 200 metres due to dust</br> ";

}


if($row1["cat19"]>0)
{
#echo $station_1;

$warning=$warning."High cloud to ground Lightning probability ( > 60% probability of lightning occurrence)</br> ";

}



if(!empty($row1["message"]) || !empty($row1["cat16"]))
{
#echo $station_1;
$warning=$warning."</br>".$row1["cat16"]."</br>".$row1["message"];
}

                      $timestamp=$row1["toi"];
                      $valid_upto=$row1["vupto"];
		      $date=$row1["Date"];

                      if(empty($warning))
                      {
                      $warning="</br></br>No data Available";
                      $color="#FFFFFF";
                      }
                      else{
                      $warning="<p>".$warning."</br>Time of issue: ".$date."</br>" .$timestamp." Hrs</br> Valid upto: ".$valid_upto." Hrs </p>";
                      }


                      $areas_1=array(
                      //"svgPath"=> $targetSVG,
                      "title"=>$row1["State_District"],
                      "id"=>$row1["Obj_id"],
                      "color"=>$color,
                      "info"=>$warning,
                      "balloonText"=>$row1["State_District"].$warning

                      );
                      array_push($areas,$areas_1);
                      $i=$i+1;

                      $warning="";
                      }

                      }
                      else
                      {


                      }

                      ?>

<!doctype html>
<html lang="en">
   
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />  
   <head>
      <meta charset="utf-8">
      <meta name="robots" content="noodp">
      <meta name="viewport" id="viewport" content="width=device-width">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      
      <title><?php echo $title; ?></title>
      <meta name="keywords" content="IMD">
      
      <link rel="home" href="" title="home">
     
    
      <link rel="stylesheet" href="css/home.css" type="text/css">
     
      <link rel="shortcut icon" href="ico/favicon.png">
     

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.css" />

      <style type="text/css" media="screen">

         .sun-rise{
            background-image: url('img/sunrise.jpg');
           }
           
           .sun-set{
               background-image: url('img/sunset.jpg');
           }
           

           .moon-rise{
               background-image: url('img/moonrise.jpg');
           }
           


           .moon-set{
               background-image: url('img/moonset.jpg');
           }
           

           .moon-set p span, .moon-rise p span, .sun-set p span, .sun-rise p span{
             background-color: #0000008a;
             padding:5px;
           }

           .moon-set p, .moon-rise p, .sun-set p, .sun-rise p{
                   color: #fff;
                   padding-left: 10px;
                   font-weight: 400;
                   line-height: 36.5px;
                   bottom: 0px !important;
                   font-family: sans-serif;
                   font-size: 14px;
                   margin:0;

           }

           .right-box-equal{
               height: 38px;
               margin-bottom: 5px;
           }
         
      </style>
          
                      <style>
                      #chartdiv {
                        width: 100%;
                        height: 900px;
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
                      <script src="//cdnjs.cloudflare.com/ajax/libs/geojson2svg/1.0.2/geojson2svg.min.js"></script>
                      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                      <!-- amCharts includes -->
                      <script src="//www.amcharts.com/lib/3/ammap.js"></script>
                      <!--<script src="//www.amcharts.com/lib/3/maps/js/indiaLow.js"></script>-->
                      <script src="//www.amcharts.com/lib/3/themes/light.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />

   </head>
   <body>
       <!--This cover the whole page -->
      <div id="pageheight">
      <!--This cover the website page -->
         <div id="pagewrap">
           
         

       <?php //include "header.php";?>
           
            <div id="columns">
             <?php //include "warning.php";?>
           
              <section id="middle">
                <div class="middle_content">
                  <h3 style="color:red; text-align: center; font-size: 18px;">District wise Nowcast warnings</h3>
                  <hr />

                  <div style="text-align: center">

                   
                   
                   


                  
                      
                       <div id="legenddiv" ></div>
                      
                       
                       <div  id="chartdiv" style="height:800px; "></div>
                    

                     
                  </div>
                </div>
               </section>



               
               
            
              
               <div class="clr"></div>
            </div>
		<?php //include "footer.php";?>
         </div>
       
      </div>
 <script>
                      jQuery.getJSON("district_shapefiles/DISTRICT_F-2.json", function(data) {
                      //alert("hi");  
                        // convert GeoJSON to JavaScript Maps comptible object
                        var mapVar = AmCharts.parseGeoJSON(data);
                        
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
                          "fontSize": 18,
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
                      legend: {
                        divId: "legenddiv",
                        "data": [{
                            "title": "No warning",
                            "color": "#008000"
                          }, {
                            "title": "Watch",
                            "color": "#FFCC33"
                          },

                      {
                            "title": "Alert",
                            "color": "#FFA500"
                          },
                      {
                            "title": "Warning",
                            "color": "#FF0000"
                          }

                
      ]
                      }


                        });
                      //map.addListener("rollOverMapObject", function(event) {
                        //document.getElementById("info").innerHTML = '<p><b>' + event.mapObject.title + '</b></p><p>' + event.mapObject.info + '</p>';
                      //});  
                      });

                      /**
                       * Convert GeoJSON to SVG
                       */
					  console.log(map)
// want to create the help of map					  
					   
                      AmCharts.parseGeoJSON = function(geojson, fieldMap) {
                        
                        // init field map
                        if (typeof(fieldMap) !== "object")
                          fieldMap = {};
                        
                        // init calibration
                        var bounds = {
                          "left": -180,
                          "bottom": -90,
                          "right": 180,
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
						
						//console.log(mapVar)
                        
                        return mapVar;
                      }

                      //console.log(AmCharts.maps.loaded.svg.g.path);

                      </script>

      <script src="js/libs/jquery-1.10.2.min.js"></script>
      <script src="js/home.js"></script>
      <script src="libs/easyab/easyab.min.js" type="text/javascript"></script>

      <script> 
      jQuery('#Satellite').hover(function() { 

          jQuery('#banner #right_div').css({'background-image': 'url(assets/img/sattelite.jpg)', 'background-position': '-122px'}); 

      }); 

      jQuery('#Radar').hover(function() { 

          jQuery('#banner #right_div').css({'background-image': 'url(assets/img/radar.jpg)', 'background-position': '0px'}); 

      }); 

      jQuery('#Current').hover(function() { 

          jQuery('#banner #right_div').css("background-image", "url(assets/img/current_weather.jpg)"); 

      }); 

      jQuery('#Rainfall').hover(function() { 

          jQuery('#banner #right_div').css({'background-image': 'url(assets/img/current_weather.jpg)'}); 

      }); 

      jQuery('#Weather').hover(function() { 

          jQuery('#banner #right_div').css("background-image", "url(assets/img/video.jpg)"); 

      }); 
</script>


      
      
   </body>
  
</html>
