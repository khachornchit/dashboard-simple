<?php
$date = date("Y-m-d");
$datenew=date_create($date);
date_sub($datenew,date_interval_create_from_date_string("30 days"));
$datestart = date_format($datenew,"Y-m-d");
//$datestart = date("Y-01-01");

$url5 = 'http://vmdevtest01:8080/clbsservices/v2016/helpticket/hrm/total/'.$datestart.'/'.$date.'/count';

$json5 = file_get_contents($url5);
//$json_data5 = json_decode($json5,true);

	echo $json5;

?>