 <?php
include("secure.php");

$servername = "localhost";
$username = "admin";
$password = '#jen$kins@2019';

$dbname = "Nowcast";
$dbname1="Forecast";
$targetSVG = "M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";

// Create connection
$conn = new mysqli($servername, $username,$password, $dbname1);
$conn1 = new mysqli($servername, $username,$password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
$images=array();
$images_1=array();
$sql = "SELECT * FROM mc_wise_station_list";
$result= $conn1->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
$i=1;
 while($row = $result->fetch_assoc()) {
$lat[$i]=$row["Lat"];
$lng[$i]=$row["Lng"];
$station[$i]=$row["Station"];
$station_1=$row["Station"];
#echo $station_1;
#$sql1="SELECT * FROM cmbined_nowcast where Station='$station_1'";

$sql1="SELECT * FROM Stationwise_Warnings_Now where Station='$station_1'";
$result1= $conn1->query($sql1);
if ($result1->num_rows > 0) {
while($row1 = $result1->fetch_assoc()) {
#echo "hi";
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
$url="nowcast_marker/map-marker-icon-png-green.png";


}
if($row1["Color"]==1)
{
#echo $station_1;
$url="nowcast_marker/map-marker-icon-png-green.png";


}

if($row1["Color"]==2)
{
#echo $station_1;
#echo $warning;
$url="nowcast_marker/map-marker-icon-png-yellow.png";


}
if($row1["Color"]==3)
{
#echo $station_1;
$url="nowcast_marker/map-marker-icon-png-orange.png";


}

if($row1["Color"]==4)
{
#echo $station_1;
$url="nowcast_marker/map-marker-icon-png-red.png";


}


if($row1["cat1"]>0)
{
#echo trim($station_1);
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



}



}
if(empty($warning))
{
$warning="No data Available";
$url="";
}
else{
$warning="<p>".$warning."</br> Time of issue: ".$date."</br>".$timestamp." Hrs</br> Valid upto: ".$valid_upto." Hrs </p>";
#echo $warning;
}
if(strpos($station[$i],"Hamirpur_UP")!==false)
{
#echo "in if";
$station[$i]="HamirpurUP";
}
$images_1=array(
//"svgPath"=> $targetSVG,
"imageURL"=> $url, 
 "width"=> 20,
      "height"=> 20,
 "description"=> $warning, 
    "zoomLevel"=> 5,
     "scale"=> 0.5,
      "title"=> $station[$i],
     "latitude"=> $lat[$i],
      "longitude"=> $lng[$i]

);
array_push($images,$images_1);
$i=$i+1;

$warning="";
}

}
else
{


}

#echo json_encode($images,JSON_PRETTY_PRINT);
?>


<!doctype html>
<html lang="en">
   
  
   <head>
       
      
      <title>IMD | Nowcast Warning</title>
     <?php include "header_part.php";?>
 <style>


#chartdiv {
  width: 100%;
  height: 800px;
overflow: visible;
}		

.amcharts-chart-div {
  width: 100%;
  height: 800px;
overflow: visible;

}
.ammapDescriptionWindow {
  width: 300px;
  background-color: #eee;
  padding: 10px;
  text-align: "center";
  border-radius: 5px;
  font-family: Verdana;
  font-size: 14px;
  opacity: 0.95;
  overflow: visible;
}

.ammapDescriptionTitle {
  font-weight: bold;
  font-size: 16px;
  margin-bottom: 10px;
}																
</style>

                      <!-- Resources -->
<script src="https://www.amcharts.com/lib/3/ammap.js"></script>
<script src="https://www.amcharts.com/lib/3/maps/js/indiaLow.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />

   </head>
   <body>
     <!--This cover the whole page -->
      <div id="pageheight">
      <!--This cover the website page -->
         <div id="pagewrap">
           
         

       <?php include "header.php";?>
           
            <div id="columns">
             <?php include "warning.php";?>
           
              <section id="middle">
                <div class="middle_content">
                  <h3 style="color:red; text-align: center; font-size: 18px;">Nowcast-warnings</h3>
                  <hr />
                  <div style="text-align: center">
                   
     <div id="legenddiv" style="border: 2px dotted #fff; margin: 5px 0 20px 0;position: relative;"></div>                   
