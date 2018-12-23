<?php

function debug($var){	
     // หาที่มาและบรรทัดของไฟล์ที่เรียกใช้ฟังก์ชัน debug 
     $trace = reset(debug_backtrace());	
     $trace['file'] = str_replace(str_replace('/','\\',$_SERVER['DOCUMENT_ROOT']).'\\','',$trace['file']);	
     echo $trace['file']." (line ".$trace['line'].")<br/>";	

     // แสดงค่าที่เก็บในตัวแปร
     echo "<pre>";
     print_r($var);
     echo "</pre>";
     return $var;	
}

function curl($url){

$token = 'BQAtQ8LjPGz4o92ygdRBHE-i5por2xnycgxfnMfreYhSrD-GBGoowkr9OV-M4LTVMz0lPILypMwAtTLSXWGQwWinjICoUEOv7g2sgZxx-bO3zEG2qqM8FP3SB4l93o1-X0XGrPFLOtEXlPAJjQvWBb7_h-3oOiAh0Judvm0OeZ--H7vDUerGLQ3CMorvAfUTRnkcPWCvdcxB0-9l-QqK2nsh_198JoGGmPyGSj17ID1aXFG26xjZrQPDb8hk2hWeohkjbjoSYQg';

$curl = curl_init();
	curl_setopt_array($curl, array(
	  CURLOPT_URL => $url,
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "GET",
	  CURLOPT_HTTPHEADER => array(
	    "authorization: Bearer $token",
	    "cache-control: no-cache",
	    "content-type: application/json",
	    "postman-token: 33061140-458f-d87d-084b-82467074ae2a"
	  ),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);
	return json_decode($response, true);
}


$c_artist = curl('https://api.spotify.com/v1/artists/5pokGZ1K9Hr6etaKPDxSG8/albums?oauth_signature_method=HMAC-SHA1&oauth_timestamp=1545369076&oauth_nonce=bg7JCU&oauth_version=1.0&oauth_signature=D4g1si4f4npcYqeUJTR5YuNB1Cg%3D&market=TH&limit=50&offset=0');

for ($x = 0; $x <= count($c_artist['items']); $x++) {
	$c_album = curl('https://api.spotify.com/v1/albums/'.$c_artist['items'][$x]['id'].'/tracks?market=TH&limit=50&offset=0');
	for ($s = 0; $s <= count($c_album['items']); $s++) {
		echo $c_album['items'][$x]['name'].'---';
	}
	//$songs[] = join('---',$song);

}

	//$songss = join('<br /><br /><br />',$songs);

//echo $songss;
