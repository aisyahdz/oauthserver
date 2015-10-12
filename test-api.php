<?php
$service_url = 'http://localhost/my-oauth2/resources.php';	
$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, "access_token=".$_GET['access_token']);
$curl_response = curl_exec($curl);
if ($curl_response === false) {
	$info = curl_getinfo($curl);
	curl_close($curl);
	echo 'error occured during curl exec.<br>Additional info:';
	echo json_encode($info);
}else{
	curl_close($curl);
	echo $curl_response;
}
?>