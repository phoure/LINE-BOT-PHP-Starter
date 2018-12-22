<?php
$token = 'BQBlc0Suv0G4hEq41UvW6xE4gO-xOLs3M0h5EL_0JpjlEungOcpfQidT8nQL3S9y3HAOUIO1pb1k6TRruqlElaqXFrR_HKKGl1AoP9l4MXp6nIAV8YwmdNgpzjBgGTYxgX-oR8wnThTRB4wcD3L-Y95SkA7oKlNl4RAaJpS9nG5sXswWsZ2j4ts0Sx0prnQvGK9mNiRwO-pZ-43fml8oU4P4VO99A40dyXSPrEz_poQtSpep4MU6d2iBOYw6qdazI_3pIUhy3sY';
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
