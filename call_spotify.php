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

$token = 'BQA7l7HvFKj4rsG1mvJywsRVk0QLqh-nNtRTbur41hDI7pQ6ZgxVB3inL36Pb4P8ralY7yy4aBf8JkRWLzV2_JekOdy9YD0DukRbN0y-yQytcKCU3_RAnNy0wF2aPwdTV_srr6vcxu6XZC6IMUVnWsnEJxIJFlg4IOPmmrp7vEO0XpFPwdBbyl0fpq6lX4Hx8DePRLzBz-Y9BO-Vzs-Iy1DDFckhKjGDtAYLstpAzJdgfCNHlni3U9Yg5vO7thqAj0kf7DDVCLw';

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
	$c_album = curl('https://api.spotify.com/v1/albums/1hWhflOpUh3IS1UeYHIW8V/tracks?market=TH&limit=50&offset=0');
	for ($s = 0; $s <= count($c_album['items']); $s++) {
		$song[] = $c_album['items'][$s]['name'];
	}
	$songs[] = join('---',$song);
	unset($song);
}

	$songss = join('<br /><br /><br />',$songs);

echo $songss;