<!-- HTML -->
<div id="chartdiv" style="overflow:visible;"></div>

                  </div>
                </div>
               </section>
              
               <div class="clr"></div>
            </div>
         
          <?php include "footer.php";?>
         
    </div>
        
       
        
        
        
      </div>

 <!-- Chart code -->
 <script type="text/javascript">
/**
 * Define SVG path for target icon
 */
var targetSVG = "M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";

/**
 * Create the map
 */
var i=1;


var countrydataprovider = {
 "map": "indiaLow",
"getAreasFromMap": true,
  "theme": "none",
 
 "imagesSettings": {
    "rollOverColor": "#089282",
    "rollOverScale": 3,
"labelPosition": "middle",
    "labelFontSize": 8,
 "labelColor": "#fff",
    "selectedScale": 3,
    "selectedColor": "#089282",
    "color": "#13564e"
  },
"images": <?php echo json_encode($images, JSON_PRETTY_PRINT) ?>,
areas :
[
        {
                "id": "IN-DL",
                   "label":"Delhi",
"passZoomValuesToTarget": true
        },
{
"id":"IN-AR",
"label":"Arunachal",
"passZoomValuesToTarget": true
},


{
"id":"IN-MN",
"label":"Manipur",
"passZoomValuesToTarget": true
},


{
"id":"IN-TR",
"label":"Tripura"
},


{
"id":"IN-ML",
"label":"Meghalaya"
},

{
"id":"IN-NL",
"label":"Nagaland"
},



{
"id":"IN-AS",
"label":"Assam"
},

{
"id":"IN-MZ",
"label":"Mizoram"
},


{
"id":"IN-KL",
"label":"Kerala"
},


{
"id":"IN-TN",
"label":"TamilNadu"
},

{
"id":"IN-KA",
"label":"Karnataka"
},

{
"id":"IN-AP",
"label":"AndhraPradesh"
},

{
"id":"IN-TG",
"label":"Telangana"
},


{
"id":"IN-MH",
"label":"Maharashtra",
"passZoomValuesToTarget": true
},

{
"id":"IN-OR",
"label":"Orissa"
},

{
"id":"IN-CT",
"label":"Chhatisgarh"
},
{
"id":"IN-WB",
"label":"WestBengal"
},

{
"id":"IN-JH",
"label":"Jharkhand"
},

{
"id":"IN-BR",
"label":"Bihar"
},


{
"id":"IN-UP",
"label":"UP"
},



{
"id":"IN-RJ",
"label":"Rajasthan"
},


{
"id":"IN-MP",
"label":"MadhyaPradesh"
},

{
"id":"IN-GJ",
"label":"Gujarat"
},

{
"id":"IN-HR",
"label":"Haryana"
},


{
"id":"IN-PB",
"label":"Punjab"
},


{
"id":"IN-UT",
"label":"Uttrakhand"
},


{
"id":"IN-HP",
"label":"HimachalPradesh"
},

{
"id":"IN-JK",
"label":"JammuandKashmir",
"title":"JammuandKashmir"
}


],
"hideCredits":"true",
"legend": {
    "backgroundColor": "#fff",
    "backgroundAlpha": 0,
    "align": "right",
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


};

var map = AmCharts.makeChart( "chartdiv", {
  "type": "map",
  "theme": "light",
"getAreasFromMap": true, 
 
"export": {
        "enabled": true,},

"dataProvider": countrydataprovider,


 "areasSettings": {
    "color":"#AAF0D1",
"autoZoom": true,
"outlineColor":"#000000",
"selectedColor":undefined,
"selectedOutlineColor":"#000000",
    "unlistedAreasColor": "#AAF0D1",
    "outlineThickness": 0.1,
     "unlistedAreasOutlineColor": "#000000",

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

},

/*"legend": {
    "backgroundColor": "#fff",
    "backgroundAlpha": 0,
    "align": "right",
"marginBottom":10,
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
  },*/



 "showDescriptionOnHover": true,

 //export: {
   // enabled: true
 // },

"mouseWheelZoomEnabled": true



} );




</script>


      
      
   </body>
  
</html>     
