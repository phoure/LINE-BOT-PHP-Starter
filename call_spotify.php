<?php
$token = 'BQA0Vn9OooUXZUAZBSK022oSJ1UXwxm1cx9oujjOjQMUY2Jmgn-APDK62BX4xLin9jkl1tjV7Fq9G0VokHJoKnBkpn6bhr2A8x_ASYBgPWk4OemwrECeV0Uxvs-eKFxDSZaynOUceoB14dhC9LZwh6vBW_PJGPve8VsVTSjaOFNk8SPfo2GCW_sYlv2s7v7wHWSm9d0jVRNhFOto1vQKyItL8xVzvXoo-wQ_eiTO3rN3mKikBSVczyfQKvOyJ2YDMy_9ULCkZxs';
$curl = curl_init();


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
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.spotify.com/v1/artists/5pokGZ1K9Hr6etaKPDxSG8/albums?oauth_signature_method=HMAC-SHA1&oauth_timestamp=1545369076&oauth_nonce=bg7JCU&oauth_version=1.0&oauth_signature=D4g1si4f4npcYqeUJTR5YuNB1Cg%3D&market=TH&limit=50&offset=0",
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

		$response = json_decode($response, true);

debug($response);
