<?php


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.spotify.com/v1/me/player/pause",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "PUT",
  CURLOPT_HTTPHEADER => array(
    "accept: application/json",
    "authorization: Bearer BQAfOtNUgbnzm8VkghmMvEOy54a00kowzspV31Q0Wtmyg0NUs3PG-xUyt8eos_iBS8drNwhMt3uo8bjXdGF8sEtVMm-AmguHMrhwxUIPk5GX6h5hN4_QTai_eu5jkix9zC_VExuzzpKWNjwPqtiL79RVHdrVwA3N8xf2AOX5oeoQwq_p0aAwQDq17yiwBVpEx-D3andw9rwj0EvVYVoSA6Y2rgnaNEOTc9cq7h-b2IPxLT8AJe5TOW5SIJ7pCvKEvpG8NzRktMu-16U",
    "cache-control: no-cache",
    "content-type: application/json",
    "postman-token: c83f6429-750a-9c95-1f74-7abb88fffcdc"
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

?>