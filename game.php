<?php
    $access_token = 'hfdfyAmqI79pFXL+upQ6LobXR6TRwi9ydmcwYuhgLgyg/1Vx8EckOUbGxo41Bt4oN38CW4hgI82pB2VX3Psttb6X3Kz50/Kq4TPjpJNzfhPMSUrhhr5xRMyhapAbU00orb6TFddfVy2VvbrnBJqEgAdB04t89/1O/w1cDnyilFU=';





		
function send($data, $strUrl, $arrHeader){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$strUrl);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$result = curl_exec($ch);
	curl_close ($ch);
}
