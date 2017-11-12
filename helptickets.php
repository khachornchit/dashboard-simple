<?php
$date = date("Y-m-d");
$datenew=date_create($date);
date_sub($datenew,date_interval_create_from_date_string("30 days"));
$datestart = date_format($datenew,"Y-m-d");

//$datestart = date("Y-01-01");


$url7 = 'http://vmdevtest01:8080/clbsservices/v2016/helpticket/hrm/unsolved/'.$datestart.'/'.$date;
$json7 = file_get_contents($url7);
echo $json7;
	

?>