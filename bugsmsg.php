<?php

$date = date("Y-m-d");
$datenew=date_create($date);
date_sub($datenew,date_interval_create_from_date_string("7 days"));
$datestart = date_format($datenew,"Y-m-d");

$url8 = 'http://vmdevtest01:8080/clbsservices/v2016/bugmessage/hrm/unsolved/2016-01-01/'.$date;
$json8 = file_get_contents($url8);
echo $json8
	

?>