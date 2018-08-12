<?php 


if($_GET['c'] == 'test')
{
	$url = "https://newproject.pnru.ac.th/apibotline/record.php";   
	
	$content = json_encode(array('conten'=>'test')) ;
	
	$headers = array('Content-Type: application/json');

	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $content);  
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$result = curl_exec($ch);
	curl_close($ch);
	//print $result ;
	 
}else
{
	echo "none" ;
}

$content = file_get_contents('php://input');  
 
if ($content) {
	
	$url = "https://newproject.pnru.ac.th/apibotline/record.php";   
	
	$headers = array('Content-Type: application/json');

	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $content);  
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$result = curl_exec($ch);
	curl_close($ch);
	 
	
}

echo "OK";

