<?php

$date = date("Y-m-d");
$datenew=date_create($date);
date_sub($datenew,date_interval_create_from_date_string("7 days"));
$datestart = date_format($datenew,"Y-m-d");
$url4 = 'http://vmdevtest01:8080/clbsservices/v2016/bugmessage/hrm/unsolved/2016-01-01/'.$date.'/count';
$json4 = file_get_contents($url4);
//$json_data = json_decode($json,true);

	echo $json4;

?>