<?php


$url = 'https://api.spotify.com/v1/me/player/pause';
$curl = curl_init();
$data = array("accept" => "application/json", "content-type" => "application/json", "authorization" => "Bearer BQAfOtNUgbnzm8VkghmMvEOy54a00kowzspV31Q0Wtmyg0NUs3PG-xUyt8eos_iBS8drNwhMt3uo8bjXdGF8sEtVMm-AmguHMrhwxUIPk5GX6h5hN4_QTai_eu5jkix9zC_VExuzzpKWNjwPqtiL79RVHdrVwA3N8xf2AOX5oeoQwq_p0aAwQDq17yiwBVpEx-D3andw9rwj0EvVYVoSA6Y2rgnaNEOTc9cq7h-b2IPxLT8AJe5TOW5SIJ7pCvKEvpG8NzRktMu-16U");
$data = json_encode($data);
$length = strlen($data);

curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_NTLM);
curl_setopt($curl, CURLOPT_USERPWD, "username:password");
curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json;charset=utf-8", "Content-Length: $length"));
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FAILONERROR, false);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_HEADER, true);

echo curl_exec($curl);

