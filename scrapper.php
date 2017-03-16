<?php
$city=$_GET['city'];
$city=str_replace("chennai", "madras", $city);
$city=str_replace("Chennai", "madras", $city);
$city=str_replace(" ", "", $city);


$content=file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");

preg_match('/"phrase">(.*?)</s',$content,$matches);
//preg_match('/3 Day Weather Forecast Summary:/i',$content,$matches);
if (isset($matches[1])){
print_r($matches[1]);
}else{
	print_r("Enter");
	
}

?>