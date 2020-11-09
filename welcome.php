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
      <h1><?php// echo $login_session; ?></h1>
      <h2><a href = "logout.php"  style="float: right;">Sign out</a></h2>
	  
	  
	  <?php
			$current_user = $_SESSION['login_user'];
			
		switch ($current_user) {
			case "admin":
				#include('subdivisional_rainfall_get.php');
				include('subdivisional_admin.php');
				break;
			case "mc_bengaluru":
				include('city_weather_admin.php');
				break;
			case "mc_chandigarh":
				include('city_weather_admin.php');
				break;
			case "fmo":
				include('fmo_riverbasin.php');
				break;
			case "test":
				include('Nowcast/mcbengaluru_thunder_new_categories.php');
				break;
			case "temp":
				include('mean_temp_rain.php');
				break;
			case "madhyamah":
				include('city_weather_admin_test.php');
				#include('Nowcast/madhyamaharashtra_thunder_new_categories.php');
				break;
			case "mc_srinagar":
				include('city_weather_admin.php');
				break;
			case "mc_shimla":
				include('city_weather_admin.php');
				break;
			case "mc_dehradun":
				include('city_weather_admin.php');
				break;
			case "mc_jaipur":
				include('city_weather_admin.php');
				break;
			case "mc_lucknow":
				include('city_weather_admin.php');
				break;
			case "rmc_guwahati":
				include('city_weather_admin.php');
				break;
			case "mc_patna":
				include('city_weather_admin.php');
				break;
			case "mc_ahmedabad":
				include('city_weather_admin.php');
				break;
			case "mc_bhopal":
				include('city_weather_admin.php');
				break;
			case "mc_ranchi":
				include('city_weather_admin.php');
				break;
			case "mc_agartala":
				include('city_weather_admin.php');
				break;
			case "rmc_kolkata":
				include('city_weather_admin.php');
				break;
			case "rmc_nagpur":
				include('city_weather_admin.php');
				break;
			case "mc_raipur":
				include('city_weather_admin.php');
				break;
			case "mc_bhubneshwar":
				include('city_weather_admin.php');
				break;
			case "rmc_mumbai":
				include('city_weather_admin.php');
				break;
			case "crs_pune":
				include('city_weather_admin.php');
				break;
			case "mc_hyderabad":
				include('city_weather_admin.php');
				break;
			case "rmc_chennai":
				include('city_weather_admin.php');
				break;
			case "mc_thiruvananthapuram":
				include('city_weather_admin.php');
				break;	
			case "rmc_newdelhi":
				include('city_weather_admin.php');
				break;
			case "mc_itanagar":
				include('city_weather_admin.php');
				break;
			case "mc_gangtok":
				include('city_weather_admin.php');
				break;
			case "cwc_visakhapatanam":
				include('city_weather_admin.php');
				break;
			case "mc_goa":
				include('city_weather_admin.php');
				break;
			case "mc_amaravati":
				include('city_weather_amara.php');
				break;
			case "fmo_patna":
				include('fmo_basin_data.php');
				break;
			case "fmo_newdelhi":
				include('fmo_basin_data.php');
				break;
			case "fmo_asansol":
				include('fmo_basin_data.php');
				break;
			case "fmo_agra":
				include('fmo_basin_data.php');
				break;
			case "fmo_kolkata":
				include('fmo_basin_data.php');
				break;
			case "fmo_lucknow":
				include('fmo_basin_data.php');
				break;
			case "fmo_jalpaiguri":
				include('fmo_basin_data.php');
				break;
			case "fmo_bhubaneswar":
				include('fmo_basin_data.php');
				break;
			case "fmo_guwahati":
				include('fmo_basin_data.php');
				break;
			case "fmo_ahmedabad":
				include('fmo_basin_data.php');
				break;
			case "fmo_bengaluru":
				include('fmo_basin_data.php');
				break;
			case "fmo_chennai":
				include('fmo_basin_data.php');
				break;
			case "fmo_srinagar":
				include('fmo_basin_data.php');
				break;
			case "fmo_hyderabad":
				include('fmo_basin_data.php');
				break;
			case "acwc_mumbai":
				include('port_and_sea_warnings.php');
				break;
			case "acwc_kolkata":
				include('port_and_sea_warnings.php');
				break;
			case "cwc_bhubaneswar":
				include('port_and_sea_warnings.php');
				break;
			case "acwc_chennai":
				include('port_and_sea_warnings.php');
				break;
			case "cwc_thiruvananthapuram":
				include('port_and_sea_warnings.php');
				break;
			case "cwc_ahmedabad":
				include('port_and_sea_warnings.php');
				break;
			case "cwc_visakhapatanam_port":
				include('port_and_sea_warnings.php');
				break;
			case "mc_srinagar_MVDY":
				include('pilgrim_admin.php');
				break;
			case "mc_srinagar_AY":
				include('pilgrim_admin.php');
				break;
			case "mc_dehradun_CDY":
				include('pilgrim_admin.php');
				break;
			case "mc_gangtok_KMY":
				include('pilgrim_admin.php');
				break;
			case "rmc_delhi_pilgrim":
				include('pilgrim_admin.php');
				break;
			case "marquee_admin":
				include('marquee_admin.php');
				break;
			default:
				echo "Invalid login credentials";
}
?>
	  
</body>

</html>

