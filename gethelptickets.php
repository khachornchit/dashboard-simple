<?php
header("Content-type: text/json;charset=utf-8");
$filterid = $_GET['filterid'];

$url = 'http://jira.coast.ebuero.de/rest/api/2/filter/'.$filterid;

$username = "jira.help";
$password = "lx@2xf!fKTM4";

 $ch = curl_init();
 $headers = array(
         		'Accept: application/json',
                'Content-Type: application/json'
                 );
                                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                        curl_setopt($ch, CURLOPT_VERBOSE, 1);
                                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                                        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                                        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                                    
                                        curl_setopt($ch, CURLOPT_URL, $url);
                                        curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
                                       // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

                                         $result = curl_exec($ch);
                                         
//echo $result;
$decodedResult = json_decode($result);
$searchUrl = $decodedResult->{'searchUrl'};

$ch2 = curl_init();
$headers = array(
		'Accept: application/json',
		'Content-Type: application/json'
);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2, CURLOPT_VERBOSE, 1);
curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch2, CURLOPT_HTTPHEADER, $headers);

curl_setopt($ch2, CURLOPT_URL, $searchUrl);
curl_setopt($ch2, CURLOPT_USERPWD, "$username:$password");
// curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$result2 = curl_exec($ch2);
 
//echo $result;
$decodedResult2 = json_decode($result2);
$tickets = $decodedResult2->{'issues'};
$data = array();

foreach($tickets as $value){
	///echo $value->{'key'}.'<br>';
	///echo $value->{'fields'}->{'created'}.'<br>';
	///echo 'http://jira.coast.ebuero.de/browse/'.$value->{'key'}.'<br>';
	$link = "http://jira.coast.ebuero.de/browse/".$value->{'key'};
	array_push($data, array('key' => $value->{'key'}, 'link' => $link, 'topic' => $value->{'fields'}->{'summary'},'created'=> $value->{'fields'}->{'created'},'status'=> $value->{'fields'}->{'status'}->{'name'}));
}
echo json_encode($data);


