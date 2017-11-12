<?php
$date = date("Y-m-d");
$datenew=date_create($date);
date_sub($datenew,date_interval_create_from_date_string("7 days"));
$datestart = date_format($datenew,"Y-m-d");

$url5 = 'http://vmdevtest01:8080/clbsservices/v2016/helpticket/hrm/unsolved/2016-01-01/'.$date.'/count';

$json5 = file_get_contents($url5);
//$json_data5 = json_decode($json5,true);

	echo $json5;

?>