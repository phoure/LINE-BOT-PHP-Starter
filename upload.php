<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.imgur.com/3/image",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "image=https%3A%2F%2Fpbs.twimg.com%2Fmedia%2FDdmwlX7UQAEha-M.jpg",
  CURLOPT_HTTPHEADER => array(
    "authorization: Client-ID 9247e4c204491c4",
    "cache-control: no-cache",
    "content-type: application/x-www-form-urlencoded",
    "postman-token: 18dde97f-f3d1-81b9-a9ec-169308727d9c"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  
$response_data = json_decode($response,true);
  print_r($response_data['data']['link']);
  
}
?>
dwww
