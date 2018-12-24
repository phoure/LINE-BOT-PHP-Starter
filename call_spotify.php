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

$token = 'BQDrKkQYugW4rYOcwuMKzqlRIdOy407hnCTBoA0Zu3nQyGSTcpHT9qmtkFXIZJOs1s04BdwUWQ6bWD700qiTknavE5fJ2GvrABs2drJat2Db5h46g7qYCLwyeYKQfeRnfJgLD9QbcSS2HYhIg10NYHo4HoCYVsTdmQNMzEbHTCgZxgA0hlSiGmElJY60mf56XW-gREtSYVI9gCCG6kkb6cvE0-skLp4vxWi3UJklac4uOLVcYAmy3p33VJyCy6UUN4ew-op1-V0';

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

$aritst_id = '5pokGZ1K9Hr6etaKPDxSG8';
for ($a = 0; $a <= ceil(curl('https://api.spotify.com/v1/artists/'.$aritst_id.'/albums?include_groups=album%2Csingle&market=TH&limit=5&offset=0')['total']/5); $a++) {
	 $aa = $a*5;
	 $c_artist = curl('https://api.spotify.com/v1/artists/'.$aritst_id.'/albums?include_groups=album%2Csingle&market=TH&limit=5&offset='.$aa);

	for ($x = 0; $x <= count($c_artist['items'])-1; $x++) {
		
		$al_name = $c_artist['items'][$x]['name'];
		$al_type = $c_artist['items'][$x]['album_type'];
		$album[] = $c_artist['items'][$x]['id'].'///'.$al_name.'///'.$c_artist['items'][$x]['images'][0]['url'].'++++'.$c_artist['items'][$x]['images'][1]['url'].'++++'.$c_artist['items'][$x]['images'][2]['url'].'///'.$al_type.'///'.$c_artist['items'][$x]['release_date'];

		$c_album = curl('https://api.spotify.com/v1/albums/'.$c_artist['items'][$x]['id'].'/tracks?market=TH&limit=50&offset=0');
		for ($s = 0; $s <= count($c_album['items'])-1; $s++) {

			for ($g = 0; $g <= count($c_album['items'][$s]['artists'])-1; $g++) {
				$ar[] = $c_album['items'][$s]['artists'][$g]['id'];
				$ar[] = $c_album['items'][$s]['artists'][$g]['name'];
			}

			$so[] = $c_album['items'][$s]['id'];
			$so[] = $al_name;
			$so[] = $al_type;
			$so[] = $c_album['items'][$s]['name'];
			$so[] = $c_album['items'][$s]['track_number'];
			$so[] = join('+', $ar);
			$so[] = $c_album['items'][$s]['duration_ms'];
			$so[] = $c_album['items'][$s]['preview_url'];
			$so[] = $c_album['items'][$s]['explicit'];

			$song[] = join('++++',$so);
			unset($ar);
			unset($so);
		}
		$songs[] = join('///',$song);
		unset($song);
	}
}

	$all = $aritst_id.'---'.join(';;',$album).'---'.join(';;',$songs);

echo $all;
