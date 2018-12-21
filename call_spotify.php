<?php
$token = 'BQC5_nD_E8pz_Ayzvv3zizPcOlyH-nQOshUZGbEyVLEVUht-Qt4CXdqVD9doxe1aIzFbVIqyEh6hkaLcysk6NF7sWGw_U_ALQysDN6GQs8an7_yJyf4Y3smhLrL2rHeN9IieY0ThKbOeC8lybZUM-757Nbs3wUB57RwlnlJbQvjfyz_PAbwjcnjJCMHH0S44Liriu6XhM8pUlzQngv_gbtm9GbUN4BiuXc3Lfjo9q6sVBbP19J0S1YT1eC16H4cwN0XEbnHDp1c';
$curl = curl_init();

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

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
