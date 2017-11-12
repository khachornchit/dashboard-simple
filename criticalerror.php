<?php
$url = 'http://vmdevtest01:8080/clbsservices/v2016/criticalerror/source/count';
$json = file_get_contents($url);
//$json_data = json_decode($json,true);

	//echo $json_data['count'];
echo $json;
?>